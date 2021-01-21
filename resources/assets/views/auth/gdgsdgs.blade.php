<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ config('app.name', 'Solatrify') }} | Account</title>
  
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" sizes="57x57" href="/Fulllogo.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/Fulllogo.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/Fulllogo.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/Fulllogo.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/Fulllogo.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/Fulllogo.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/Fulllogo.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/Fulllogo.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/Fulllogo.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/Fulllogo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/Fulllogo.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/Fulllogo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/Fulllogo.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/Fulllogo.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title"
          content="The Solar Distribution Company">

  
   
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/Fulllogo.png">


  <!-- plugins:css -->
  <link rel="stylesheet" href="/authLogin/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="/authLogin/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="/authLogin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="/authLogin/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/auth/css/style.css">
  <!-- endinject -->

</head>

<body>


 <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100 mx-auto">
          <div class="col-lg-6 mx-auto">
            <div class="auto-form-wrapper">
                
                <a href="/"><img src="{{ url ('/images/Fulllogo.png') }}" alt="logo" width="300" height="100" class="logo-img mb-4"></a>
                
                
                
<p>Sign up to become an authorized Solatrify dealer to get access to high-quality solar equipment at wholesale price, best business support and value-added service in the Solar Industry</p> 
<p>It's FREE and takes just 5 minutes!</p>


 @if(Session::has('message'))
                                <div class="alert alert-danger">
                                    <p>{{ Session::get('message') }}</p>
                                </div>
                            @endif

            <form method="POST" action="{{ route('register') }}">
                     {{ csrf_field() }}
                     <input type="hidden" name="referenceId" id="referenceId" value="{{str_random(7)}}"> 
                     <input id="agreement" name="agreement" type="hidden" value="Agreed">
                     
                     <input id="role_id" name="role_id" type="hidden" value="5">

                     
                     <div class="form-group{{ $errors->has('full_name') ? ' is-invalid' : '' }}">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="icon-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="full_name" value="{{ old('full_name') }}" required autofocus placeholder="Full Name">
                    @if ($errors->has('full_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('full_name') }}</strong>
                                    </span>
                                @endif


                  </div>
                </div>
                
                <div class="form-group{{ $errors->has('business_name') ? ' is-invalid' : '' }}">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="icon-lock"></i></span>
                    </div>
                    <input type="text" class="form-control" name="business_name" placeholder="Business Name" required>
                    @if ($errors->has('business_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('business_name') }}</strong>
                                    </span>
                                @endif

                  </div>
                </div>
                
                
               <div class="form-group{{ $errors->has('business_type') ? ' is-invalid' : '' }}">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="icon-lock"></i></span>
                    </div>
                    <select class="form-control" name="business_type" placeholder="Business Type" required>
                        
                        <option>Select your Business Type</option>
                         <option value="Resellers">Resellers</option>
                         <option value="Installers">Installers</option>
                          <option value="Project Contractors">Project Contractors</option>
                           <option value="Co-operatives">Co-operatives</option>
                        
                        </select>
                    @if ($errors->has('business_type'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('business_type') }}</strong>
                                    </span>
                                @endif

                  </div>
                </div>
                
                <div class="form-group{{ $errors->has('email') ? ' is-invalid' : '' }}">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="icon-lock"></i></span>
                    </div>
                    <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                  </div>
                </div>
                
                
                
                <div class="form-group{{ $errors->has('location') ? ' is-invalid' : '' }}">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="icon-lock"></i></span>
                    </div>
                    <input type="text" class="form-control" name="location" placeholder="Location" required autofocus>
                    @if ($errors->has('location'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif

                  </div>
                </div>
                
                 <div class="form-group{{ $errors->has('number') ? ' is-invalid' : '' }}">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="icon-lock"></i></span>
                    </div>
                    <input type="number" class="form-control" name="number" placeholder="Phone Number" required>
                    @if ($errors->has('number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                                @endif

                  </div>
                </div>
                
                 <div class="form-group{{ $errors->has('address') ? ' is-invalid' : '' }}">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="icon-lock"></i></span>
                    </div>
                    <input type="text" class="form-control" name="address" placeholder="Address" required>
                    @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif

                  </div>
                </div>
                
                
                <div class="form-group{{ $errors->has('state') ? ' is-invalid' : '' }}">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="icon-lock"></i></span>
                    </div>
                    <input type="text" class="form-control" name="state" placeholder="State" required>
                    @if ($errors->has('state'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif

                  </div>
                </div>


                <div class="form-group{{ $errors->has('password') ? ' is-invalid' : '' }}">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="icon-lock"></i></span>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                  </div>
                </div>


                 <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="icon-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Repeat Password" required>
                   
                  </div>
                </div>
                
                 <div class="form-group">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input"  name="agreement" required>
                      I (We) hereby apply to become an authorized Solatrify dealer to access the best wholesale pricing, 
                      Business( marketing and technical) support, 
                      and other value-added market development assistance
                    </label>
                  </div>
                
                
  
                
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block" type="submit">Create Account</button>
                </div>


                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Are you a dealer ?</span>
                  <a href="{{route('login') }}" class="text-small">Login</a>
                </div>
              </form>
            </div>
            <ul class="auth-footer">
              <li><a href="#">Conditions</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="#">Terms</a></li>
            </ul>
            <p class="footer-text text-center">copyright © {{date('Y')}} Solatrify. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>



 <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="/authLogin/vendors/js/vendor.bundle.base.js"></script>
  <script src="/authLogin/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="/authLogin/js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
  
  
</body>


</html>


