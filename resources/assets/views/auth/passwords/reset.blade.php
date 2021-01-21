<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ config('app.name', 'Solatrify') }} | Reset Email</title>
  
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" sizes="57x57" href="/images/Fulllogo.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/Fulllogo.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/Fulllogo.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/Fulllogo.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/Fulllogo.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/Fulllogo.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/Fulllogo.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/Fulllogo.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/Fulllogo.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/images/Fulllogo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/Fulllogo.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/Fulllogo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/Fulllogo.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/Fulllogo.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title"
          content="The Solar Distribution Company">

  
   
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/images/Fulllogo.png">


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
<p>Reset your password</p>


        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

           <form method="post" action="{{ url('/password/reset') }}">
            {!! csrf_field() !!}
            
            <input type="hidden" name="token" value="{{ $token }}">
            
            
                     <div class="form-group{{ $errors->has('email') ? ' is-invalid' : '' }}">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="icon-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif


                  </div>
                </div>
                
                <div class="form-group{{ $errors->has('password') ? ' is-invalid' : '' }}">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="icon-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="password" value="{{ old('password') }}" required autofocus placeholder="Password">
                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif


                  </div>
                </div>
                
                
                
                 <div class="form-group{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="icon-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" required autofocus placeholder="Confirm Password">
                    @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif


                  </div>
                </div>
                
                
                
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block"> <i class="fa fa-btn fa-refresh"></i>Reset Password</button>
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


