<!DOCTYPE html>
<html lang="en">
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

      <!-- HEADER START -->
      @include('topbar.topbar')
      <!-- HEADER END -->

      <!-- Bread Crumb STRAT -->
      <section class="bread bread-banner">
        <div class="container">
          <div class="bread-detail text-center d-md-flex align-items-center justify-content-between">
            <h4 class="bread-title mb-3 mb-md-0">Room Post</h4>
            <div class="bread-crumb">
              <ul>
                <li class="breadcrumb-item"><a href="index-2.html"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item active"><a href="#">Room Post</a></li>
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
             @include('sidebar')
            <div class="col-lg-8 order-lg-1">
            <div class="form-bg box-wrap">
        @if($error = Session::get('message'))
            <div class="alert alert-danger">
                <strong>Whoops!</strong>
                <ul>
                        <li>{{ $error }}</li>
                </ul>
            </div>
        @endif

        @isset($rooms)
        <div class="table-responsive">

                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th class="text-center">S.No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Room Catagory</th>
                            <th>Room size</th>
                            <th>Per rate</th>
                            <th>Room vacate</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($rooms as $key => $data)
                          <tr>
                            <td class="text-center">{{ $key+1 }}</td>
                             <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->phoneno }}</td>
                            <td>{{ $data->room_catagory }}</td>
                            <td>{{ $data->room_size }}</td>
                            <td>{{ $data->per_rate }}</td>
                            <td>
                             <a href="{{ route('hotel_vacant', ['id' => $data->id]) }}" class="btn btn-color"><i class="fa fa-trash" ></i></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
              </div>
              @endisset

                </div>
              </div>
            </div>

                    </div>
                  </div>
                </div>


      </section>
      <!--package Block End -->

        @include('topbar.footer')



    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.downCount.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/fotorama.js"></script>
    <script src="js/select2.full.min.js"></script>
    <script src="js/jquery.card.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>

  </body>

<!-- Mirrored from aaryaweb.info/html/travelride/tr001/hotel_booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Feb 2022 06:49:55 GMT -->
</html>
