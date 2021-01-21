<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use QRCode;

use App\Repositories\QrcodeRepository;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\Qrcode as QrcodeResource;
use App\Categories;
use App\Manufacture;
use App\Http\Requests;
use \Cart as Cart;
use Validator;
use Auth;
use Route;
use Paystack;
use App\Notification;
use App\Models\Qrcode as QrcodeModel;


class CartController extends Controller
{
 

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
        $this->middleware('auth');
    }

   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        
        $notification = Notification::where([
            ])->orderBy('created_at', 'desc')->get(); 
            
            $notificationCount = $notification->count();
            
            $qrcode = QrcodeModel::where('id', '=', 1)->first();
         
        return view('qrcodes.cart', [     
            'notification' => $notification,
            'notificationCount' => $notificationCount,
            'qrcode' => $qrcode
      ]);
  }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if (!$duplicates->isEmpty()) {
            return redirect('cart')->withSuccessMessage('Product is already in your cart!');
        }

        Cart::add($request->id, $request->name, 1, $request->amount)->associate('App\Models\Qrcode');
        return redirect('cart')->withSuccessMessage('Product was added to your cart!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        // Validation on max quantity
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);

        if ($validator->fails()) {
            session()->flash('error_message', 'Quantity must be between 1 and 5.');
            return response()->json(['success' => false]);
        }

        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'Quantity was updated successfully!');

        return back();;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect('cart')->withSuccessMessage('Item has been removed!');
    }

    /**
     * Remove the resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function emptyCart()
    {
        Cart::destroy();
        return redirect('cart')->withSuccessMessage('Your cart has been cleared!');
    }

    /**
     * Switch item from shopping cart to wishlist.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function switchToWishlist($id)
    {



        $item = Cart::get($id);

        Cart::remove($id);

        $duplicates = Cart::instance('wishlist')->search(function ($cartItem, $rowId) use ($id) {
            return $cartItem->id === $id;
        });

        
        $notification = Notification::where([
            ])->orderBy('created_at', 'desc')->get(); 
            
            $notificationCount = $notification->count();

        if (!$duplicates->isEmpty()) {
            return redirect('cart', [     
                'notification' => $notification,
                'notificationCount' => $notificationCount,
          ])->withSuccessMessage('Item is already in your Wishlist!');
        }

        Cart::instance('wishlist')->add($item->id, $item->name, 1, $item->amount)
            ->associate('App\Models\Qrcode');

        return redirect('cart', [     
                'notification' => $notification,
                'notificationCount' => $notificationCount,
          ])->withSuccessMessage('Item has been moved to your Wishlist!');

    }
}
