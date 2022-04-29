<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
  <!--<![endif]-->
  
<!-- Mirrored from aaryaweb.info/html/travelride/tr001/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Feb 2022 06:50:37 GMT -->
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
      
      <!-- Bread Crumb STRAT -->
      <section class="bread bread-banner">
        <div class="container">
          <div class="bread-detail text-center d-md-flex align-items-center justify-content-between">
            <h4 class="bread-title mb-3 mb-md-0">Register</h4>
            <div class="bread-crumb">
              <ul>
                <li class="breadcrumb-item"><a href="index-2.html"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item active"><a href="#">Register</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Bread Crumb END -->

      <!-- CONTAIN START -->
      <section class="form-section ptb-100">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 col-12">
                  <div class="form-bg box-wrap">
                    <form class="main-form full" method="post" action="{{ url('registeruser') }}">
                      @csrf
                      <div class="row">
                        <div class="col-12">
                          <div class="heading-part mb-30 mb-sm-20">
                            <h2 class="main_title heading mb-0">Register</h2>
                          </div>
                        </div>
                      </div>
                      
                        <div class="col-md-12">
                          <div class="input-box mb-30 mb-xs-20">
                            <input id="f-name" class="form-control" name="name" type="text" required placeholder="Your Name">
                          </div>
                        
      
                        </div>
                        <div class="col-md-12">
                          <div class="input-box mb-30 mb-xs-20">
                            <input id="login-email" class="form-control" name="email" type="email" required placeholder="Email Address">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="input-box mb-30 mb-xs-20">
                            <input id="reg-phone" class="form-control numberk" name="phoneno" type="text" required placeholder="Phone number">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="input-box mb-30 mb-xs-20">
                            <input id="password" class="form-control" name="password" type="password" required placeholder="Enter your Password">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <span id="message"></span>
                        </div>
                        <div class="col-md-12">
                          <div class="input-box mb-30">
                            <input id="confirm_password" class="form-control" type="password" required placeholder="Confirm password">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="input-box mb-30">
                          <select class="form-control" name="role" required placeholder="User Type" onchange="testla();" id="role">
                          <option value="">Select Type</option>
                          <option value="1">House Owners</option>
                          <option value="2">Customers</option>
                          </select>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="register-btn  text-center">
                            <button name="submit" type="submit" class="btn btn-color  w-50" id="button">
                              <i class="fa fa-user" aria-hidden="true"></i><span>Register</span>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="different-login text-center mtb-30">
                          <span> or</span>
                      </div>
                      <div class="new-account text-center"> 
                        <span>Already have an account?</span> 
                        <a class="link" title="Register with TravelRide" href="{{url('login')}}">Log in</a> 
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
<script>
$('.numberk').on('input', function (event) {
this.value = this.value.replace(/[^0-9]/g, '');
});

$("#reg-phone").on('keyup blur', function (e) {
var val = $(this).val();
if(val.length > 10 || val.length < 10)
{
  var myval=val.substring(0,10);
  $(this).val(myval);
}
});

$('#password,#confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('').css('color', 'green');
     $('#button').removeAttr("disabled");

  } else 
  {
    $('#message').html('Did Not Match').css('color', 'red');
    $('#button').attr('disabled','disabled'); 
    
   
}
});
// function testla()
// {
//   $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
//         }
//     });
//    var role = $('#role').val();
//    $.ajax({
//            type:'POST',
//            url:"",
//            data:{role:role},
//            success:function(data){
//           }
//         });
// }
</script>
  </body>

</html>
