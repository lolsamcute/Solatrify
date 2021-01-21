@extends('layouts.dealer')

@section('content')
 
  <!-- Main Content -->
  <div class="page-wrapper">
			<div class="container">
				<!-- Title -->	
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">product detail</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="/">Dashboard</a></li>
						<li class="active"><span>product detail</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
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
													   <div class="item active"> <img src="../uploads/Products/{{$qrcodes->image}}" alt="../uploads/Products/{{$qrcodes->image}}"> </div>
													   <div class="item"> <img src="../uploads/Products/{{$qrcodes->image}}" alt="Second slide image"> </div>
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
												<h3 class="mb-20 weight-500">{!! $qrcodes->name !!}</h3>
												<div class="product-price head-font mb-30">₦{!! $qrcodes->amount !!}</div>
												<p class="mb-50">{!! substr($qrcodes->p_description,200); !!}</p>
												
												<!-- <input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-default"   data-bts-button-up-class="btn btn-default" value="1" name="vertical-spin">
												 -->
												<div class="btn-group mr-10">
												<form method="post" role="form" class="col-md-6" action="{{ route('qrcodes.show_payment_page') }}">
                      <div class="form-group">
                @if(Auth::guest())
                {{-- Only logged out users get to see an email field --}}
                    <label for="email"> Enter your email </label>
                        <input type="email" name="email" required id="email" class="form-control"  placeholder="johndoe@gmail.com" >
                    </div>

                    @else 
                    <input type="hidden" name="email"   value="{{ Auth::user()->email }}" >
                    @endif
                    {{ csrf_field() }}

                <input type="hidden" name="qrcode_id"  value="{{ $qrcodes->id }}" >
                        <p>
                    <button class="btn btn-success btn-anim" type="submit"><span class="fa fa-plus-circle fa-lg"> Pay Now!</span></button>
                  
                        </p>
                </form>
												
												
											
												
												</div>

												
												<!-- <div class="btn-group wishlist">
												<form action="{{ url('switchToWishlist', [$qrcodes->rowId]) }}" method="POST" class="side-by-side">
													{!! csrf_field() !!}
													<button class="btn btn-warning btn-outline btn-anim"><i class="icon-heart"></i><span class="btn-text">add to wishlist</span></button>
												</form>
													
												</div> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Row -->
				
				<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div  class="tab-struct custom-tab-1 product-desc-tab">
											<ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_7">
												<li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="descri_tab" href="#descri_tab_detail"><span>Description</span></a></li>
												<li role="presentation" class="next"><a  data-toggle="tab" id="adi_info_tab" role="tab" href="#adi_info_tab_detail" aria-expanded="false"><span>Aditional information</span></a></li>
												<li role="presentation" class=""><a  data-toggle="tab" id="review_tab" role="tab" href="#review_tab_detail" aria-expanded="false"><span>Review<span class="inline-block">(<span class="review-count">0</span>)</span></span></a></li>
											</ul>
											<div class="tab-content" id="myTabContent_7">
												<div  id="descri_tab_detail" class="tab-pane fade active in pt-0" role="tabpanel">
													<p class="pt-15">{!! $qrcodes->p_description !!}</p>
												</div>
												<div  id="adi_info_tab_detail" class="tab-pane pt-0 fade" role="tabpanel">
													<div class="table-wrap">
														<div class="table-responsive">
														  <table class="table  mb-0">
															<tbody>
																<tr>
																	<td class="border-none">SKU</td>
																	<td class="border-none">{!! $qrcodes->sku !!}</td>
																</tr>
																<tr>
																	<td>Product Manual</td>
																	<td><a href="javascript:void">{!! $qrcodes->pdf !!}</a></td>
																</tr>
																<tr>
																	<td>YouTube</td>
                                                                    <td> <iframe width="900" height="500" src="{!! $qrcodes->youtube_url !!}
                                                                    " frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></td>
																</tr>
															</tbody>
														  </table>
														</div>
													</div>
												</div>
												<div  id="review_tab_detail" class="tab-pane pt-0 fade" role="tabpanel">
													<p class="muted review-tag pt-15">No reviews yet.</p>
													<div class="row mt-40">
														<div class="col-sm-6">
															<div class="form-wrap">
																<form>
																	<div class="form-group">
																		<label class="control-label mb-10" for="review">Your rating</label>
																		<div class='product-rating starrr' id='star1'></div>
																	</div>
																	<div class="form-group">
																		<label class="control-label mb-10" for="review">Your review</label>
																		<textarea class="form-control" id="review" placeholder="add review"></textarea>
																	</div>
																	<div class="row">
																		<div class="col-sm-6">
																			<div class="form-group">
																				<label class="control-label mb-10" for="exampleInputuname_2">User Name</label>
																				<input type="text" class="form-control" id="exampleInputuname_2" placeholder="Username"/>
																			</div>
																		</div>
																		<div class="col-sm-6">
																			<div class="form-group">
																				<label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
																				<input type="email" class="form-control" id="exampleInputEmail_2" placeholder="Enter email">
																			</div>
																		</div>
																	</div>
																		
																	<div class="form-group mb-0">
																		<button type="submit" class="btn btn-success  mr-10">Submit</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
													</div>
											</div>
										</div>
									
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
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