<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use QRCode;
use App\Products;
use App\Models\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Models\Qrcode as QrcodeModel;
use App\Notification;

class QrcodeImageController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function image()
    {
        $notification = Notification::where([
            ])->orderBy('created_at', 'desc')->get();
            
            $notificationCount = $notification->count();

        return view('qrcodes.addImage',[
            'notification' => $notification,
            'notificationCount' => $notificationCount,
    
        ]);
    }


 public function productImagePost(Request  $request)
    {
      
        $qrcodes = QrcodeModel::where('user_id', '=', 1)->first();

  //        image upload
        $image=$request->file('image');

        if($image)
        {
            $imageName = time(). $image->getClientOriginalName();
            $image->move('uploads/Products',$imageName);
            $imagePath = "uploads/Products/$imageName";

            QrcodeModel::where('user_id', '=', Auth::user()->id)->updateOrCreate([
                'image' => $imageName,
            ]);
        }
        return redirect('qrcodes/index')->with('message','Qrcode save successfully.');
        
}
 
 



}