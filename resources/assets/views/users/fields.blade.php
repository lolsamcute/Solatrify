                                              
															
														<div class="form-group">
															<label class="control-label mb-10" for="name">Reference ID			<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" class="form-control" name="referenceId" id="referenceId" placeholder="Reference ID" >
															</div>
                                                        </div>
                                                        
                                                        
                                                        
														<div class="form-group">
															<label class="control-label mb-10" for="name">Full Name</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full Name" >
															</div>
                                                        </div>
                                                        
                                                        
                                                        
                                                                                                    
														<div class="form-group">
															<label class="control-label mb-10" for="email">Email address</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-envelope-open"></i></div>
																<input type="email" class="form-control" name="email" id="email" placeholder="Enter email" >
															</div>
                                                        </div>
                                                        

                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="role"><i class="fa fa-fw {{ trans('forms.create_user_icon_role') }}" aria-hidden="true"></i>Role</label>
                                                        <div class="input-group">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
                                                        <select class="form-control" name="role" id="role"  required>
                                                        <option value="***">Select your Role</option>

                                                        @if ($roles->count())
                                                            @foreach($roles as $role)
                                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                            @endforeach
                                                        @endif
                     
														</select>
                                                                       
                                                        </div></div>




														<div class="form-group {{ $errors->has('password') ? ' has-error ' : '' }}">
															<label class="control-label mb-10" for="password">Password</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
                                                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                                                
                                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
															</div>
                                                        </div>


                                                        <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error ' : '' }}">
															<label class="control-label mb-10" for="password_confirmation">Confirm Password</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
                                                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                                                                
                                                                @if ($errors->has('password_confirmation'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                    </span>
                                                @endif
															</div>
                                                        </div>
                                                        
  	
														<button type="submit" class="btn btn-success mr-10">Publish</button>
														
													
                    

					
					
				

