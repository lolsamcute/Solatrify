@extends('layouts.dealer')

@section('content')

  <!-- Main Content -->
  <div class="page-wrapper">
			<div class="container">
				<!-- Title -->	
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">Search Result</h5>
					</div>
					
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
                                @foreach($qrcodes as $qrcode)
									<div class="row">
										<div class="col-md-3">
											<div class="item-big">
												<!-- START carousel-->
												<div id="carousel-example-captions-1" data-ride="carousel" class="carousel slide">
													<ol class="carousel-indicators">
													   <li data-target="#carousel-example-captions-1" data-slide-to="0" class="active"></li>
													   <li data-target="#carousel-example-captions-1" data-slide-to="1"></li>
													</ol>
													<div role="listbox" class="carousel-inner">
													   <div class="item active"> <img src="../uploads/Products/{{$qrcode->image}}" alt="../uploads/Products/{{$qrcode->image}}"> </div>
													   <div class="item"> <img src="../uploads/Products/{{$qrcode->image}}" alt="Second slide image"> </div>
													</div>
												</div>
												<!-- END carousel-->
											</div>
										</div>
											
										<div class="col-md-9">
											<div class="product-detail-wrap">
												<!-- <div class="product-rating inline-block mb-10">
													<a href="javascript:void(0);" class="zmdi zmdi-star"></a><a href="javascript:void(0);" class="zmdi zmdi-star"></a><a href="javascript:void(0);" class="zmdi zmdi-star"></a><a href="javascript:void(0);" class="zmdi zmdi-star"></a><a href="javascript:void(0);" class="zmdi zmdi-star-outline"></a>
												</div> -->
												<div class="average-review inline-block mb-10">&nbsp;(<span class="review-count">5</span> customer review)</div>
												<h3 class="mb-20 weight-500">{!! $qrcode->name !!}</h3>
												<div class="product-price head-font mb-30">₦{!! $qrcode->amount !!}</div>
												<p class="mb-50"><?= substr($qrcode->p_description,0,200).'...'; ?></p>
												
												<input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-default"   data-bts-button-up-class="btn btn-default" value="1" name="vertical-spin">
												
												<div class="btn-group mr-10">
													<button class="btn btn-success btn-anim"><i class="fa fa-shopping-cart"></i><span class="btn-text">add to cart</span></button>
												</div>
												<div class="btn-group wishlist">
													<button class="btn btn-warning btn-outline btn-anim"><i class="icon-heart"></i><span class="btn-text">add to wishlist</span></button>
												</div>
											</div>
										</div>
                                    </div>
                                    <hr class="light-grey-hr mb-10"/>
                                    @endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Row -->
				
				
			</div>
			
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2018 &copy; Solatrify</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
			
        </div>
        <!-- /Main Content -->


@endsection