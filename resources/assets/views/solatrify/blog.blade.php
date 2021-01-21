
@extends('layouts.master')

@section('content')

 
  <div class="main-content">

    <br>
  
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Blog</h2>
              
            </div>
          </div>
        </div>
      </div>
    </section>



  <section id="blog">
    <div class="container pb-70">
      
      <div class="section-content">
        <div class="row">

        @if(count($posts) > 0)
          @foreach($posts as $key => $item)


          <div class="col-xs-12 col-sm-4 col-md-4">
            <article class="post clearfix maxwidth600 mb-30">
              <div class="entry-header-new">
                <div class="post-thumb thumb"> <img src="../uploads/Blog/{{$item->file}}" alt="" class="img-responsive img-fullwidth"> </div>
                <!-- <div class="blog-author"><img src="{{$item->post_image}}" alt=""></div> -->
                <div class="entry-meta meta-absolute text-center p-10">
                  <div class="display-table">
                    <div class="display-table-cell">
                      <ul>
                        <li><a href="javascript:void()">{{$item->created_at->diffForHumans()}}</a></li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3 class="entry-title mt-0 pt-0"><a href='{{url ("/blogSingle/{$item->id}") }}'>{{$item->post_title}}</a></h3>
                <!-- <ul class="list-inline entry-date font-12 mt-5">
                  <li><i class="fa fa-clock-o mr-5"></i> 3pm - 6pm </li>
                  <li><i class="fa fa-map-marker mr-5"></i>  121 King Street, Melbourne </li>
                </ul> -->
               <p class="mb-20 mt-15 font-13">{!! str_limit($item->post_body,200)!!}</p>
                  <a class="btn btn-simple hvr-bounce-to-top" href="/blogSingle/{{$item->id}}">Read more <i class="fa fa-angle-double-right"></i></a>
              </div>
            </article>
          </div>


          @endforeach

@else
  <p> No Post Available</p>
@endif

<p>{{$posts->links()}}</p>

      
        </div>
      </div>
    </div>
  </section>




    </div>





@endsection