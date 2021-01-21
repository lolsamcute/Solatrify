<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQrcodeRequest;
use App\Http\Requests\UpdateQrcodeRequest;
use App\Repositories\QrcodeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use QRCode;
use App\Categories;
use App\Manufacture;
use Illuminate\Support\Facades\Hash;
use App\Models\Qrcode as QrcodeModel;
use Auth;
use Prettus\Repository\Criteria\RequestCriteria;
use Paystack;
use App\Models\User;
use App\Models\Transaction;
use App\Http\Resources\Qrcode as QrcodeResource;
use App\Notification;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;

use Symfony\Component\HttpFoundation\Response;


use App\Http\Resources\QrcodeCollection as QrcodeResourceCollection;
class QrcodeController extends AppBaseController
{
    /** @var  QrcodeRepository */
    private $qrcodeRepository;

    public function __construct(QrcodeRepository $qrcodeRepo)
    {
        $this->qrcodeRepository = $qrcodeRepo;
    }

    /**
     * Display a listing of the Qrcode.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        //only admin should see all qrcodes
        if(Auth::user()->role_id == 1){
        $this->qrcodeRepository->pushCriteria(new RequestCriteria($request));
          $qrcodes = $this->qrcodeRepository->paginate(5);
        }else{
            $qrcodes = QrcodeModel::where('user_id', Auth::user()->id)->paginate(5);
        }

        //check if request expects json 
        //docs: https://laravel.com/api/5.6/Illuminate/Http/Request.html
        if($request->expectsJson()){
            return response([
                'data' => QrcodeResourceCollection::collection($qrcodes)
            ], Response::HTTP_OK); 
        }


        $notification = Notification::where([
            ])->orderBy('created_at', 'desc')->get();
            
            $notificationCount = $notification->count();

        return view('qrcodes.index', [
            'notification' => $notification,
            'notificationCount' => $notificationCount,
    
            ])
            ->with('qrcodes', $qrcodes);
    }


    public function show_payment_page(Request $request){
        /**
         * receive the buyer email
         * Retrieve user id using the buyer email
         * initiate transaction
         * Redirect to paystack payment page
         */

         $input = $request->all();

         //get the user with this email
         $user = User::where('email',  $input['email'])->first();

        //  if(empty($user)){ //user does not exist
        //     //create user account 
        //     $user = User::create([
        //         'name' => $input['email'],
        //         'email' => $input['email'],
        //         'password' => Hash::make($input['email']),
        //     ]);
        //  }

        $notification = Notification::where([
            ])->orderBy('created_at', 'desc')->get();
            
            $notificationCount = $notification->count();
            
        //get the qrcode details
         $qrcode = QrcodeModel::where('id', $input['id'])->first();
         $transaction = Transaction::create([
            'user_id' => $user->id,
            'qrcode_id' => $qrcode->id,
            'status' => 'initiated',
            'qrcode_owner_id' => $qrcode->user_id,
            'payment_method' => 'paystack/card',
            'amount' => $qrcode->amount
         ]);

