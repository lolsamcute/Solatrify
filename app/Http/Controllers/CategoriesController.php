<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Categories;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Notification;
class CategoriesController extends Controller
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

        $category=Categories::all();


        return view('category.index',[
            'notification' => $notification,
            'notificationCount' => $notificationCount,
    
        ])->with(['category' => $category]);
    }
  

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
  

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = Categories::where('id', '=', 1)->first();

        $formInput=$request->except('file');
        //        validation
                $this->validate($request,[
                    'name'=>'required',
                    'file'=>'file|mimes:png,jpg,jpeg|max:10000',
                    
                ]);
                
                
                  $image=$request->file('file');

    if($image){
      $imageName = time(). $image->getClientOriginalName();
      $image->move('category/upload',$imageName);
      $imagePath = "category/upload/$imageName";
    
                Categories::create([
                    'file' => $imageName,
                    'name' => $request->name, 
                   
              ]);
            }

    
        return back()->with('message', 'Category Successfully Published');
    }


    // public function store(Request $request)
    // {
    //     //        validation
    //     $this->validate($request,[
    //         'name'=>'required',
    //         'file'=>'file|mimes:png,jpg,jpeg|max:10000',
            
    //     ]);

          
    //           $category = Categories::where('id', '=', 1)->first();
    //           $category = new Categories;
    //           $category->name = $request->input('name');

            
    //           if(Input::hasFile('file')){
    //             $file = Input::file('file');
    //             $file->move(public_path(). '/uploads/Category/',
    //             $file->getClientOriginalName());
    //             $url = URL::to("/") . '/uploads/Category/' .
    //             $file->getClientOriginalName();
    //           }
    //           $category->file = $url;
    //           $category->save();

    //     return redirect()->route('superadmin.category.index')->with('message', 'Category Successfully Published');
    // }

    
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function deleteCategory($id)
    // {

    //     $category=Categories::findorfail($id);
    //     // $category->products()->delete();
    //     $category->delete();
    //     return back()->with('message', 'Category Deleted Successfully');
    // }



        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categories::destroy($id);
        return back()->with('d_message',' Category Deleted Successfully ');;
    }



   
}
