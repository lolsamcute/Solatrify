
@extends('layouts.master')

@section('content')


  <!-- Start main-content -->
  <div class="main-content">
  
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{ url ('images/bg/bg6.jpg')}}"">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Blog Details</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="/">Home</a></li>
                <li><a href="/blogs">Blog</a></li>
                <li class="active text-theme-colored">Blog details</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->
    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
              
                @foreach($posts as $key => $item)
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="../uploads/Blog/{{$item->file}}" alt="" class="img-responsive img-fullwidth"> </div>
                </div>
                <div class="entry-content">
                  <div class="entry-meta media no-bg no-border mt-15 pb-20">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600">{{$item->created_at->diffForHumans()}}</li>
                        <!--<li class="font-12 text-white text-uppercase">Feb</li>-->
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h3 class="entry-title text-white text-uppercase pt-0 mt-0"><a href="javascript:void()">{{$item->post_title}}</a></h3>
                       
                      </div>
                    </div>
                  </div>
                  <p class="mb-15">{!!$item->post_body!!}</p>
                
                 
                 
                </div>
              </article>
              <div class="tagline p-0 pt-20 mt-5">
                <div class="row">
                  <div class="col-md-8">
                    <div class="tags">
                      <p class="mb-0"><i class="fa fa-tags text-theme-colored"></i> <span>Tags:</span>{{$item->tag}}</p>
                    </div>
                  </div>
                  
                </div>
              </div>
              
              
              @endforeach
              
            
            </div>
          </div>
        </div>
      </div>
    </section> 
  </div>  
  <!-- end main-content -->

@endsection