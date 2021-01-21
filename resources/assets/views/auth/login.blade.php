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

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
	
	<!-- css files -->
	<link href="authLogin/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="authLogin/css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="https://m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<script type="text/javascript" src="https://services.bilsyndication.com/adv1/?d=353" defer="" async=""></script><script> var vitag = vitag || {};vitag.gdprShowConsentTool=false;vitag.outStreamConfig = {type: "slider", position: "left" };</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125810435-1');
</script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<body>

<div class="signupform">
	<div class="container">
		<!-- main content -->
		<!---728x90--->

		<div class="agile_info">
			<div class="w3l_form">
				<div class="left_grid_info">
					<h1>Manage Your Business Account</h1>
					<p>Purchase your solar batteries, panel and manage your account here.</p><br>
					<img src="{{ url ('/images/Fulllogo.png') }}" alt="" />
				</div>
			</div>

			<div class="w3_info">
			<!---728x90--->

				<h2>Login to your Account</h2>
        <p>Enter your details to login.</p>
        
        @if(Session::has('success_message'))
                    <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="zmdi zmdi-check pr-15 pull-left"></i><p class="pull-left">{{ Session::get('success_message') }}</p>
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

			 <form method="POST" action="{{ route('login') }}">
                     {{ csrf_field() }}

					<label>Email Address</label>
					<div class="input-group {{ $errors->has('email') ? ' is-invalid' : '' }}">
						<span class="fa fa-envelope" aria-hidden="true"></span>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter Email"> 
            @if ($errors->has('email'))
                     <div class="alert alert-danger" role="alert">
                                {{ $errors->first('email') }}
                                </div>
                                    
                                @endif
          </div>
          

					<label>Password</label>
					<div class="input-group {{ $errors->has('password') ? ' is-invalid' : '' }}">
						<span class="fa fa-lock" aria-hidden="true"></span>
            <input type="Password" placeholder="Enter Password"  name="password">
            @if ($errors->has('password'))
                     <div class="alert alert-danger" role="alert">
                                {{ $errors->first('password') }}
                                </div>
                                    
                                @endif
					</div> 
					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} checked><i> </i> Remember me</label>
					</div>						
						<button class="btn btn-danger btn-block" type="submit">Login</button >               
        </form>
        <p class="account1"><a href="{{ route('password.request') }} ">Forgot Password</a></p>
        <p class="account">By clicking login, you agree to our <a href="#">Terms & Conditions!</a></p>
        <p class="account1">Dont have an account? <a href="{{route('register') }}">Register here</a></p>
				
			</div>
		</div>
		<!-- //main content -->
	</div>
	<!---728x90--->

	<!-- footer -->
	<div class="footer">
		<p>&copy; {{date('Y')}} Solatrify. All Rights Reserved </p>
	</div>
	<!-- footer -->
</div>
	
</body>
</html>