   return view('qrcodes.paystack-form',[
    'notification' => $notification,
    'notificationCount' => $notificationCount,
    'qrcode'=> $qrcode, 
    'transaction'=> $transaction,
    'user' => $user

    ]);

    }
    /**
     * Show the form for creating a new Qrcode.
     *
     * @return Response
     */
    public function create()
    {
        $category = Categories::where([
            ])->orderBy('created_at', 'desc')->get();

            $manufacture = Manufacture::where([
                ])->orderBy('created_at', 'desc')->get();

                $notification = Notification::where([
                    ])->orderBy('created_at', 'desc')->get();
                    
                    $notificationCount = $notification->count();

        return view('qrcodes.create', [
            'notification' => $notification,
            'notificationCount' => $notificationCount,
            'manufacture' => $manufacture,
            'category' => $category,
        ]);
    }

    /**
     * Store a newly created Qrcode in storage.
     *
     * @param CreateQrcodeRequest $request
     *
     * @return Response
     */
    public function store(CreateQrcodeRequest $request)
    {
        $qrcode = QrcodeModel::where('id', '=', 1)->first();

        $formInput=$request->except('file');
        //        validation
                $this->validate($request,[
                    'name'=>'required',
                    'file'=>'file|mimes:png,jpg,jpeg|max:10000',
                    
                ]);
                

        //        image upload
        $image=$request->file('image');

        if($image)
        {
            $imageName = time(). $image->getClientOriginalName();
            $image->move('uploads/Products',$imageName);
            $imagePath = "uploads/Products/$imageName";

            QrcodeModel::create([
                'image' => $imageName,
                // 'qrcode_id' => $request->qrcode_id, 
                'youtube_url' => $request->youtube_url, 
                'category_id' => $request->category_id, 
                'manufacture_id' => $request->manufacture_id, 
                'slug' => $request->slug, 
                'p_description' => $request->p_description, 
                'quantity' => $request->quantity, 
                'sku' => $request->sku, 
                'name' => $request->name, 
                'product_url' => $request->product_url, 
                'callback_url' => $request->callback_url, 
                'qrcode_path' => $request->qrcode_path,
                'amount' => $request->amount, 
                'oldAmount' => $request->oldAmount, 
                'status' => $request->status,  
               
          ]);
        }
        
        return redirect('qrcodes/index')->with('message','Product saved successfully.');
  
    }

    /**
     * Display the specified Qrcode.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id, Request $request)
    {

        $notification = Notification::where([
            ])->orderBy('created_at', 'desc')->get();
            
            $notificationCount = $notification->count();

        $qrcode = $this->qrcodeRepository->findWithoutFail($id);

        if (empty($qrcode)) {

            if($request->expectsJson()){
                 throw new \ErrorException();
            }
            
            Flash::error('Qrcode not found');

            return redirect(route('qrcodes.index'));
        }
        $transactions = $qrcode->transactions;


        if ($request->expectsJson()) {
            return response([
                'data' => new QrcodeResource($qrcode)
            ], Response::HTTP_OK); 
        }  

        return view('qrcodes.show', [
            'notification' => $notification,
            'notificationCount' => $notificationCount,
        ])
        ->with('transactions', $transactions)
        ->with('qrcode', $qrcode);
    }

    /**
     * Show the form for editing the specified Qrcode.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $notification = Notification::where([
            ])->orderBy('created_at', 'desc')->get();
            
            $notificationCount = $notification->count();
            
        $qrcode = $this->qrcodeRepository->findWithoutFail($id);

        if (empty($qrcode)) {
            Flash::error('Qrcode not found');

            return redirect(route('qrcodes.index'));
        }
        $category=Categories::all();

        $manufacture = Manufacture::where([
            ])->orderBy('created_at', 'desc')->get();

        return view('qrcodes.edit', [
            'notification' => $notification,
            'notificationCount' => $notificationCount,
            'category' => $category,
            'manufacture' => $manufacture,
        ])->with('qrcode', $qrcode);
    }

    /**
     * Update the specified Qrcode in storage.
     *
     * @param  int              $id
     * @param UpdateQrcodeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQrcodeRequest $request)
    {
        $qrcode = $this->qrcodeRepository->findWithoutFail($id);

        if (empty($qrcode)) {
            Flash::error('Qrcode not found');

            return redirect(route('qrcodes.index'));
        }

        $qrcode = $this->qrcodeRepository->update($request->all(), $id);


        //generate qrcode
        //save qrcode image in our folder on this site
        $file = 'generated_qrcodes/'.$qrcode->id.'.png'; 
       $newQrcode = QRCode::text("message")
        ->setSize(8)
        ->setMargin(2)
        ->setOutfile($file)
        ->png();
         $input['qrcode_path'] = $file; 
    
           //update database
         $newQrcode =   QrcodeModel::where('id', $qrcode->id)
                        ->update([
                            'qrcode_path' => $input['qrcode_path']
                        ]);

        $getQrcode =  QrcodeModel::where('id', $qrcode->id)->first();
        //check if request expects json 
       //docs: https://laravel.com/api/5.6/Illuminate/Http/Request.html
       if($request->expectsJson()){
            return response([
                'data' => new QrcodeResource($getQrcode)
            ], Response::HTTP_CREATED); 
       }  

        Flash::success('Qrcode updated successfully.');

        return redirect(route('qrcodes.show', ['qrcode'=> $qrcode]));
    }

    /**
     * Remove the specified Qrcode from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $qrcode = $this->qrcodeRepository->findWithoutFail($id);

        if (empty($qrcode)) {
            Flash::error('Qrcode not found');

            return redirect(route('qrcodes.index'));
        }

        $this->qrcodeRepository->delete($id);

        if ($request->expectsJson()) {
            return response([
                'message' => 'Qrcode deleted successfully'
            ], Response::HTTP_NOT_FOUND); 
        }  

        Flash::success('Qrcode deleted successfully.');

        return redirect(route('qrcodes.index'));
    }

     


}
