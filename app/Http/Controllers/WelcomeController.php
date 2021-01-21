<?php

namespace App\Http\Controllers;
use App\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Comment;
use App\Post;
use App\Categorys;
use App\Like;
use App\Dislike;
use App\FindAnInstaller;
use Illuminate\Support\Facades\Mail;
use App\Mail\FindAnInstallers;
use App\Mail\Newsletters;
use App\Mail\Contacts;
use App\Contact;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Qrcode as QrcodeModel;
use App\Categories;
use Illuminate\Support\Facades\Auth;
use App\User;

class WelcomeController extends Controller
{


  public function comingSoon()
  {
    return view('solatrify.comingSoon', [
      'pageKeywords' => 'Solatrify',
      'pageDescription' => 'Solatrify',
      'pageAuthor' => 'Solatrify',
  ]);

  }

    
    public function master()
    {
        
          $category = Categories::all();
      $qrcodes = QrcodeModel::all();
      
      
      return view('solatrify.master', [
        'pageKeywords' => 'Solatrify',
        'pageDescription' => 'Solatrify',
        'pageAuthor' => 'Solatrify',
         'qrcodes' => $qrcodes,
          'category' => $category,
    ]);
  
    }
  
  
    public function newsletter(Request $request)
    {
      $input = $request->all();
        
         $this->validate($request,[
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255 ',
        ]);
        
        Newsletter::create([
                 
                    'full_name' => $request->full_name,
                    'email' => $request->email,
                   
                ]);

    
        $full_name = $request['full_name'];
        $email = $request['email'];
         
          Mail::to($request['email'])->send(new Newsletters($full_name, $email));
      
        
        return back()->with('newsletter_message', 'Thanks for Subscribing to our Newsletter ');
    }
  
    public function about()
    {
      return view('solatrify.about', [
        'pageKeywords' => 'Solatrify',
        'pageDescription' => 'Solatrify',
        'pageAuthor' => 'Solatrify',
    ]);
  
    }
  
    public function contact()
    {
      return view('solatrify.contact', [
        'pageKeywords' => 'Solatrify',
        'pageDescription' => 'Solatrify',
        'pageAuthor' => 'Solatrify',
    ]);
  
    }
    
    
     public function unverified()
    {
        
         $users = User::all();
      return view('auth.unverified', [
        'pageKeywords' => 'Solatrify',
        'pageDescription' => 'Solatrify',
        'pageAuthor' => 'Solatrify',
         '$users' => $users,
    ]);
  
    }


    public function contactPost(Request  $request)
    {

          $request->validate([

             'name' => 'required|max:50',
            'email' => 'email|max:255|unique:contact',
             'number' => 'required',
              'subject' => 'required',
               'message' => 'required',
        ]);
        
        

              Contact::create([
                 
                    'name' => $request->name,
                    'email' => $request->email,
                    'number' => $request->number,
                    'subject' => $request->subject,
                    'message' => $request->message,
                 
                ]);
                
                  $id = $request['id'];
                 $name = $request['name'];
        $email = $request['email'];
        $subject = $request['subject'];
         $number = $request['number'];
          $message = $request['message'];
        
          Mail::to($request['email'])->send(new Contacts($id, $name, $email, $subject, $number, $message));

        return back()->with('contact_message','Contact Submited Successfully, our team will get back to you shortly');
    }



    
       public function gallery()
    {
      return view('solatrify.gallery', [
        'pageKeywords' => 'Solatrify',
        'pageDescription' => 'Solatrify',
        'pageAuthor' => 'Solatrify',
    ]);
  
    }
    
    //       public function marketIntelligence()
    // {
    //   return view('solatrify.marketIntelligence', [
    //     'pageKeywords' => 'Solatrify',
    //     'pageDescription' => 'Solatrify',
    //     'pageAuthor' => 'Solatrify',
    // ]);
  
    // }
    
    
    //           public function solarFinacing()
    // {
    //   return view('solatrify.solarFinacing', [
    //     'pageKeywords' => 'Solatrify',
    //     'pageDescription' => 'Solatrify',
    //     'pageAuthor' => 'Solatrify',
    // ]);
  
    // }


    public function event()
    {
      return view('solatrify.event', [
        'pageKeywords' => 'Solatrify',
        'pageDescription' => 'Solatrify',
        'pageAuthor' => 'Solatrify',
    ]);
  
    }
    
    
    public function service()
    {
        return view('solatrify.service', [
          'pageKeywords' => 'Solatrify',
          'pageDescription' => 'Solatrify',
          'pageAuthor' => 'Solatrify',
      ]);
    }
    
    public function products()
    {
      $qrcodes = QrcodeModel::orderBy('id','desc')->paginate(15);

      return view('solatrify.products', [
        'pageKeywords' => 'Solatrify',
        'pageDescription' => 'Solatrify',
        'pageAuthor' => 'Solatrify',
      ])->withQrcodes($qrcodes);
  
    }



      
    public function productsView($slug)
    {
      $qrcodes = QrcodeModel::where('slug', '=', $slug)->get();
        
      return view('solatrify.product_view', 
      ['qrcodes' => $qrcodes, 
      'pageKeywords' => 'Solatrify',
      'pageDescription' => 'Solatrify',
      'pageAuthor' => 'Solatrify',
       ]);
    }


