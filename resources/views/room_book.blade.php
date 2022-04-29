<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
  <!--<![endif]-->
  
<!-- Mirrored from aaryaweb.info/html/travelride/tr001/hotel_detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Feb 2022 06:49:41 GMT -->
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

    <div class="main hotel">
      
      <!-- HEADER START -->
        @include('topbar.topbar')
      <!-- HEADER END -->  

      <!-- Bread Crumb STRAT -->
      <section class="bread bread-banner">
        <div class="container">
          <div class="bread-detail text-center d-md-flex align-items-center justify-content-between">
            <h4 class="bread-title mb-3 mb-md-0">Room Detail</h4>
            <div class="bread-crumb">
              <ul>
                <li class="breadcrumb-item"><a href="index-2.html"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="#">Rooms</a></li>
                <li class="breadcrumb-item active"><a href="#">Room Detail</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Bread Crumb END --> 
      <!--package Block Start -->
      <section class="ptb-100 booking-detail">
 
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
               @if($message = Session::get('msg'))
        <div class="alert alert-info alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            <meta http-equiv="refresh" content="2">
        </div>
        @endif
              <div class="available-rooms mt-60">
                <h3 class="sub-heading mb-30 mb-xs-15">Available Rooms</h3>
                <div class="available-room-part mb_-30">
                  @isset($rooms)
                  <form class="main-form full" method="post" action="{{ route('roomsbookadd') }}" enctype="multipart/form-data">
                    @csrf
                  @foreach($rooms as $key => $data)
                  <div class="available-room-item box-shadow card overflow-hidden mb-30">
                    <figure>
                      <div class="available-room-img">
                        <img src="uploads/{{ $data->room_photo }}" alt="TravelRide">
                      </div>
                      <figcaption>
                        <div class="card-body pl-md-0 p-25 p-xs-15">
                          <div class="available-room-detail">
                            <h4>{{ $data->room_catagory }}</h4>
                            <div class="row">
                              <div class="col-xl-6">
                                <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-wifi"></i></span> Free Wi-Fi : {{ $data->free_wifi }}</div>
                              </div>
                              <div class="col-xl-6">
                                <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-bed"></i></span> {{ $data->beds_count }} Single beds</div>
                              </div>
                              <div class="col-xl-6">
                                <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-hotel"></i></span> {{ $data->room_size }}</div>
                              </div>
                              <div class="col-xl-6">
                                <div class="amenities-feature mb-3"><span class="icon"><i class="fas fa-shower"></i></span> Shower and bathtub : {{ $data->shower_bathtub }}</div>
                              </div>
                            </div>
                          </div>
                          <div class="available-room-price d-flex align-items-center justify-content-between">
                            <div class="price-box"> 
                              <div class="price-text mb-2">Per / Night</div> 
                              <div class="d-flex align-items-center">
                                <div class="price mb-0 mr-2">RS.{{ $data->per_rate }}</div> 
                                <div class="price old-price mb-0">RS.{{ $data->per_rate+50 }}</div> 
                              </div>
                            </div>
                            <div class="custom-checkbox mb-0">
                              <div class="check-box"> 
                                <span>
                                  <input id="selectroom{{ $data->id }}" type="checkbox" name="selectroom[]" class="checkbox" value="{{ $data->id.'|'.$data->postby }}">
                                  <label for="selectroom{{ $data->id }}" class="select-btn">Select</label>
                                </span>
                              </div>
                            </div>

                          </div>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                  @endforeach
                  <button class="btn btn-color" type="submit" name="submit">Save</button>
                </form>
                @endisset
                </div>
              </div>
            </div>
          </div>
          </div>    
      </section>
        @include('topbar.footer')
      <!-- FOOTER END -->  

    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script> 
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.downCount.js"></script> 
    <script src="js/select2.full.min.js"></script>
    <script src="js/wow.min.js"></script> 
    <script src="js/fotorama.js"></script>
    <script src="js/jquery.card.js"></script> 
    <script src="js/simplebar.min.js"></script> 
    <script src="js/scrolling-nav.js"></script>
    <script src="js/jquery-ui.min.js"></script> 
    <script src="js/owl.carousel.min.js"></script>  
    <script src="js/custom.js"></script>

  </body>

<!-- Mirrored from aaryaweb.info/html/travelride/tr001/hotel_detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Feb 2022 06:49:55 GMT -->
</html>
