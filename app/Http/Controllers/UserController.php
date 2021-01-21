<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Auth;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Mail\RegistrationNotification;
use Illuminate\Support\Facades\Mail;
use App\Notification;

class UserController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userRepository->pushCriteria(new RequestCriteria($request));
        $users = $this->userRepository->all();

        $notification = Notification::where([
            ])->orderBy('created_at', 'desc')->get();
            
            $notificationCount = $notification->count();

        return view('users.index',[
            'notification' => $notification,
            'notificationCount' => $notificationCount,
    
        ])->with('users', $users);
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        $notification = Notification::where([
            ])->orderBy('created_at', 'desc')->get();
            
            $notificationCount = $notification->count();
            
        $roles = Role::all();
        $user = User::all();

        return view('users.create', [
            'user' => $user,
            'roles' => $roles,
            'notification' => $notification,
            'notificationCount' => $notificationCount,

        ]);
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();
        
         $this->validate($request,[
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
             'role' => 'required',
            'referenceId' => 'required|string|max:10|unique:users',
        ]);

        $user = $this->userRepository->create([

            'full_name'             => $request->input('full_name'),
            'email'            => $request->input('email'),
            'referenceId'      => $request->input('referenceId'),
            'password'         => bcrypt($request->input('password')),
        ]);
        
      $full_name = $request['full_name'];
      $email = $request['email'];
      $password = $request['password'];
       
      Mail::to($request['email'])->send(new RegistrationNotification($full_name, $email, $password));

        return redirect(route('users.index'))->with('message', 'User Created Successfully');
    }

    /**
     * Display the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $notification = Notification::where([
            ])->orderBy('created_at', 'desc')->get();
            
            $notificationCount = $notification->count();

        $transactions = $user->transactions;
        $qrcodes = $user->qrcodes;

        return view('users.show',[
            'notification' => $notification,
            'notificationCount' => $notificationCount,
    
        ])
        ->with('transactions', $transactions)
        ->with('qrcodes', $qrcodes)
        ->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }
        $roles = Role::all();

        $notification = Notification::where([
            ])->orderBy('created_at', 'desc')->get();
            
            $notificationCount = $notification->count();
  

        return view('users.edit', [
            'user' => $user,
            'roles' => $roles,
            'notification' => $notification,
            'notificationCount' => $notificationCount,

        ])
        ->with('user', $user)
        ->with('roles', $roles);
    }

    /**
     * Update the specified User in storage.
     *
     * @param  int              $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

         $input = $request->all();

         if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
         }

        $user = $this->userRepository->update($input, $id);

        Flash::success('User updated successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        
        $user = $this->userRepository->findWithoutFail($id);

      if ($user->id) {
        $this->userRepository->delete($id);
       
        return redirect(route('users.index'))->with('message','User Deleted successfully');
      }
        return back()->with('error','User Not Deleted successfully');
    }




    public function notificationUnRead(Request $request)
    {
        $user = Auth::user();

    Notification::where('user_id', '=', $user->id)->update([
    'status' => $request->status,
    ]);
    return back();
    }

    
}
