
								<div class="table-wrap">
										<div class="table-responsive">
											<table id="example" class="table table-hover mb-0" >
												
												<thead>
													<tr>
													<th>Product</th>
													<th>Buyer</th>
													<th>Method</th>
													<th>Amount</th>
													<th>Status</th>
                                                    <th>Action</th>
													</tr>
												</thead>
												@foreach($transactions as $transaction)
												<tbody>
													<tr>
														<td><span class="txt-dark weight-500">
																<a href="{!! route('transactions.show', [$transaction->id]) !!}">
																	{!! $transaction->qrcode['name'] !!}<small>|  {{ $transaction->created_at->format('D d, M, Y h:i')}} </small>
																</a> </span></td>

														<td>{!! $transaction->user['full_name'] !!}</td>
														<td><span class="label label-primary"><span>{!! $transaction->payment_method !!}</span></span></td>
														<td>
															<span class="txt-dark weight-500">₦{!! $transaction->amount !!}</span>
														</td>
														<td>
															<span class="txt-success">{!! $transaction->status !!}</span>
														</td>
														<!-- Button trigger modal -->
														<td>
														<button type="button" class="btn btn-primary "><a href="{!! route('transactions.show', [$transaction->id]) !!}">Show</a></button>
														</td>
													</tr>

													
												
												</tbody>
												@endforeach
											</table>
										</div>
									</div>	
								</div>	
							</div>
						