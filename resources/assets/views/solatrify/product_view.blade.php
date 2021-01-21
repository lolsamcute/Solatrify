@extends('layouts.master')

@section('content')


  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{url ('/images/bg/bg6.jpg') }}">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Product Details </h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="/">Home</a></li>
                <li><a href="/dailydeals">Dailydeals</a></li>
                <li class="active text-theme-colored">Products Details</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">


          @foreach($qrcodes as $qrcode)
            <div class="product">
              <div class="col-md-5">
                <div class="product-image">
                  <ul class="owl-carousel-1col" data-nav="true">
                  <li data-thumb="../uploads/Products/{{$qrcode->image}}"><a href="../uploads/Products/{{$qrcode->image}}" data-lightbox="single-product"><img src="../uploads/Products/{{$qrcode->image}}" alt=""></a></li>
                </ul>
               
                <div class="cart-form-wrapper mt-30">
                    <input class="btn btn-warning btn-lg btn-block" type="button" value="Place Order" onclick="window.location.href='{{route('login')}}'" />
                 
                   
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="product-summary">
                  <h2 class="active text-theme-colored">{!! $qrcode->name !!}</h2>
                  <div class="tags"><strong>SKU:</strong>  {!! $qrcode->sku !!}</div>
                  
                  <!-- <div class="price"> <del><span class="amount">$40.00</span></del> <ins><span class="amount">$30.00</span></ins> </div> -->
                  <div class="short-description">
                    <p>{!! $qrcode->p_description !!}</p>
                  </div>
                  
        
                  
                  
                </div>
              </div>
             
            </div>
            @endforeach


          </div>
        </div>
      </div>
    </section>


@endsection