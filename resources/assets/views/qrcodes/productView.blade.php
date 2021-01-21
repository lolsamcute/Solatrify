
@extends('layouts.dealer')


    
<!-- Main Style CSS -->
<link rel="stylesheet" href="{{url ('datatable/assets/css/style.css') }}">

@section('content')
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Product detail</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item active" aria-current="page">Product Review</li>
            </ol>
          </nav>
        </div>
       
      </div>
    </div>
  </div>
</div>

<div class="product_page_bg">
    <div class="container">
        <div class="product_details_wrapper mb-55">
            <!--product details start-->
            <div class="product_details">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="product-details-tab">
                            <div id="img-1" class="zoomWrapper single-zoom">
                                <a href="#">
                                    <img id="zoom1" src="../uploads/Products/{{$qrcodes->image}}" data-zoom-image="../uploads/Products/{{$qrcodes->image}}" alt="big-1">
                                </a>
                            </div>
                    
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="product_d_right">
                         

                                <h3><a href="#">{!! $qrcodes->name !!}</a></h3>
                               
                               
                                <div class="price_box">
                                    <span class="old_price">₦{!! $qrcodes->oldAmount !!}</span>
                                    <span class="current_price">₦{!! $qrcodes->amount !!}</span>
                                </div>
                                <div class="product_desc">
                                    <p>SKU: {!! $qrcodes->sku !!}</p>
                                </div>

                                <div class="product_desc">
                                    <p>QUANTITY: {!! $qrcodes->quantity !!}</p>
                                </div>
                                
                               
                                <form method="post" role="form" class="col-md-6" action="{{ route('qrcodes.show_payment_page') }}">
                                    @if(Auth::guest())
                                {{-- Only logged out users get to see an email field --}}
                                    <label for="email"> Enter your email </label>
                                        <input type="email" name="email" required id="email" class="form-control"  placeholder="johndoe@gmail.com" >
                                    </div>

                                    @else 
                                    <input type="hidden" name="email"   value="{{ Auth::user()->email }}" >
                                    @endif
                                    <input type="hidden" name="qrcode_id"  value="{{ $qrcodes->id }}" >
                                    {{ csrf_field() }}

                                    <form action="{{ url('/cart') }}" method="POST" class="side-by-side">
                   
	
                                    
                                    <button class="btn btn-success btn-lg" type="submit" value="Pay Now!">
                                        Pay Now!
                                    </button>
                                        
                                </form>
                               
                              

                        </div>
                    </div>
                </div>   
            </div>
            <!--product details end-->
            <br>
            <!--product info start-->
            <div class="product_d_info"> 
                <div class="row">
                        <div class="col-12">
                            <div class="product_d_inner">   
                                <div class="product_info_button">    
                                    <ul class="nav" role="tablist">
                                        <li >
                                            <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Description</a>
                                        </li>
                               
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="info" role="tabpanel" >
                                        <div class="product_info_content">
                                            <p>{!! $qrcodes->p_description !!}</p>
                                        </div>    
                                    </div>
                                    
                                        
                                    </div>

                                   
                                </div>
                            </div>     
                        </div>
                    </div>   
            </div>  
            <!--product info end-->
        </div>


 
    </div>
</div>



        @endsection

<!-- Plugins JS -->
<script src="{{url ('datatable/assets/js/plugins.js') }}"></script>

<!-- Main JS -->
<script src="{{url ('datatable/assets/js/main.js') }}"></script>