
<!DOCTYPE html>

<html lang="{{ config('app.locale') }}">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <title>@if (trim($__env->yieldContent('template_title')))@yield('template_title') | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>
        
        <meta name="keywords" content="">
  <meta name="description" content="">


  {{-- Scripts --}}
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>


        {{-- Styles --}}
        <link href="{{ url('/css/app.css') }}" rel="stylesheet">


        <style type="text/css">


            @if (Auth::User() && (Auth::User()->profile) && (Auth::User()->profile->avatar_status == 0))
                .user-avatar-nav {
                    background: url({{ Gravatar::get(Auth::user()->email) }}) 50% 50% no-repeat;
                    background-size: auto 100%;
                }
            @endif

        </style>


        {{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

  <!-- Favicon -->
  <link rel="icon" href="https://embassies.gov.il/mfa_Graphics/header/israel_logo_title.png" type="image/png">


  
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="/datatable/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="/datatable/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <link rel="stylesheet" href="/datatable/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/datatable/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="/datatable/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="/datatable/css/argon.min-v=1.1.0.css" type="text/css">
 
</head>

<body>

  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="/home">
          <img src="{{ url ('images/logo-wide.png') }}" class="navbar-brand-img" alt="{{ url ('images/logo-wide.png') }}">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
		<div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link {{ Request::is('home') ? 'active' : null }}" href="/home">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>

           
            <li class="nav-item">
              <a class="nav-link " href="/user/categories">
                <i class="ni ni-ungroup text-orange"></i>
                <span class="nav-link-text">Products</span>
              </a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="/profile/{{ Auth::user()->id }}">
                <i class="ni ni-single-copy-04 text-pink"></i>
                <span class="nav-link-text">{!! trans('Profile') !!}</span>
              </a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="/faq">
                <i class="ni ni-align-left-2 text-default"></i>
                <span class="nav-link-text">FAQ</span>
              </a>
            </li>


                <li class="nav-item">
                  <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" class="nav-link ">
                            <i class="ni ni-user-run text-red"></i>
                            <span class="nav-link-text">{{ __('Logout') }}</span>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </li>


           
          </ul>
        </div>
      </div>
    </div>
  </nav>



  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              
           </ul>
		   <ul class="navbar-nav align-items-center ml-auto ml-md-0">
            <li class="nav-item dropdown">


              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">


               
              <span class="avatar avatar-sm rounded-circle">
              <img class="user-auth-img img-circle" src="/profilePicture/upload/{{ Auth::user()->avatar }}" alt="/profilePicture/upload/{{ Auth::user()->avatar }}" />
              </span>

    
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->full_name }}</span>
                  </div>
                </div>
              </a>




              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Member since {!! Auth::user()->created_at->format('M. Y') !!}</h6>
                </div>
                <a href="/profile/{{ Auth::user()->id }}" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span> {!! trans('Profile') !!}</span>
                </a>

                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                 <button class="btn btn-success btn-sm">{{Auth::user()->referenceId }}</button>
                </a>
           
               
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();" class="dropdown-item ">
                  <i class="ni ni-user-run"></i>
                  <span> {{ __('Logout') }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    


          <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url('/profilePicture/upload/{{ Auth::user()->avatar }}'); background-size: cover; background-position: center top;">

		  

      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello {{ Auth::user()->full_name }}</h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
      
          </div>
        </div>
      </div>
    </div>

    

    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
          
          


		
             
			<div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
			<div class="alert alert-default" role="alert">
				<strong>{{ trans('Change Password') }}</strong>
			</div>
            </div>
			
			<div class="card-body pt-0 pt-md-12">
            
			<form action="/changePassword" method="Post" >
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">						
		        	<div class="col-lg-12">
						<div class="form-group {{ $errors->has('password') ? ' has-error ' : '' }}">
						
							<label class="form-control-label" for="input-password">{{trans('Password')}}</label>
							<input type="password" id="input-password" name="password" class="form-control form-control-alternative" placeholder="{{trans('Password')}}" autocomplete="new-password">
							@if ($errors->has('password'))
										<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
							@endif
						</div>
					</div>
					

					<div class="col-lg-12">
						<div class="form-group {{ $errors->has('password') ? ' has-error ' : '' }}">
						
							<label class="form-control-label" for="input-password">{{trans('Confirm Password')}}</label>
							<input type="password" id="input-password" name="password_confirmation" class="form-control form-control-alternative" placeholder="{{trans('Confirm Password')}}">
							<span id="pw_status"></span>
								@if ($errors->has('password_confirmation'))
									<span class="help-block">
										<strong>{{ $errors->first('password_confirmation') }}</strong>
									</span>
								@endif
						</div>
                    </div>


					
					<div class="form-actions mt-10">			
						<button type="submit" class="btn btn-success mr-10 mb-30">Update Password</button>
					</div>				
					{!! Form::close() !!}

			  
			
            </div>
		  </div>
		  </div>
		

        
          





		
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My Account</h3>
                </div>
                <div class="col-4 text-right">
                  <a data-toggle="pill" href="#deleteAccount" class="btn btn-sm btn-primary">Settings</a>
                </div>
              </div>
			</div>
            
			@if (\Session::has('success_message'))
                                                    <div class="alert alert-success">
                                                        <div class="alert-heading large_text"></div>
                                                        <div>
                                                            {{ \Session::get('success_message') }}
                                                        </div>
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
                  


            <div class="card-body">
           

                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">

				<form action="/accountSettings" method="Post" >
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="row">
			 
                    <div class="col-lg-6">
                      <div class="form-group{{ $errors->has('full_name') ? ' has-error ' : '' }}">
                        <label class="form-control-label" for="input-username">Full Name</label>
						<input type="text" id="input-username" class="form-control form-control-alternative" name="full_name" placeholder="{{ trans('Full Name') }}" value="{{$user->full_name}}">
						@if($errors->has('full_name'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('full_name') }}</strong>
                                                                </span>
                                                            @endif
                      </div>
					</div>
					

                    <div class="col-lg-6">
                      <div class="form-group{{ $errors->has('email') ? ' has-error ' : '' }}">
                        <label class="form-control-label" for="input-email">{{ trans('Email') }}</label>
                          <input type="email" id="input-email" class="form-control form-control-alternative" name="email" value="{{$user->email}}" readonly >
                          @if ($errors->has('email'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                </span>
                                                            @endif
                      </div>
                    </div>
                  </div>



                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group {{ $errors->has('number') ? ' has-error ' : '' }}">
                        <label class="form-control-label" for="input-first-name">Phone number</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" name="number" value="{{Auth::user()->number}}">
                        @if($errors->has('number'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('number') }}</strong>
                                                                </span>
                                                            @endif
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group {{ $errors->has('business_name') ? ' has-error ' : '' }}">
                        <label class="form-control-label" for="input-last-name">Business Name</label>
                        <input type="text" id="input-last-name" name="business_name" class="form-control form-control-alternative" value="{{Auth::user()->business_name}}">
                        @if($errors->has('business_name'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('business_name') }}</strong>
                                                                </span>
                                                            @endif
                      </div>
                    </div>
                  </div>
              


				<div class="row">
                    <div class="col-lg-6">
                    
                        <label class="form-control-label" for="input-first-name">Gender</label>
                        <select type="text" id="input-first-name" class="form-control form-control-alternative" name="gender">
						<option selected>Select Gender</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
                       
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group {{ $errors->has('business_name') ? ' has-error ' : '' }}">
                        <label class="form-control-label" for="input-last-name">Business Type</label>
							<select class="form-control" name="business_type" data-placeholder="Choose a Business Type" tabindex="1">
                                  <option value="Resellers">Resellers</option>
                                    <option value="Installers">Installers</option>
                                     <option value="Project Contractors">Project Contractors</option>
                                      <option value="Co-operatives">Co-operatives</option>
							</select>
                      </div>
                    </div>
                  </div>

				  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group {{ $errors->has('address') ? ' has-error ' : '' }}">
                        <label class="form-control-label" for="input-first-name">Address</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" name="address" value="{{Auth::user()->address}}">
                        @if($errors->has('address'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('address') }}</strong>
                                                                </span>
                                                            @endif
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group {{ $errors->has('state') ? ' has-error ' : '' }}">
                        <label class="form-control-label" for="input-last-name">State</label>
                        <input type="text" id="input-last-name" name="state" class="form-control form-control-alternative" value="{{Auth::user()->state}}">
                        @if($errors->has('state'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('state') }}</strong>
                                                                </span>
                                                            @endif
                      </div>
                    </div>
                  </div>
                </div>






										<div class="form-actions mt-10">			
												<button type="submit" class="btn btn-success mr-10 mb-30">Update profile</button>
										</div>				
                                                {!! Form::close() !!}



                                                
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">

				<form action="/uploadImage" method="Post"  enctype="multipart/form-data">
                                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
												
												      <div class=" btn btn-info">
													
                                                    <input class="upload" name="avatar" id="avatar" type="file">
                                                    </div> 
                                               
                                                 <button class="btn btn-success" type="submit"><i class="fa fa-pencil"></i><span class="btn-text">Upload</span></button>
                                                
                                            </form>


	  

      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; {{date('Y')}} {{ config('app.name', Lang::get('titles.app')) }}
            </div>
          </div>
          
        </div>
      </footer>
    </div>




  </div>
  </div>


  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="/datatable/vendor/jquery/dist/jquery.min.js"></script>
  <script src="/datatable/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/datatable/vendor/js-cookie/js.cookie.js"></script>
  <script src="/datatable/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="/datatable/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>

  <script src="/datatable/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="/datatable/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Optional JS -->
  <script src="/datatable/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="/datatable/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="/datatable/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="/datatable/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="/datatable/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="/datatable/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="/datatable/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="/datatable/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
  <!-- Argon JS -->
  <script src="/datatable/js/argon.min-v=1.1.0.js"></script>



</body>

</html>

