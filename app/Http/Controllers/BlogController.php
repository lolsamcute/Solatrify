<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Post;
use Auth;
use App\Categorys;
use DB;
use App\Notification;

class BlogController extends Controller
{


    public function manage()
    {
      $notification = Notification::where([
        ])->orderBy('created_at', 'desc')->get();
        
        $notificationCount = $notification->count();

      $posts = Post::all();
      return view('blog.manage', [     
              'posts' => $posts,
              'notification' => $notification,
              'notificationCount' => $notificationCount,
        ]);
    }


  public function addpost(Request $request)
  {

  $posts = Post::where('id', '=', 1)->first();
  
  
    $this->validate($request,[
      'post_title' => 'required',
      'post_body' => 'required',
      'file'=>'file|mimes:png,jpg,jpeg|max:10000',
       'tag' => 'required',
    ]);


    $image=$request->file('file');

    if($image){
      $imageName = time(). $image->getClientOriginalName();
      $image->move('uploads/Blog',$imageName);
      $imagePath = "uploads/Blog/$imageName";
    
                Post::create([
                    'file' => $imageName,
                    'post_title' => $request->post_title, 
                     'user_id' => $request->user_id,
                     'post_body' => $request->post_body,     
                     'tag' => $request->tag,     
              ]);
            }


    return redirect('/blog/manage')->with('success_message','Blog Published Successfully');

  }


  
  public function view($id)
  {
    $notification = Notification::where([
      ])->orderBy('created_at', 'desc')->get();
      
      $notificationCount = $notification->count();
    $posts = DB::table('posts')->where('id',$id)->first();
    return view('blog.view', [     
            'posts' => $posts,
            'notification' => $notification,
            'notificationCount' => $notificationCount,
      ]);
  }




  public function deleteBlog($id)
  {
      Post::where('id', '=', $id)->delete();

      return redirect('blog/manage')->with('success_message1','Blog Deleted Successfully ');
  }


  public function edit($id)
  {
    $notification = Notification::where([
      ])->orderBy('created_at', 'desc')->get();
      
      $notificationCount = $notification->count();

    $posts = Post::find($id);
    $posts = DB::table('posts')->where('id',$id)->first();
      return view('blog.edit', [
        'posts'=> $posts,
        'notification' => $notification,
        'notificationCount' => $notificationCount,
        ]);
  }


    public function editPost(Request $request)
    {
      $image=$request->file('file');

      if($image){
        $imageName = time(). $image->getClientOriginalName();
        $image->move('uploads/Blog',$imageName);
        $imagePath = "uploads/Blog/$imageName";
       

      DB::table('posts')->where('id',$request['id'])->update([
        'file' => $imageName,
        'post_title' => $request['post_title'], 
         'user_id' => $request['user_id'],
         'post_body' => $request['summernote'],     
         'tag' => $request['tag'],    

      ]);
    }
      
     
      return redirect('blog/manage')->with('success_message','Blog updated Successfully');

    }

}
