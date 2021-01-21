<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Vsmoraes\Pdf\Pdf;
use App\Categories;
use App\Manufacture;
use App\Models\Qrcode as QrcodeModel;
use App\Http\Requests\CreateTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Repositories\TransactionRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Transaction;
use App\Contact;
use App\Newsletter;
use App\FindAnInstaller;
use App\Notification;

class HomeController extends Controller
{



       /** @var  TransactionRepository */
       private $transactionRepository;
       private $pdf;

       public function __construct(TransactionRepository $transactionRepo, Pdf $pdf)
       {
           $this->transactionRepository = $transactionRepo;
           $this->pdf = $pdf;
           $this->middleware('auth');
       }

       



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
  
        //Unverified Account
         if(Auth::user()->role_id == 5){

         $currentUser = \Auth::user();
        $users = Auth::user();
        

            return view('auth/unverified', [

            'users' => $users,

        ]);

        }


    //USER
         if(Auth::user()->role_id == 4){
            
            
             //   $products = Products::all();
      $manufacture = Manufacture::all();
      $category = Categories::all();
      $users = User::all();
      $qrcodes = QrcodeModel::all();
        //Users should be able to view their transactions
        $transactions = Transaction::where('user_id', Auth::user()->id)->latest()->get();

        // $productsCount = $products->count();
        $manufactureCount = $manufacture->count();
        $categoryCount = $category->count();
        $qrcodesCount = $qrcodes->count();
        $transactionCount = $transactions->count();
        
         $currentUser = \Auth::user();
        $users = Auth::user();
        
        $users = User::where([
        ])->orderBy('created_at', 'desc')->get();
        $usersCount = $users->count();

        $users = User::where('referenceId', '=', Auth::user()->id )->get();

        $notification = Notification::where([
          ])->orderBy('created_at', 'desc')->get();
          
          $notificationCount = $notification->count();


          return view('home', [

            'users' => $users,
            'qrcodes' => $qrcodes,
            'manufacture' => $manufacture,
            'transactions' => $transactions,
            'notification' => $notification,
            'notificationCount' => $notificationCount,
            'category' => $category,
            'usersCount' => $usersCount,
            'qrcodesCount' => $qrcodesCount,
            'manufactureCount' => $manufactureCount,
            'categoryCount' => $categoryCount,
            'transactions' => $transactions,
            'transactionCount' => $transactionCount,

        ]);
        
        }
      

