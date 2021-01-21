														<!-- User Id Field -->

														{!! Form::hidden('user_id', Auth::user()->id, ['class' => 'form-control']) !!}




												
												{!! Form::open(['class'=>'form-horizontal', 'route' => 'qrcodes.store', 'method' => 'post', 'files' => true]) !!}
													<input type="hidden" name="_token" value="{{ csrf_token() }}">
													<!-- {!! Form::hidden('user_id', Auth::user()->id, ['class' => 'form-control']) !!} -->




		

														<div class="form-group">
															<label class="control-label mb-10" for="Product Name">Product Name</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
                                                                <input type="text" id="name" name="name" class="form-control" placeholder="{{ trans('Product Name') }}">
                                                               
															</div>
                                                        </div>



														<div class="form-group">
															<label class="control-label mb-10" for="Slug">Slug</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" id="slug" name="slug" class="form-control" placeholder="Slug">
                                                               
															</div>
                                                        </div>

														
														<div class="form-group">
														<label class="control-label mb-10" for="category_id"><i class="fa fa-fw {{ trans('Product Category') }}" aria-hidden="true"></i>Category</label>
                                                        <div class="input-group">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
                                                        <select class="form-control" name="category_id" id="category_id">
                                                        <option value="***">Select your Category</option>

                                                        @if ($category->count())
                                                            @foreach($category as $categorys)
                                                            <option value="{{ $categorys->id }}">{{ $categorys->name }}</option>
                                                            @endforeach
                                                        @endif
                     
														</select>
													</div>
													

													
														<div class="form-group">
														<label class="control-label mb-10" for="manufacture_id"><i class="fa fa-fw {{ trans('Manufacture') }}" aria-hidden="true"></i>Manufacture</label>
                                                        <div class="input-group">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
                                                        <select class="form-control" name="manufacture_id" id="manufacture_id">
                                                        <option value="***">Select your Manufacture</option>

                                                        @if ($manufacture->count())
                                                            @foreach($manufacture as $manufactures)
                                                            <option value="{{ $manufactures->id }}">{{ $manufactures->name }}</option>
                                                            @endforeach
                                                        @endif
                     
														</select>
														</div>
														</div>

														
														<div class="form-group">
														<label class="control-label mb-10">Quantity</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-money"></i></div>
																<input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity">
															</div>
														</div>

														<div class="form-group">
														<label class="control-label mb-10">Price</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-money"></i></div>
																<input type="text" class="form-control" id="amount" name="amount" placeholder="1200">
															</div>
														</div>
													
													

														<div class="form-group">
                                                        <label class="control-label mb-10">Product Description</label>
                                                            <div class="card-body">
                                                             
                                                                <textarea id="froala-editor" row="3" name="p_description"></textarea>
                                                                </div>
                                                            
                                                            </div>
                                                            </div>


                                                            <script>
                                                            new FroalaEditor('textarea#froala-editor')
                                                            </script>
                                                        <script>
                                                            // Replace the <textarea id="body"> with a Froala
                                                            // instance, using default configuration.
                                                            $('#p_description, #excerpt').froalaEditor({
                                                            toolbarButtons: ['undo', 'redo', 'html', '-', 'fontSize', 'paragraphFormat', 'align', 'quote', '|', 'formatOL', 'formatUL', '|', 'bold', 'italic', 'underline', '|', 'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable'],
                                                            heightMin: 300,
                                                            imageMove: true,
                                                            imageUploadParam: 'file',
                                                            imageUploadMethod: 'post',
                                                            // Set the image upload URL.
                                                            imageUploadURL: '/uploads/Products',
                                                            imageUploadParams: {
                                                                froala: 'true', // This allows us to distinguish between Froala or a regular file upload.
                                                                _token: "{{ csrf_token() }}" // This passes the laravel token with the ajax request.
                                                            }
                                                            });
                                                        </script>

												

												
														<div class="form-group">
														<label class="control-label mb-10">SKU</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-cut"></i></div>
																<input type="text" class="form-control" id="sku" name="sku" placeholder="SKU">
															</div>
													   </div>



                                                       <div class="panel-wrapper collapse in">
													<div class="panel-body">
															<div class="mt-40">
															<input type="file" name="image" id="image" class="dropify" />
														</div>	
													</div>
                                                </div>
												




<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', false) !!}
        {!! Form::checkbox('status', '1', '1') !!} Active
    </label>
</div>


                                                       
														
													




                                                        <button type="submit" class="btn btn-success mr-10">Publish</button>
                                                        <input type="button" name="clear" id="clear" class="btn btn-danger" value="Cancel">
														
													
                    

					
					
				



                                        {!! Form::close() !!}


