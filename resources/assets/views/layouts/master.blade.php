<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="{{ $pageDescription }}" />
<meta name="keywords" content="{{ $pageKeywords }}" />
<meta name="author" content="{{ $pageAuthor }}" />

<!-- Page Title -->
<title>{{ config('app.name', 'Solatrify') }}</title>

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">


<!-- Favicon and Touch Icons -->
<link href="{{ url ('images/favicon.png') }}" rel="shortcut icon" type="image/png">
<link href="{{ url ('images/apple-touch-icon.png') }}" rel="apple-touch-icon">
<link href="{{ url ('images/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
<link href="{{ url ('images/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
<link href="{{ url ('images/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="{{ url ('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ url ('css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ url ('css/animate.css') }}" rel="stylesheet" type="text/css">
<link href="{{ url ('css/css-plugin-collections.css') }}" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{ url ('css/menuzord-skins/menuzord-rounded-boxed.css') }}" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{ url ('css/style-main.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{ url ('css/preloader.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{ url ('css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{ url ('css/responsive.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="{{ url ('css/style.css') }}" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="{{ url ('js/revolution-slider/css/settings.css') }}" rel="stylesheet" type="text/css"/>
<link  href="{{ url ('js/revolution-slider/css/layers.css') }}" rel="stylesheet" type="text/css"/>
<link  href="{{ url ('js/revolution-slider/css/navigation.css') }}" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="{{ url ('css/colors/theme-skin-blue.css') }}" rel="stylesheet" type="text/css">
<script src="{{ url ('js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ url ('js/jquery-ui.min.js') }}"></script>
<script src="{{ url ('js/bootstrap.min.js') }}"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{ url ('js/jquery-plugin-collection.js') }}"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{ url ('js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ url ('js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- external javascripts -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img class="floating ml-5" src="{{ url ('images/preloaders/preloader.png') }}" alt="">
      <h5 class="line-height-50 font-18">Loading...</h5>
    </div>
    {{--  <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>  --}}
  </div>
  
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-nav header-dark navbar-fixed-top navbar-white navbar-transparent navbar-sticky-animated animated-active">
      <div class="header-nav-wrapper">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default no-bg">
            <a class="menuzord-brand pull-left flip xs-pull-center mt-20" href="/">
              <img src="{{ url ('images/logo-wide.png') }}" alt="{{ url ('images/logo-wide.png') }}" width="200" height="100">
            </a>
            <ul class="menuzord-menu pull-left">

              <li class="active"><a href="/">Home</a></li>

                  <li ><a href="javascript:void(0)">Company</a>
                  <ul class="dropdown" style="right: auto; display: none;">
                  <li><a href="/about">About Us</a></li>
                  <li><a href="/teams">Our Team</a></li>
                 
                </ul>  </li>

              <li><a href="/products">Products</a></li>


              
                
             <li><a href="javascript:void(0)">Solutions</a>
                 <ul class="dropdown" style="right: auto; display: none;">
                  <li><a href="/solutions/wholesales">Wholesale</a></li>
                  <li><a href="/solutions/design_support">Design Support</a></li>
                  <li><a href="/solutions/solar_financing">Solar Financing</a></li>
                  <li><a href="/solutions/find_an_installer">Find an Installer</a></li>
                  <!--<li><a href="/solutions/market_intelligence">Market Intelligence</a></li>-->
                  </ul>
                 </li>

             

           
               <!-- <li><a href="/dailydeals">Solar Deals</a></li> -->
                <li><a href="/manufacturer">Manufacturer</a></li>

                 <li><a href="javascript:void(0)">Community</a>
                 <ul class="dropdown" style="right: auto; display: none;">
                  <li><a href="/comingSoon">Featured Project</a></li>
                  <li><a href="/comingSoon">Learning Hub</a></li>
                  <li><a href="/blogs">Blogs</a></li>
                  <!--<li><a href="/comingSoon">Solatrician Community</a></li>-->
                  <!--<li><a href="/event">Events</a></li>-->
                  <li><a href="/comingSoon">Careers</a></li>
                  </ul>
                 </li>
                 
                  <li><a href="/contact">Contact</a></li>


                   

          @if (Route::has('login'))
           @auth
               <li > <a class="btn btn-gray btn-theme-colored btn-circled btn-lg border-2px text-white " href="/home">Dashboard</a></li >
               @else
               <li > <a class="btn btn-gray btn-theme-colored btn-circled btn-lg border-2px text-white" href="{{ route('login') }}">Dealers Login</a></li >
            @endauth
          @endif
          
           
          
          
                                             
             
            </ul>
           
       <!--<p style="color:red;">Hotline: </p><br>+234 905 799 9054-->
       


          </nav><div class="clearfix"></div>
        </div>
      </div>
    </div>
  </header>




  @yield('content')

  <!-- Modal -->
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">


    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Newsletter</h4>
        </div>
        <div class="modal-body">
            <!-- Section: home -->
            <section id="home" class="divider parallax layer-overlay overlay-dark-9" data-bg-img="{{ url ('images/bg/bg1.jpg')}}">
              <div class="display-table">
                <div class="display-table-cell">
                    <div class="row">
                      <div class="col-md-6 col-md-push-3">
                        <div class="text-center mb-60"><a href="#" class=""><img alt="{{url('images/logo-wide.png')}}" src="{{ url ('images/logo-wide.png') }}"></a>
                        </div>
                        <div class="bg-lightest border-1px p-30 mb-0">
                          
                          <p>Subscribe to our newsletter</p>

                          <form action="/newsletter" method="post">
                          {{ csrf_field() }}
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group">
                                  <label>Full Name <small>*</small></label>
                                  <input name="full_name" type="text" placeholder="Full Name" required="required" class="form-control">
                                </div>
                             
                             
                                <div class="form-group">
                                  <label>Email <small>*</small></label>
                                  <input name="email" class="form-control required email" type="email" placeholder="Enter Email" required>
                                </div>
                                </div>
                            </div>
                           
                            <div class="form-group">
                           
                              <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Subscribe</button>
                            </div>
                          </form>
                          

                        </div>
                      </div>
                    </div>
                 
                </div>
              </div>
            </section> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
        </div>
      </div>
    </div>
  </div>
  <!-- Modal End -->
  


  <!-- Footer -->
  <footer id="footer" class="footer bg-black-222" data-bg-img="{{ url ('images/footer-bg.png') }}">

    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0">Copyright &copy;{{ date('Y') }} Solatrify. All Rights Reserved</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                  <li>
                  <a href="/teams">Our Teams</a>
                </li>
                
                 <li>
                  <a href="/about">About Us</a>
                </li>
                
                <li>|</li>
                <li>
                  <a href="/faq">FAQ</a>
                </li>
               
                <li>|</li>
                <li>
                  <a href="/support">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{ url ('js/custom.js') }}"></script>

</body>
</html>