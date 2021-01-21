<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Manufacture;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Notification;

class ManufactureController extends Controller
{
    

    public function index()
    {
        $notification = Notification::where([
            ])->orderBy('created_at', 'desc')->get();
            
            $notificationCount = $notification->count();

        $manufacture = Manufacture::where([
            ])->orderBy('created_at', 'desc')->get();
      return view('manufacture.index', [
        'manufacture' => $manufacture,
  'notification' => $notification,
              'notificationCount' => $notificationCount,

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
        $manufacture = Manufacture::where('id', '=', 1)->first();


//        validation
        $this->validate($request,[
            'name'=>'required',
           
            'file'=>'file|mimes:png,jpg,jpeg|max:10000'
        ]);


   $image=$request->file('file');

    if($image){
      $imageName = time(). $image->getClientOriginalName();
      $image->move('manufacture/upload',$imageName);
      $imagePath = "manufacture/upload/$imageName";
    
                Manufacture::create([
                    'file' => $imageName,
                    'name' => $request->name, 
                   
              ]);
            }


        return redirect('manufacture/index')->with('message',' Manufacture Created Successfully ');
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
        $manufacture=Manufacture::pluck('name','id');
        return view('manufacture.edit');
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
        $product=Product::find($id);
        $formInput=$request->except('image');

//        validation
        $this->validate($request,[
            'name'=>'required',
            'size'=>'required',
            'price'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg|max:10000'
        ]);

        //        image upload
        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $formInput['image']=$imageName;
        }

         $product->update($formInput);
        return redirect('manufacture/index');
    }


    public function deleteManufacture($id)
    {
        Manufacture::where('id', '=', $id)->delete();

        return redirect('manufacture/index')->with('d_message',' Manufacture Deleted Successfully ');
    }
    

   
}
