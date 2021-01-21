<?php

namespace App\Http\Controllers\SuperadminAuth;

use App\Http\Controllers\Controller;
use App\Categories;
use App\Manufacture;
use App\Products;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Notification;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
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

        $products=Products::all();
        return view('superadmin.products.index',[
            'notification' => $notification,
            'notificationCount' => $notificationCount,
    
        ],compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notification = Notification::where([
            ])->orderBy('created_at', 'desc')->get();
            
            $notificationCount = $notification->count();

        $manufacture = Manufacture::all();

        $products = Products::where('id', '=', 1)->first();
        $category=Categories::pluck('name','id');
        return view('superadmin.products.create', [
            'products' => $products,
            'manufacture' => $manufacture, 
            'notification' => $notification,
            'notificationCount' => $notificationCount,      
        ],compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $products = Products::where('id', '=', 1)->first();

        $formInput=$request->except('file');
        //        validation
                $this->validate($request,[
                    'name'=>'required',
                    'p_Description'=>'required',
                    'manufacture'=>'required',
                    'quantity'=>'required',
                    'price'=>'required',
                    'sku'=>'required',
                    'slug'=>'required',
                    'category_id'=>'required',
                    'file'=>'required|file|mimes:jpeg,png,jpg,jpeg,gif,svg|max:10000',
                    // 'pdf' => 'required|mimes:pdf|max:200000',
          
                ]);
        
        
                    //        image upload
              $file=$request->file('file');
            
              if($file){
                  $fileName = time(). $file->getClientOriginalName();
                  $file->move('product/upload',$fileName);
                  $imagePath = "product/upload/$fileName";
            
                  Products::create([
                     'name' => $request->name,
                      'file' => $fileName,
                      'p_Description' =>$request ->p_Description,
                      'price' => $request->price,
                      'quantity' => $request->quantity,
                      'manufacture' => $request->manufacture,
                       'slug' => $request->slug,
                      'sku' => $request->sku,
                      'category_id' => $request->category_id,
                     'youtube_url' => $request->youtube_url,
            
            
                  ]);
              }
              
              
     

                return redirect()->route('superadmin.products.index')
                ->with('message',' Product Created Successfully ');
               
            }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notification = Notification::where([
            ])->orderBy('created_at', 'desc')->get();
            
            $notificationCount = $notification->count();
            
        $products=Products::find($id);
        $category=Categories::pluck('name','id');
        return view('superadmin.products.edit', [
            'products' => $products,
            'manufacture' => $manufacture, 
            'notification' => $notification,
            'notificationCount' => $notificationCount,      
        ],compact('products', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hotproduct=HotProduct::find($id);
        $formInput=$request->except('file');
//        validation
        $this->validate($request,[
            'name'=>'required',
            'p_Description'=>'required',
            'manufacture'=>'required',
            'quantity'=>'required',
            'price'=>'required',
            'currency'=>'required',
            'slug'=>'required',
            'file'=>'file|mimes:png,jpg,jpeg|max:10000',
            
        ]);

        $products = new Products;
        $products->name = $request->input('name');
        $products->p_Description = $request->input('p_Description');
        $products->p_category = $request->input('p_category');
        $products->price = $request->input('price');
        $products->quantity = $request->input('quantity');
        $products->manufacture = $request->input('manufacture');
        $products->currency = $request->input('currency');
        $products->slug = $request->input('slug');

            if(Input::hasFile('file')){
                $file = Input::file('file');
                $file->move(public_path(). '/product/upload/',
                $file->getClientOriginalName());
                $url = URL::to("/") . '/product/upload/' .
                $file->getClientOriginalName();
                }
                $products->file = $url;
                $products->save();
        return redirect()->route('superadmin.products.index')->with('message',' Product Created Successfully ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Products::destroy($id);
        return back()->with('message',' Product Deleted Successfully ');;
    }


   
}
