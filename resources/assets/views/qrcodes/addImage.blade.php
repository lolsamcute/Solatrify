@extends('layouts.dealer')

@section('content')


            	<!-- Main Content -->
    <div class="page-wrapper">
			<div class="container">
					<!-- Row -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Update Image</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
												@if(Session::has('message'))
                    <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="zmdi zmdi-check pr-15 pull-left"></i><p class="pull-left">{{ Session::get('message') }}</p>
                    <div class="clearfix"></div>
                    </div>
                            @endif
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
							</div></div>

        									{!! Form::open(['class'=>'form-horizontal', 'url' => '/qrcodes/addImage', 'method' => 'post', 'files' => true]) !!}
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
												
													
										
                                                <div class="panel-wrapper collapse in">
													<div class="panel-body">
															<div class="mt-40">
															<input type="file" name="image" id="image" class="dropify" />
														</div>	
													</div>
                                                </div>
                                                
                                                <button type="submit" class="btn btn-success mr-10">Publish</button>

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
					
      
@endsection


