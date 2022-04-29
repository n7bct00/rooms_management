<!DOCTYPE html>
 
<html lang="en">
 
<head>
    <!-- Basic Page Needs
      ================================================== -->
    <meta charset="utf-8">
    <title>Room Trade-Admin</title>
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
    <style type="text/css">
      .c-dashboardInfo {
  margin-bottom: 15px;
  height: 150px;
}
.c-dashboardInfo .wrap {
  background: #ffffff;
  box-shadow: 2px 10px 20px rgba(0, 0, 0, 0.1);
  border-radius: 7px;
  text-align: center;
  position: relative;
  overflow: hidden;
  padding: 40px 25px 20px;
  height: 100%;
}
.c-dashboardInfo__title,
.c-dashboardInfo__subInfo {
  color: #6c6c6c;
  font-size: 1.18em;
}
.c-dashboardInfo span {
  display: block;
}
.c-dashboardInfo__count {
  font-weight: 600;
  font-size: 2.5em;
  line-height: 64px;
  color: #323c43;
}
.c-dashboardInfo .wrap:after {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 10px;
  content: "";
}

.c-dashboardInfo:nth-child(1) .wrap:after {
  background: linear-gradient(82.59deg, #00c48c 0%, #00a173 100%);
}
.c-dashboardInfo:nth-child(2) .wrap:after {
  background: linear-gradient(81.67deg, #0084f4 0%, #1a4da2 100%);
}
.c-dashboardInfo:nth-child(3) .wrap:after {
  background: linear-gradient(69.83deg, #0084f4 0%, #00c48c 100%);
}
.c-dashboardInfo:nth-child(4) .wrap:after {
  background: linear-gradient(81.67deg, #ff647c 0%, #1f5dc5 100%);
}
.c-dashboardInfo__title svg {
  color: #d7d7d7;
  margin-left: 5px;
}
.MuiSvgIcon-root-19 {
  fill: currentColor;
  width: 1em;
  height: 1em;
  display: inline-block;
  font-size: 24px;
  transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
  user-select: none;
  flex-shrink: 0;
}

    </style>
   
  </head>
  <body class="homepage">

    <!-- Loader Start -->
    <div class="se-pre-con">
      <div class="spinner">
        <div class="triple-spinner"></div>
      </div>
    </div>
    <!-- Loader End -->

    <div id="current" class="main">
  
    @include('topbar.topbar')
    <section class="bread bread-banner">
        <div class="container">
          <div class="bread-detail text-center d-md-flex align-items-center justify-content-between">
            <h4 class="bread-title mb-3 mb-md-0">Dashboard</h4>
            <div class="bread-crumb">
              <ul>
                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="blog.html">Dashboard</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    <section class="ptb-100">
        <div class="container">
          <div class="sticky-wrapper">
          <div class="row m-0">
            @include('sidebar')
        <div class="c-dashboardInfo col-lg-3 col-md-6">
        <div class="wrap">
          <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Booked Rooms<svg
              class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
              <path fill="none" d="M0 0h24v24H0z"></path>
              <path
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
              </path>
            </svg></h4><span class="hind-font caption-12 c-dashboardInfo__count">
            {{ $rooms_book }}</span>
        </div>
      </div>
      <div class="c-dashboardInfo col-lg-3 col-md-6">
        <div class="wrap">
          <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Available Rooms <svg
              class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
              <path fill="none" d="M0 0h24v24H0z"></path>
              <path
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
              </path>
            </svg></h4><span class="hind-font caption-12 c-dashboardInfo__count">{{ $rooms }}</span>
        </div>
      </div>
      
      
              </div>
              </div>
              </section> 
    @include('topbar.footer')
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script> 
    <script src="../../../../cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="js/daterangepicker.js"></script> 
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.downCount.js"></script> 
    <script src="js/wow.min.js"></script> 
    <script src="js/fotorama.js"></script>
    <script src="js/select2.full.min.js"></script>
    <script src="js/jquery.card.js"></script>  
    <script src="js/animated-hedlines.js"></script>
    <script src="js/simplebar.min.js"></script> 
    <script src="js/scrolling-nav.js"></script>
    <script src="js/jquery-ui.min.js"></script>    
    <script src="js/jquery.counterup.min.js"></script> 
    <script src="js/waypoints.min.js"></script>  
    <script src="js/owl.carousel.min.js"></script> 
    <script src="js/custom.js"></script>
  </body>

<!-- Mirrored from aaryaweb.info/html/travelride/tr001/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Feb 2022 06:48:46 GMT -->
</html>
