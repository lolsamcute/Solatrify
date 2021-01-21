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
          <p>Sign up to become an authorized Solatrify dealer to get access to high-quality solar equipment at wholesale price, best business support and value-added service in the Solar Industry</p>
          <p>It's FREE and takes just 5 minutes!</p><br>
					<img src="{{ url ('/images/Fulllogo.png') }}" alt="" />
				</div>
			</div>

			<div class="w3_info">
			<!---728x90--->

				<h2>Register to your Account</h2>
        <p>Enter your details to create your account.</p>
        
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


                     <label>Full Name</label>
					<div class="input-group {{ $errors->has('full_name') ? ' is-invalid' : '' }}">
						<span class="fa fa-envelope" aria-hidden="true"></span>
            <input type="text" name="full_name" value="{{ old('full_name') }}" required autofocus placeholder="Full Name"> 
            @if ($errors->has('full_name'))
                     <div class="alert alert-danger" role="alert">
                                {{ $errors->first('full_name') }}
                                </div>
                                    
                                @endif
          </div>


          <label>Business Name</label>
					<div class="input-group {{ $errors->has('business_name') ? ' is-invalid' : '' }}">
						<span class="fa fa-envelope" aria-hidden="true"></span>
            <input type="text" name="business_name" value="{{ old('business_name') }}" required  placeholder="Business Name"> 
            @if ($errors->has('business_name'))
                     <div class="alert alert-danger" role="alert">
                                {{ $errors->first('business_name') }}
                                </div>
                                    
                                @endif
          </div>


          <label>Business Type</label>
					<div class="input-group {{ $errors->has('business_type') ? ' is-invalid' : '' }}">
						<span class="fa fa-envelope" aria-hidden="true"></span>
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



          <label>Location</label>
					<div class="input-group {{ $errors->has('location') ? ' is-invalid' : '' }}">
						<span class="fa fa-envelope" aria-hidden="true"></span>
            <input type="text" name="location" value="{{ old('location') }}" required  placeholder="Location"> 
            @if ($errors->has('location'))
                     <div class="alert alert-danger" role="alert">
                                {{ $errors->first('location') }}
                                </div>
                                    
                                @endif
          </div>



          <label>Number</label>
					<div class="input-group {{ $errors->has('number') ? ' is-invalid' : '' }}">
						<span class="fa fa-envelope" aria-hidden="true"></span>
            <input type="text" name="number" value="{{ old('number') }}" required  placeholder="Number"> 
            @if ($errors->has('number'))
                     <div class="alert alert-danger" role="alert">
                                {{ $errors->first('number') }}
                                </div>
                                    
                                @endif
          </div>


          <label>Address</label>
					<div class="input-group {{ $errors->has('address') ? ' is-invalid' : '' }}">
						<span class="fa fa-envelope" aria-hidden="true"></span>
            <input type="text" name="address" value="{{ old('address') }}" required  placeholder="Address"> 
            @if ($errors->has('address'))
                     <div class="alert alert-danger" role="alert">
                                {{ $errors->first('address') }}
                                </div>
                                    
                                @endif
          </div>



          <label>State</label>
					<div class="input-group {{ $errors->has('state') ? ' is-invalid' : '' }}">
						<span class="fa fa-envelope" aria-hidden="true"></span>
            <input type="text" name="state" value="{{ old('state') }}" required  placeholder="State"> 
            @if ($errors->has('state'))
                     <div class="alert alert-danger" role="alert">
                                {{ $errors->first('state') }}
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
          
          <label>Password</label>
					<div class="input-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
            <input type="Password" id="password-confirm" name="password_confirmation" placeholder="Repeat Password" required>
           
          </div> 
          


					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="agreement" required><i> </i> I (We) hereby apply to become an authorized Solatrify dealer to access the best wholesale pricing, 
                      Business( marketing and technical) support, 
                      and other value-added market development assistance</label>
					</div>						
						<button class="btn btn-danger btn-block" type="submit">Create Account</button >               
        </form>
        <p class="account1">Dont have an account? <a href="{{route('login') }}">Login</a></p>
				
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