    public function manufacturer()
    {
      return view('solatrify.manufacturer', [
        'pageKeywords' => 'Solatrify',
        'pageDescription' => 'Solatrify',
        'pageAuthor' => 'Solatrify',
    ]);
  
    }



    
                      public function wholesales()
    {
      return view('solatrify.wholesales', [
        'pageKeywords' => 'Solatrify',
        'pageDescription' => 'Solatrify',
        'pageAuthor' => 'Solatrify',
    ]);
  
    }
    
    
        public function designSupport()
    {
      return view('solatrify.designSupport', [
        'pageKeywords' => 'Solatrify',
        'pageDescription' => 'Solatrify',
        'pageAuthor' => 'Solatrify',
    ]);
  
    }
    
    
           public function solarFinacing()
    {
      return view('solatrify.solarFinacing', [
        'pageKeywords' => 'Solatrify',
        'pageDescription' => 'Solatrify',
        'pageAuthor' => 'Solatrify',
    ]);
  
    }
    
    
               public function marketIntelligence()
    {
      return view('solatrify.marketIntelligence', [
        'pageKeywords' => 'Solatrify',
        'pageDescription' => 'Solatrify',
        'pageAuthor' => 'Solatrify',
    ]);
  
    }



    public function find_an_installer()
    {
      return view('solatrify.find_an_installer', [
        'pageKeywords' => 'Solatrify',
        'pageDescription' => 'Solatrify',
        'pageAuthor' => 'Solatrify',
    ]);
  
    }


    public function find_an_installerPost(Request $request)
    {
      $input = $request->all();
        
         $this->validate($request,[
            'first_name' => 'required|string|max:25',
            'last_name' => 'required|string|max:25',
            'email' => 'required|string|email|max:255 ',
            'address' => 'required',
            'company' => 'required',
            'contactNumber' => 'required',
        ]);
        
         FindAnInstaller::create([
                 
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'address' => $request->address,
                    'company' => $request->company,
                    'contactNumber' => $request->contactNumber,
                    'areaInstallerNeeded' => $request->areaInstallerNeeded,
                   
                ]);



        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $email = $request['email'];
        
          Mail::to($request['email'])->send(new FindAnInstallers($first_name, $last_name, $email));
      
        return back()->with('find_an_installer_message', 'Your request is successfully registered');
    }


    
                  public function teams()
    {
      return view('solatrify.teams', [
        'pageKeywords' => 'Solatrify',
        'pageDescription' => 'Solatrify',
        'pageAuthor' => 'Solatrify',
    ]);
  
    }





    public function blog()
    {
      $posts = Post::all();
      $comments = Comment::all();
      $commentCount = $comments->count();

      $posts = Post::paginate(5);
      return view('solatrify.blog', 
      ['posts' => $posts, 
      'comments' => $comments, 
      'commentCount' => $commentCount, 
      'pageKeywords' => 'Solatrify',
      'pageDescription' => 'Solatrify',
      'pageAuthor' => 'Solatrify',
       ]);
    }
    
    
    
    public function blogSingle($post_id)
    {
      $posts = Post::where('id', '=', $post_id)->get();
      // $likePost = Post::find($post_id);
      // $likeCtr = Like::where(['post_id' => $likePost->id])->count();
      // $comments = Comment::all();
      // $commentCount = $comments->count();
        
        
      return view('solatrify.blogSingle', 
      ['posts' => $posts, 
      // 'comments' => $comments, 
      // 'likeCtr' => $likeCtr,
      // 'commentCount' => $commentCount, 
      'pageKeywords' => 'Solatrify',
      'pageDescription' => 'Solatrify',
      'pageAuthor' => 'Solatrify',
       ]);
    }





  public function category($cat_id)
  {
        $post_category = Categorys::all();
        $posts = DB::table('posts')
          ->join('post_category', 'posts.category_id', '=', 'category.id')
          ->select('posts.*', 'post_category.*')
          ->where(['category.id' => $cat_id])
          ->get();

      return view('pages.user.categoriesposts', ['post_category' => $post_category, 'posts' => $posts,]);
  }



  public function like($id)
  {
    $loggedin_user = Auth::user()->id;
    $like_user = Like::where(['user_id' => $loggedin_user, 'post_id' => $id])->first();
    if(empty($like_user->user_id)){
      $user_id = Auth::user()->id;
      $email = Auth::user()->email;
      $post_id = $id;
      $like = new Like;
      $like->user_id = $user_id;
      $like->email = $email;
      $like->post_id = $post_id;
      $like->save();
      return redirect("/blogSingle/{$id}");

    }else{
      return redirect("/blogSingle/{$id}");
    }
  }


  public function dislike($id)
  {
    $loggedin_user = Auth::user()->id;
    $like_user = Dislike::where(['user_id' => $loggedin_user, 'post_id' => $id])->first();
    if(empty($like_user->user_id)){
      $user_id = Auth::user()->id;
      $email = Auth::user()->email;
      $post_id = $id;
      $like = new Dislike;
      $like->user_id = $user_id;
      $like->email = $email;
      $like->post_id = $post_id;
      $like->save();
      return redirect("/blogSingle/{$id}");

    }else{
      return redirect("/blogSingle/{$id}");
    }
  }
      

       
    public function comment(Request $request, $post_id)
    {
          $this->validate($request,[
            'message' => 'required',
          ]);

          $comment = new Comment;
          $comment->user_id = Auth::user()->id;
          $comment->post_id = $post_id;
          $comment->message = $request->input('message');
          $comment->save();
          return redirect("/view/{$post_id}")->with('success_message1','Comment Added Successfully');
  }

   


}