        if(Auth::user()->role_id == 1){
              
        $currentUser = \Auth::user();
        $users = Auth::user();
        
        $users = User::where('referenceId', '=', Auth::user()->id )->get();
      
        $users = User::where([
          ])->orderBy('created_at', 'desc')->get();
        $manufacture = Manufacture::all();
        $category = Categories::all();
        $qrcodes = QrcodeModel::all();
        $transactions = $this->transactionRepository->all();

        $manufactureCount = $manufacture->count();
        $categoryCount = $category->count();
        $qrcodesCount = $qrcodes->count();
        $usersCount = $users->count();
        $transactionCount = $transactions->count();



        $notification = Notification::where([
          ])->orderBy('created_at', 'desc')->get();
          
          $notificationCount = $notification->count();

        return view('home', [

            'users' => $users, 
           
          
            'qrcodes' => $qrcodes,
            'manufacture' => $manufacture,
            'transactions' => $transactions,
            'transactionCount' => $transactionCount,
            'notification' => $notification,
            'notificationCount' => $notificationCount,
            'category' => $category,
            'usersCount' => $usersCount,
            'qrcodesCount' => $qrcodesCount,
            'manufactureCount' => $manufactureCount,
            'categoryCount' => $categoryCount,
                

        ]);
    }
  }


   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {

        $currentUser = \Auth::user();
         $user = Auth::user();

         $notification = Notification::where([
          ])->orderBy('created_at', 'desc')->get();
          
          $notificationCount = $notification->count();
    
        return view('profile.profile',[
            'user'=> $user,
            'notification' => $notification,
            'notificationCount' => $notificationCount,
            ]);
    }




        //Profile Picture Post
        public function upload(Request  $request)
        {
    
              $currentUser = \Auth::user();
              $user = Auth::user();

              $request->validate([
                'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

          
                                //        image upload
                  $avatar=$request->file('avatar');
                
                  if($avatar){
                       $currentUser = \Auth::user();
                      $avatarName = time(). $avatar->getClientOriginalName();
                      $avatar->move('profilePicture/upload',$avatarName);
                      $avatarPath = "profilePicture/upload/$avatarName";             
                     

                  User::where('id', '=', Auth::user()->id)->update([
                      'avatar' => $avatarName,
                       
                    ]);

                  } 

         
            return back()->with('success_message','Picture Uploaded ');
        }




                //My Profile Post
                public function postSettings(Request  $request)
                {
            
                      $currentUser = \Auth::user();
                      $user = Auth::user();
        
                    //   $request->validate([
                    //     // 'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    //     'interest_group_id' => 'required',
                    //     'adullam_group_id' => 'required',
                    //     'email' => 'email|max:255|unique:users',
                    // ]);
        
        
                          User::where('id', '=', Auth::user()->id)->update([
                                'full_name' => $request->full_name,
                                'gender' => $request->gender,
                                'business_name' => $request->business_name,
                                'business_type' => $request->business_type,
                                'number' => $request->number,
                                'address' => $request->address,
                                'state' =>     $request->state,
                               
                            ]);
    
                 
                    return back()->with('success_message','Profile Updated Successfully ');
                }

         //My Profile Post
    public function postPassword(Request  $request)
    {
      User::where('id', '=', Auth::user()->id)->update([
            'password' => bcrypt($request['password'])


        ]);

        return back()->with('success_message','Password Updated Successfully ');
    }


    public function Installermanage()
    {
      $notification = Notification::where([
        ])->orderBy('created_at', 'desc')->get();
        
        $notificationCount = $notification->count();


      $find_an_installer = FindAnInstaller::all();
      return view('manage.find_an_installer', [     
              'find_an_installer' => $find_an_installer,
              'notification' => $notification,
              'notificationCount' => $notificationCount,
        ]);
    }
    
    public function Contactmanage()
    {

      $notification = Notification::where([
        ])->orderBy('created_at', 'desc')->get();
        
        $notificationCount = $notification->count();

      $contact = Contact::all();
      return view('manage.contact', [     
              'contact' => $contact,
              'notification' => $notification,
              'notificationCount' => $notificationCount,
        ]);
    }
    
    
    public function Newslettermanage()
    {

      $notification = Notification::where([
        ])->orderBy('created_at', 'desc')->get();
        
        $notificationCount = $notification->count();


      $newsletter = Newsletter::all();
      return view('manage.newsletter', [     
              'newsletter' => $newsletter,
              'notification' => $notification,
              'notificationCount' => $notificationCount,
        ]);
    }



    public function payIndex()
    {

      $notification = Notification::where([
        ])->orderBy('created_at', 'desc')->get();
        
        $notificationCount = $notification->count();

      $transactions = Transaction::all();

      return view('transactions.payVerify', [     
              'transactions' => $transactions,
              'notification' => $notification,
              'notificationCount' => $notificationCount,
        ]);
    }






      //PayVerification
      public function payVerify(Request $request)
      {
  
            $currentUser = \Auth::user();
            $user = Auth::user();

            $transactions = Transaction::where('id', '=', 1)->first();
  
            $this->validate($request,[
              'file'=>'file|mimes:png,jpg,jpeg|max:10000',
            ]);
        
        
                     $image=$request->file('file');
        
            if($image){
              $imageName = time(). $image->getClientOriginalName();
              $image->move('payVerify/upload',$imageName);
              $imagePath = "payVerify/upload/$imageName";
    
                Transaction::where('user_id', '=', Auth::user()->id)->update([
                  'file' => $imageName,
                  
                  ]);

                } 

              return redirect('home')->with('success_message','Order Submited successfully, Our Admin will release product');
       }



       public function acceptVerification(Request $request)
       {
        Transaction::where('id', '=', $request->id)->update([
       'status' => $request->status
       ]);

       return back()->with('d_message','Verification Accepted successfully');
      }


      public function declineVerification(Request $request)
      {
        Transaction::where('id', '=', $request->id)->update([
      'status' => $request->status
      ]);
      
      return back()->with('d_message','Verification Declined successful');
      }



      



      public function notificationManage()
      {
  
        $notification = Notification::where([
          ])->orderBy('created_at', 'desc')->get();
          
          $notificationCount = $notification->count();

  
        return view('manage.notifications', [     
                'notification' => $notification,
                'notificationCount' => $notificationCount,
          ]);
      }
  


       //Notification
       public function notificationPost(Request $request)
       {
   
             $notification = Notification::where('id', '=', 1)->first();
   
             $this->validate($request,[
               'file'=>'file|mimes:png,jpg,jpeg|max:10000',
             ]);
         
         
             $image=$request->file('file');
         
             if($image){
               $imageName = time(). $image->getClientOriginalName();
               $image->move('upload/Notifications',$imageName);
               $imagePath = "upload/Notifications/$imageName";
     
               Notification::create([
                   'file' => $imageName,
                   'title' => $request->title,
                   'body' => $request->body,
                   ]);
 
                 } 
 
               return redirect()->back()->with('success_message','Notification Published successfully');
        }

        public function deleteNotification($id)
        {
          Notification::where('id', '=', $id)->delete();
      
            return redirect()->back()->with('d_message','Notification Deleted Successfully ');
        }

        

}
