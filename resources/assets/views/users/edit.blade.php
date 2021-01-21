


@extends('layouts.dealer')

@section('content')

<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Edit User</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">User</li>
                </ol>
              </nav>
            </div>
           
          </div>
        </div>
      </div>
    </div>
    <br>


	<!-- Main Content -->
	<div class="page-wrapper">
			
					
					<!-- Row -->
					<div class="row">
					<div class="col-md-6">
							
								
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">

    <div  class="panel-wrapper collapse in">
									<div  class="panel-body">


        </div></div>

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
								


                   {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}

                                                                    
													
														<div class="form-group">
															<label class="control-label mb-10" for="name">Full Name</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full Name" value="{!! $user->full_name !!}">
															</div>
                                                        </div>
                                                        
                                                        
                                                        
                                                                                                    
														<div class="form-group">
															<label class="control-label mb-10" for="email">Email address</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-envelope-open"></i></div>
																<input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{!! $user->email !!}">
															</div>
                                                        </div>
                                                        

                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="role"><i class="fa fa-fw {{ trans('forms.create_user_icon_role') }}" aria-hidden="true"></i>Role</label>
                                                        <div class="input-group">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
                                                        <select class="form-control" name="role" id="role" >
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
                                                                <input type="password" class="form-control" id="password" placeholder="Password">
                                                                
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
                                                                <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm Password">
                                                                
                                                                @if ($errors->has('password_confirmation'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                    </span>
                                                @endif
															</div>
                                                        </div>
                                                        
  	
														<button type="submit" class="btn btn-success mr-10">Publish</button>
														
													

                   {!! Form::close() !!}
               	</div>
											</div>
										</div>
					</div>
				
      
@endsection

