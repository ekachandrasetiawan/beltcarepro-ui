<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="LOGIN BELTCAREPRO 4.0" />
	<meta name="author" content="" />

	<title>BELTCAREPRO 4.0 | DESKTOP VERSION</title>

	<script type="text/javascript" script-name="amaranth" src="http://use.edgefonts.net/amaranth.js"></script>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" href="assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/xenon-core.css">
	<link rel="stylesheet" href="assets/css/xenon-forms.css">
	<link rel="stylesheet" href="assets/css/xenon-components.css">
	<link rel="stylesheet" href="assets/css/xenon-skins.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<style type="text/css">
		#login{
			margin-left: auto;
			margin-right: auto;	
			border-radius: 10px;
			-moz-border-radius: 10px;
			-webkit-border-radius: 10px;
			-o-border-radius: 10px;
		}
		.login-container{
			margin-left: auto;
			margin-right: auto;	
			width: 500px;	

		}
		.btn {
			border-radius: 5px;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			-o-border-radius: 5px;
		}
		.login-page .login-form .login-header .logo span {
		    padding-left: 3px;
		    position: absolute;
		    margin-top: 45px;
		    letter-spacing: 2px;
		    vertical-align: baseline;
		    font-weight: bold;
			-webkit-box-sizing: content-box;
			-moz-box-sizing: content-box;
			box-sizing: content-box;
			float: none;
			z-index: auto;
			width: auto;
			height: auto;
			cursor: default;
			opacity: 1;
			padding: 0;
			border: none;
			-webkit-border-radius: 0;
			border-radius: 0;
			font: normal 25px/1 "amaranth", Helvetica, sans-serif;
			color: #0096ff;
			text-align: center;
			-o-text-overflow: ellipsis;
			text-overflow: ellipsis;
			background: none;
			-webkit-box-shadow: none;
			box-shadow: none;
			text-shadow: none;
			-webkit-transition: none;
			-moz-transition: none;
			-o-transition: none;
			transition: none;
			-webkit-transform: none;
			transform: none;
			-webkit-transform-origin: 50% 50% 0;
			transform-origin: 50% 50% 0;
		}


	</style>

</head>
<body class="page-body login-page login-light">
	<div class="login-container">
		<div class="row">
			<div class="col-sm-12">
				<script type="text/javascript">
					jQuery(document).ready(function($)
					{
						// Reveal Login form
						setTimeout(function(){ $(".fade-in-effect").addClass('in'); }, 1);
						// Validation and Ajax action
						$("form#login").validate({
							rules: {
								username: {
									required: true
								},
	
								passwd: {
									required: true
								}
							},
	
							messages: {
								username: {
									required: 'Please enter your username.'
								},
	
								passwd: {
									required: 'Please enter your password.'
								}
							},
	
							// Form Processing via AJAX
							submitHandler: function(form)
							{
								show_loading_bar(70); // Fill progress bar to 70% (just a given value)
	
								var opts = {
									"closeButton": true,
									"debug": false,
									"positionClass": "toast-top-full-width",
									"onclick": null,
									"showDuration": "300",
									"hideDuration": "1000",
									"timeOut": "5000",
									"extendedTimeOut": "1000",
									"showEasing": "swing",
									"hideEasing": "linear",
									"showMethod": "fadeIn",
									"hideMethod": "fadeOut"
								};
	
								$.ajax({
									url: "data/login-check.php",
									method: 'POST',
									dataType: 'json',
									data: {
										do_login: true,
										username: $(form).find('#username').val(),
										passwd: $(form).find('#passwd').val(),
									},
									success: function(resp)
									{
										show_loading_bar({
											delay: .5,
											pct: 100,
											finish: function(){
	
												// Redirect after successful login page (when progress bar reaches 100%)
												if(resp.accessGranted)
												{
																									window.location.href = 'dashboard-1.html';
																								}
																						}
										});
	
										
										// Remove any alert
										$(".errors-container .alert").slideUp('fast');
	
	
										// Show errors
										if(resp.accessGranted == false)
										{
											$(".errors-container").html('<div class="alert alert-danger">\
												<button type="button" class="close" data-dismiss="alert">\
													<span aria-hidden="true">&times;</span>\
													<span class="sr-only">Close</span>\
												</button>\
												' + resp.errors + '\
											</div>');
	
	
											$(".errors-container .alert").hide().slideDown();
											$(form).find('#passwd').select();
										}
																		}
								});
	
							}
						});
	
						// Set Form focus
						$("form#login .form-group:has(.form-control):first .form-control").focus();
					});
				</script>
	
				<!-- Errors container -->
				<div class="errors-container"></div>
	
				<!-- Add class "fade-in-effect" for login form effect -->
				<form method="post" role="form" id="login" class="login-form fade-in-effect">
	
					<div class="login-header">
						<a href="home.php" class="logo">
							<img src="logo.png" alt="" width="100" />
							<span>BELTCAREPRO 4.0</span>
						</a>
						
					</div>
	
	
					<div class="form-group">
						<label class="control-label" for="username">Username</label>
						<input type="text" class="form-control" name="username" id="username" autocomplete="off" />
					</div>
	
					<div class="form-group">
						<label class="control-label" for="passwd">Password</label>
						<input type="password" class="form-control" name="passwd" id="passwd" autocomplete="off" />
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary  btn-block text-left">
							<i class="fa-lock"></i>
							Log In
						</button>
					</div>
	
				</form>
	
			</div>
	
		</div>
	
	</div>



	<!-- Bottom Scripts -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/TweenMax.min.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/xenon-api.js"></script>
	<script src="assets/js/xenon-toggles.js"></script>
	<script src="assets/js/jquery-validate/jquery.validate.min.js"></script>
	<script src="assets/js/toastr/toastr.min.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/xenon-custom.js"></script>



</body>
</html>