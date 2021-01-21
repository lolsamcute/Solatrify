

	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
														<h5 class="modal-title" id="myLargeModalLabel">Large modal</h5>
													</div>
													<div class="modal-body">
                                                    <div class="col-md-6">
                                                                <!-- Qrcode Id Field -->
                                                                <div class="form-group">
                                                                        {!! Form::label('qrcode_id', 'Product Name:') !!}
                                                                        <p><a href="/qrcodes/{!! $transaction->qrcode['id'] !!}" > <b>
                                                                            {!! $transaction->qrcode['product_name'] !!}
                                                                        </b> </a>
                                                                    </p>
                                                                    </div>
                                                            
                                                                    
                                                                <!-- Amount Field -->
                                                                <div class="form-group">
                                                                        {!! Form::label('amount', 'Amount:') !!}
                                                                        <p>${!! $transaction->amount !!}</p>
                                                                    </div>

                                                                <!-- Amount Field -->
                                                             
                                                                <div class="form-group">
                                                                        <p><a href="" 
                                                                            class="btn btn-success btn-lg"> Return to merchant site</a></p>
                                                                    </div>
                                                               


                                                            </div> 


                                                            <div class="col-md-6">

                                                            <!-- User Id Field -->
                                                            <div class="form-group">
                                                                {!! Form::label('user_id', 'Buyer Name:') !!}
                                                                <p>
                                                                    <a href="/users/{!! $transaction->user['id'] !!}">
                                                                        {!! $transaction->user['name'] !!} | {!! $transaction->user['email'] !!}
                                                                    </a>  </p>
                                                            </div>

                                                            <!-- Qrcode Owner Id Field -->
                                                            <div class="form-group">
                                                                {!! Form::label('qrcode_owner_id', 'Qrcode Owner Name:') !!}
                                                                <p><a href="/users/{!! $transaction->qrcode_owner['id'] !!}">
                                                                    {!! $transaction->qrcode_owner['name'] !!}
                                                                </a></p>
                                                            </div>


                                                            <!-- Payment Method Field -->
                                                            <div class="form-group">
                                                                {!! Form::label('payment_method', 'Payment Method:') !!}
                                                                <p>{!! $transaction->payment_method !!}</p>
                                                            </div>

                                                            <!-- Message Field -->
                                                            <div class="form-group">
                                                                {!! Form::label('message', 'Message:') !!}
                                                                <p>{!! $transaction->message !!}</p>
                                                            </div>


                                                            <!-- Status Field -->
                                                            <div class="form-group">
                                                                {!! Form::label('status', 'Status:') !!}
                                                                <p>{!! $transaction->status !!}</p>
                                                            </div>

                                                            <!-- Created At Field -->
                                                            <div class="form-group">
                                                                {!! Form::label('created_at', 'Created At:') !!}
                                                                <p>{!! $transaction->created_at->format('D d, M, Y h:i') !!}</p>
                                                            </div>

                                                            <!-- Updated At Field -->
                                                            <div class="form-group">
                                                                {!! Form::label('updated_at', 'Updated At:') !!}
                                                                <p>{!! $transaction->updated_at->format('D d, M, Y h:i')  !!}</p>
                                                            </div>

                                                            </div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-danger text-left" data-dismiss="modal">Close</button>
													</div>
												</div>
												<!-- /.modal-content -->
											</div>
											<!-- /.modal-dialog -->
										</div>