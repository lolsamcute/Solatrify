

@extends('layouts.master')

@section('content')

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Products</h2>
             
            </div>
          </div>
        </div>
      </div>
    </section>

<section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="products">
                <div class="row multi-row-clearfix">
                @foreach($qrcodes->chunk(15) as $qrcode)
				@foreach($qrcode as $qrcodes)
        

                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                     
                      <div class="product-thumb"> <img alt="../uploads/Products/{{$qrcodes->image}}" src="../uploads/Products/{{$qrcodes->image}}" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                      </div>
                      <div class="product-details text-center">
                        <a href="{{ url('/product_view', [$qrcodes->slug]) }}"><h5 class="product-title">{!! $qrcodes->name !!}</h5></a>
                       
                        
                          <a class="btn btn-default btn-xs btn-add-to-cart" href="{{ url('/product_view', [$qrcodes->slug]) }}">View detail</a>
                       
                      </div>
                    </div>
                  </div>

                  @endforeach
					@endforeach
           
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    @endsection