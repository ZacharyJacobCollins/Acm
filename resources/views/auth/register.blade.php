<!DOCTYPE html>
<html lang="en" class=" js cssanimations csscalc cssvhunit gr__tympanus_net"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ACM</title>
		<meta name="description" content="Fullscreen Form Interface: A distraction-free form concept with fancy animations">
		<meta name="keywords" content="fullscreen form, css animations, distraction-free, web design">
		<meta name="author" content="Zachary Collins">
		<link rel="stylesheet" type="text/css" href="/css/signup/normalize.css">
		<link rel="stylesheet" type="text/css" href="/css/signup/codrops.css">
		<link rel="stylesheet" type="text/css" href="/css/signup/component.css">
		<link rel="stylesheet" type="text/css" href="/css/signup/cs-select.css">
		<link rel="stylesheet" type="text/css" href="/css/signup/cs-skin-boxes.css">
		<script type="text/javascript" src="/js/signup/ga.js"></script>
        <script type="text/javascript" src="/js/signup/modernizr.custom.js"></script>

	</head>
	<body data-gr-c-s-loaded="true">
		<div class="container">

			<div class="fs-form-wrap" id="fs-form-wrap">
				<div class="fs-title">
					<h1>Eastern Michigan Acm</h1>
				</div>
				<form id="myform" class="fs-form fs-form-full" autocomplete="off" method="POST" action="{{ url('/register') }}">
					{!! csrf_field() !!}
					<ol class="fs-fields">
						<li class="fs-current">
							<label class="fs-field-label fs-anim-upper" for="q1">Enter your name</label>
							<input class="fs-anim-lower" id="q1" name="name" type="text" placeholder="(First and Last)" required="true" style="color: #000">
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q2" data-info="For general organization purposes">What's your email address?</label>
							<input class="fs-anim-lower" id="q2" name="email" type="email" placeholder="Email" required="true" style="color: #000">
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q3" data-info="At least eight characters">Enter a password</label>
							<input class="fs-anim-lower" id="q3" name="password" type="password" placeholder="Password" required="true" style="color: #000">
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q4" data-info="At least eight characters">Please re-enter your password</label>
							<input class="fs-anim-lower" id="q4" name="password_confirmation" type="password" placeholder="At least eight characters" required="true" style="color: #000">
						</li>

						<!--	<li>  
							<label class="fs-field-label fs-anim-upper" for="q4">Upload a picture of yourself, this will be public facing, so keep it professional-ish</label>
							<textarea class="fs-anim-lower" id="q4" name="q4" placeholder="even if you don't we'll just assume you're amazing!" style="color: #000" ></textarea>
						</li>
                        <li>
							<label class="fs-field-label fs-anim-upper" for="q2" data-info="">Upload your resume</label>
							<input class="fs-anim-lower" id="q2" name="q2" type="email" placeholder="" required="" style="color: #000">
						</li>
						-->


					</ol><!-- /fs-fields -->
					<button class="fs-submit" type="submit">Sign Up</button>
				</form><!-- /fs-form -->

		</div><!-- /container -->
		<script src="/js/classie.js"></script>
		<script src="/js/signup/selectFx.js"></script>
		<script src="/js/signup/fullscreenForm.js"></script>
		<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );
				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );
				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' );
					}
				} );
			})();
		</script>
<div class="grammarly-disable-indicator"></div></body><div></div><div></div></html>
