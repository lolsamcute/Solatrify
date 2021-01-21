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
    <link rel="icon" type="image/png" sizes="96x96" href="/images/imagesFulllogo.png">
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
                
                
                
      <p>Warm Welcome {{Auth::user()->full_name}}, <br><br> Thanks for your solatrify registration, One of our account Manager will get back to you within 48hours to fully verify and confirm your application. Kindly check our <a href="/products"> product </a> and Call <a href="telto:09057999054">0905 799 9054</a> to start your solar wholesale procurement with us.</p>


     <button class="btn btn-info"> <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                       
                          {{ __('Back') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
    </button>

               
            </div>
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


