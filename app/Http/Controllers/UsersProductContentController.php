<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use App\Categories;
use App\Manufacture;
use App\Http\Requests\CreateQrcodeRequest;
use App\Http\Requests\UpdateQrcodeRequest;
use App\Repositories\QrcodeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use QRCode;
use Illuminate\Support\Facades\Hash;
use App\Models\Qrcode as QrcodeModel;
use Prettus\Repository\Criteria\RequestCriteria;
 
use Paystack;
use App\Models\User;
use App\Models\Transaction;
use App\Http\Resources\Qrcode as QrcodeResource;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\QrcodeCollection as QrcodeResourceCollection;
use App\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class UsersProductContentController extends Controller
{


     /** @var  QrcodeRepository */
     private $qrcodeRepository;

     public function __construct(QrcodeRepository $qrcodeRepo)
     {
         $this->qrcodeRepository = $qrcodeRepo;
     }


  
    public function categoryList()
    {
        $category = Categories::where([
            ])->orderBy('created_at', 'desc')->get();

            $notification = Notification::where([
              ])->orderBy('created_at', 'desc')->get();
              
              $notificationCount = $notification->count();

         return view('users.user_category', [
        'category' => $category,
        'notification' => $notification,
        'notificationCount' => $notificationCount,

        ]);
    }


    public function view($category_id)
    {

      $notification = Notification::where([
        ])->orderBy('created_at', 'desc')->get();
        
        $notificationCount = $notification->count();
  
     if(Auth::user()->role_id == 1){
        $this->qrcodeRepository->pushCriteria(new RequestCriteria($request));
        $qrcodes = $this->qrcodeRepository->paginate(5);
      }else{
        $qrcodes = QrcodeModel::where('category_id', '=', $category_id)->get();
      $category =  Categories::find($category_id);
    }

    
     //check if request expects json 
            //docs: https://laravel.com/api/5.6/Illuminate/Http/Request.html
            // if($request->expectsJson()){
            //     return response([
            //         'data' => QrcodeResourceCollection::collection($qrcodes)
            //     ], Response::HTTP_OK); 
            // }
      
        return view('qrcodes/products', [
           
            'category' => $category,
            'qrcodes' => $qrcodes,
            'notification' => $notification,
            'notificationCount' => $notificationCount,
        ]);
  
    }




      /**
 * Display the specified resource.
 *
 * @param  string  $slug
 * @return \Illuminate\Http\Response
 */
public function show($slug)
{

  $notification = Notification::where([
    ])->orderBy('created_at', 'desc')->get();
    
    $notificationCount = $notification->count();

    $qrcodes = QrcodeModel::where('slug', $slug)->firstOrFail();
      $category = Categories::all();
      $manufacture = Manufacture::all();
        $interested = QrcodeModel::where('slug', '!=', $slug)->get()->random(0);


    return view('qrcodes.productView', [
      'notification' => $notification,
      'notificationCount' => $notificationCount,
  ])->with(['qrcodes' => $qrcodes, 'category' => $category, 'interested' => $interested,]);
}



public function search(Request $request)
{
$user_id = Auth::user()->id;
$qrcodes = QrcodeModel::find($user_id);

$keyword = $request->input('search');
$qrcodes = QrcodeModel::where('name', 'LIKE', '%' .$keyword. '%')->get();

return view('qrcodes.searchPost',['qrcodes' => $qrcodes]);
}

   
 
   
}
