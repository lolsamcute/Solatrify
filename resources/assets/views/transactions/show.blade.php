@extends('layouts.dealer')

@section('content')


											<div class="modal-dialog modal-lg">

                                            
                                             
                                                      
												<div class="modal-content">
                                              
													<div class="modal-header">
												
														<h5 class="modal-title">  Transaction</h5>
													</div>
													<div class="modal-body">
                                                    <div class="col-md-6">
                                                                <!-- Qrcode Id Field -->
                                                                <div class="form-group">
                                                                        {!! Form::label('qrcode_id', 'Product Name:') !!}
                                                                        <p> <b>
                                                                        {!! $transaction->qrcode['name'] !!}
                                                                        </b> 
                                                                    </p>
                                                                    </div>
                                                            
                                                                    
                                                                <!-- Amount Field -->
                                                                <div class="form-group">
                                                                        {!! Form::label('amount', 'Amount:') !!}
                                                                        <p>₦{!! $transaction->amount !!}</p>
                                                                    </div>


                                                            </div> 

                                                         


                                                            <div class="col-md-6">

                                                            <!-- User Id Field -->
                                                            <div class="form-group">
                                                                {!! Form::label('user_id', 'Buyer Name:') !!}
                                                                <p>
                                                                 
                                                        {!! $transaction->user['full_name'] !!} | {!! $transaction->user['email'] !!}
                                                                 </p>
                                                            </div>

                                                          


                                                            <!-- Payment Method Field -->
                                                            <div class="form-group">
                                                                {!! Form::label('payment_method', 'Payment Method:') !!}
                                                                <p>{!! $transaction->payment_method !!}</p>
                                                            </div>

                                                           
                         
                                                            <!-- Status Field -->
                                                            <div class="form-group">
                                                                {!! Form::label('status', 'Status:') !!}
                                                                @if($transaction->status == 'initiated')
                                                                <span class="badge badge-dot mr-4">
                                                                    <i class="bg-info"></i>
                                                                    <span class="status">{{$transaction->status}}</span>
                                                                    </span>
                                                                    @else($transaction->status == 'Completed')
                                                                    <span class="badge badge-dot mr-4">
                                                                    <i class="bg-success"></i>
                                                                    <span class="status">{{$transaction->status}}</span>
                                                                </span>
                                                                @endif
                                                            </div>

                                                            <!-- Created At Field -->
                                                            <div class="form-group">
                                                                {!! Form::label('created_at', 'Created:') !!}
                                                                <p>{!! $transaction->created_at->format('D d, M, Y h:i') !!}</p>
                                                            </div>
                                                            <div class="form-group">
                                                            <p><a href="/home" class="btn btn-success btn-lg"> Return to merchant site</a></p>

                                                            </div></div>
													</div>
													
												</div>
												<!-- /.modal-content -->
											</div>
											<!-- /.modal-dialog -->
										
									
                                            @endsection

					