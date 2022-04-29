<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
  <!--<![endif]-->
  
<!-- Mirrored from aaryaweb.info/html/travelride/tr001/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Feb 2022 06:49:11 GMT -->
<head>
    <!-- Basic Page Needs
      ================================================== -->
    <meta charset="utf-8">
    <title>TravelRide</title>
    <!-- SEO Meta
      ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="distribution" content="global">
    <meta name="revisit-after" content="2 Days">
    <meta name="robots" content="ALL">
    <meta name="rating" content="8 YEARS">
    <meta name="Language" content="en-us"> 
    <meta name="GOOGLEBOT" content="NOARCHIVE">

    <!-- Mobile Specific Metas ====================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- =========== CSS =========== -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- fav-icon  ====================== -->
    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="apple-touch-icon" href="images/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">
  </head>
  <body class="">

    <!-- Loader Start -->
    <div class="se-pre-con">
      <div class="spinner">
        <div class="triple-spinner"></div>
      </div>
    </div>
    <!-- Loader End -->

    <div class="main">
      
       @include('topbar.topbar')
      <!-- HEADER END -->  
      
      <!-- Bread Crumb STRAT -->
      <section class="bread bread-banner">
        <div class="container">
          <div class="bread-detail text-center d-md-flex align-items-center justify-content-between">
            <h4 class="bread-title mb-3 mb-md-0">Login</h4>
            <div class="bread-crumb">
              <ul>
                <li class="breadcrumb-item"><a href="index-2.html"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item active"><a href="#">Login</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Bread Crumb END --> 

      <!-- CONTAIN START -->
      <section class="form-section login-form ptb-100">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                  <div class="form-bg box-wrap">
                   @if($errors->any())
    <div class="alert alert-danger" align="center">
       
            @foreach ($errors->all() as $error)
              {{ $error }}
            @endforeach
    </div>
@endif
                    <form class="main-form full" method="post" action="{{ url('loginuser') }}">
                    @csrf
                      <div class="row">
                        <div class="col-12">
                          <div class="heading-part mb-30 mb-sm-20">
                            <h2 class="main_title heading mb-0">Login</h2>
                          </div>
                        </div>
                      </div>
                

                      <div class="input-box mb-30 mb-xs-20">
                        <div class="input-icon">
                          <span><i class="fas fa-envelope"></i></span>
                        </div>
                        <input id="login-email" class="form-control" type="email" name="email" required placeholder="Email Address">
                      </div>
                      <div class="input-box mb-30">
                        <div class="input-icon">
                          <span><i class="fas fa-lock"></i></span>
                        </div>
                        <input id="login-pass" class="form-control" type="password" name="password" required placeholder="Enter your Password">
                        <div class="input-icon icon-eye">
                          
                        </div>
                      </div>
                      <div class="d-flex justify-content-between align-items-center mb-30">
                        <div class="check-box"> 
                          <span>
                            <input id="remember_me" type="checkbox" name="remember_me" class="checkbox">
                            <label for="remember_me">Remember Me</label>
                          </span>
                        </div>
                        
                      </div>
                      <div class="login-btn text-center">
                        <button name="submit" type="submit" class="btn btn-color w-50">
                          <span>Log In <svg xmlns="http://www.w3.org/2000/svg" viewBox="297 387.5 18 17"  fill="#fff" ><path d="M305 398.4a1.09 1.09 0 0 0 0 1.5 1.08 1.08 0 0 0 .7.3c.3 0 .5-.1.7-.3l3.2-3.2v-1.4s0-.1-.1-.1l-3.1-3.1a1.09 1.09 0 0 0-1.5 0 1.09 1.09 0 0 0 0 1.5l1.3 1.3H298c-.6 0-1 .5-1 1 0 .6.5 1 1 1h8.3l-1.3 1.5zm1.5-10.9c-2.8 0-5.5 1.4-7.1 3.8-.3.5-.2 1.1.3 1.4s1.1.2 1.4-.3c1.2-1.8 3.2-2.8 5.3-2.8 3.5 0 6.4 2.9 6.4 6.4s-2.9 6.4-6.4 6.4c-2.1 0-4.1-1.1-5.3-2.8-.3-.5-1-.6-1.4-.3-.5.3-.6 1-.3 1.4 1.6 2.3 4.2 3.7 7 3.7 4.7 0 8.5-3.8 8.5-8.5.1-4.6-3.7-8.4-8.4-8.4z"/></svg>
                          </span>
                        </button>
                      </div>
                      <div class="different-login text-center mtb-30">
                          <span> or</span>
                      </div>
                       
                      <div class="new-account text-center"> 
                        <span>Don't Have an Account?</span> 
                        <a class="link" title="Register with TravelRide" href="{{url('register')}}">Create New Account</a> 
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- CONTAINER END -->

      <!-- News Letter Start -->
      <div class="newsletter-bg">
        <div class="container">
          <div class="newsletter">
            <div class="newsletter-inner text-center text-lg-left">
              <div class="row justify-content-center align-items-center">
                <div class=" col-xl-10 col-12">
                  <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                      <div class="d-lg-flex align-items-center">
                        <div class="newsletter-icon"><img src="images/subscribe_icon.svg" alt="TravelRide"></div>
                        <div class="newsletter-title color-white">
                          <h2 class="main_title mb-0">Get Updates & More</h2>
                          <p class="m-0">Thoughtful thoughts to your inbox</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                      <form>
                        <div class="newsletter-box">
                          <input type="email" placeholder="Email Here...">
                          <button title="Subscribe" class="btn btn-color">Subscribe</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- News Letter End -->

     

    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script> 
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.downCount.js"></script> 
    <script src="js/wow.min.js"></script> 
    <script src="js/fotorama.js"></script>
    <script src="js/jquery.card.js"></script> 
    <script src="js/simplebar.min.js"></script> 
    <script src="js/scrolling-nav.js"></script>
    <script src="js/jquery-ui.min.js"></script> 
    <script src="js/owl.carousel.min.js"></script>  
    <script src="js/custom.js"></script>

  </body>

<!-- Mirrored from aaryaweb.info/html/travelride/tr001/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Feb 2022 06:49:11 GMT -->
</html>
