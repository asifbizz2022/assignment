<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Register Page </title>
    <link rel="apple-touch-icon" sizes="60x60" href="{{url('/')}}/app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('/')}}/app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{url('/')}}/app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{url('/')}}/app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/app-assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="{{url('/')}}/app-assets/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/app-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/app-assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/app-assets/css/pages/login-register.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  blank-page blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
    <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1 box-shadow-2 p-0">
		<div class="card border-grey border-lighten-3 px-2 py-2 m-0">
			<div class="card-header no-border">
				<div class="card-title text-xs-center">
					<img src="{{url('/')}}/app-assets/images/logo/robust-logo-dark.png" alt="branding logo">
				</div>
				<h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Create Account</span></h6>
			</div>
			<div class="card-body collapse in">	
				<div class="card-block">

					<form method="POST" action="{{ route('register') }}" class="form-horizontal form-simple" action="index.html" novalidate>
           @csrf
						<fieldset class="form-group position-relative has-icon-left mb-1">
							 	
              <input placeholder="name" id="name" type="text" class="form-control form-control-lg input-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              <div class="form-control-position">
							    <i class="icon-head"></i>
							</div>
              @error('name')
                  <span class="invalid-feedback text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
						</fieldset>
            
						<fieldset class="form-group position-relative has-icon-left mb-1">
							
              <input id="email" type="email" class="form-control form-control-lg input-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

              @error('email')
                  <span class="invalid-feedback text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <div class="form-control-position">
							    <i class="icon-mail6"></i>
							</div> 
            
            </fieldset> 

						<fieldset class="form-group position-relative has-icon-left">
            <input id="password" type="password" class="form-control form-control-lg input-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

              @error('password')
                  <span class="invalid-feedback text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
							<div class="form-control-position">
							    <i class="icon-key3"></i>
							</div>
						</fieldset  >

            <fieldset class="form-group position-relative has-icon-left">
            <input id="password-confirm" type="password" class="form-control form-control form-control-lg input-lg" name="password_confirmation" required autocomplete="new-password">
							<div class="form-control-position">
							    <i class="icon-key3"></i>
							</div>
						</fieldset  >

            

						<button type="submit" class="btn btn-primary btn-lg btn-block"><i class="icon-unlock2"></i> Register</button>
					</form>

				</div>
				<p class="text-xs-center">Already have an account ? <a href="{{ route('login') }}" class="card-link">Login</a></p>
			</div>
		</div>
	</div>
</section>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script src="{{url('/')}}/app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="{{url('/')}}/app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="{{url('/')}}/app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
