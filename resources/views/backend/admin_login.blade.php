<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from xpanthersolutions.com/admin-templates/theta/html/dark-vertical/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Sep 2019 09:32:45 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Theta is a premium responsive admin dashboard template with great features.">
    <meta name="keywords" content="responsive, admin template, dashboard template, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Theta - Responsive Admin Dashboard Template</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{asset('backend_assets/images/favicon.ico')}}">
    <!-- Start css -->
    <link href="{{asset('backend_assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend_assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend_assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- End css -->
</head>
<body class="vertical-layout">
    <!-- Start Containerbar -->
    <div id="containerbar" class="containerbar authenticate-bg">
        <!-- Start Container -->
        <div class="container">
            <div class="auth-box login-box">
                <!-- Start row -->
                @if (session('error_message'))
                  <div class="row no-gutters align-items-center justify-content-center" style="height:50px;">
                    <span class="alert alert-danger" >{{session('error_message')}}</span>
                  </div>
                @endif
                <div class="row no-gutters align-items-center justify-content-center">

                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <div class="auth-box-left">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-white">Your comminuty awaits.</h4>
                                    <div class="auth-box-icon">
                                        <img src="{{asset('backend_assets/images/authentication/auth-box-icon.svg')}}" class="img-fluid" alt="auth-box-icon">
                                    </div>
                                    <div class="auth-box-logo">
                                        <img src="{{asset('backend_assets/images/logo.svg')}}" class="img-fluid " alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start end -->

                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{url('admin')}}" method="post">
                                      @csrf
                                        <h4 class="text-primary mb-4">Log in !</h4>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email Address here" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password here" required>
                                        </div>
                                        <div class="form-row mb-3">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-checkbox">
                                                  <input type="checkbox" class="custom-control-input" id="rememberme">
                                                  <label class="custom-control-label font-14" for="rememberme">Remember Me</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="forgot-psw">
                                                <a id="forgot-psw" href="user-forgotpsw.html" class="font-14">Forgot Password?</a>
                                              </div>
                                            </div>
                                        </div>
                                      <button type="submit" class="btn btn-success btn-lg btn-block font-18">Log in Now</button>
                                    </form>
                                    <div class="login-or">
                                        <h6 class="text-muted">OR</h6>
                                    </div>
                                    <div class="social-login text-center">
                                        <button type="submit" class="btn btn-primary-rgba btn-lg btn-block font-18"><i class="mdi mdi-facebook mr-2"></i>Log in with Facebook</button>
                                        <button type="submit" class="btn btn-danger-rgba btn-lg btn-block font-18"><i class="mdi mdi-google mr-2"></i>Log in with Google</button>
                                    </div>
                                    <p class="mb-0 mt-3">Don't have a account? <a href="user-register.html">Sign up</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Auth Box -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Container -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->
    <script src="{{asset('backend_assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend_assets/js/popper.min.js')}}"></script>
    <script src="{{asset('backend_assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend_assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('backend_assets/js/detect.js')}}"></script>
    <script src="{{asset('backend_assets/js/jquery.slimscroll.js')}}"></script>
    <!-- End js -->
</body>

<!-- Mirrored from xpanthersolutions.com/admin-templates/theta/html/dark-vertical/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Sep 2019 09:32:46 GMT -->
</html>
