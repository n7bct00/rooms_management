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
               @if($message = Session::get('success'))
        <div class="alert alert-info alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            <meta http-equiv="refresh" content="2">
        </div>
        @endif
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if($edit = Session::get('data'))
        @foreach ($edit as $val)
        @endforeach
        <form class="main-form full" method="post" action="{{ route('room_update',['id' => $val->id]) }}" enctype="multipart/form-data">
        @else
             <form class="main-form full" method="post" action="{{ route('roomsadd') }}" enctype="multipart/form-data">
        @endif 
               @csrf
                 <div class="row">
                        <div class="col-12">
                          <div class="heading-part mb-30 mb-sm-20">
                            <h4 class="main_title heading mb-0">Room Entry</h4>
                          </div>
                        </div>
                      </div>
              <div class="row">
               <div class="col-md-6">
                   <div class="input-box mb-30 mb-xs-20">
                        <label>Room Catagory</label>
                        <select class="form-control" name="room_catagory" required  onchange="" id="room_catagory">
                          @isset($val->room_catagory)
                          <option value="{{ $val->room_catagory }}">{{ $val->room_catagory }} </option>
                          @endisset
                          <option value="">Select Type</option>
                          <option value="Single Bed Room">Single Bed Room</option>
                          <option value="Standard Family Room">Standard Family Room</option>
                          <option value="Deluxe Single Room">Deluxe Single Room</option>
                          </select>
                          </div>
                </div>
                <div class="col-md-3">
                          <div class="input-box mb-30">
                            <label>Room size(in meter)</label>
                            <input id="room_size" name="room_size" class="form-control" type="text" required placeholder="Ex: 15 m²" value="{{ $val->room_size ?? '' }}">
                          </div>
                  </div>
                 <div class="col-md-3">
                          <div class="input-box mb-30">
                            <label>Day/Per Rate</label>
                            <input id="per_rate" name="per_rate" class="form-control" type="number" required placeholder="" value="{{ $val->per_rate ?? '' }}">
                          </div>
                  </div>

                  <div class="col-md-4">
                   
                    <label>Room Photo</label>
                     <div class="input-box mb-30">
                    @if(isset($val->room_photo))
                    <a class="btn btn-color" href="uploads/{{ $val->room_photo }}">view</a>
                    @else
                    <input id="room_photo" name="room_photo" class="form-control" type="file" required accept="image/*" placeholder="maximum-size 2MB" onchange="validateSize(this);validatename(this);" >
                      @endif
                   </div>
                  </div>
                   <div class="col-md-3">
                          <div class="input-box mb-30">
                            <label>Single beds count</label>
                            <input id="beds_count" name="beds_count" class="form-control" type="number" required placeholder="" value="{{ $val->beds_count ?? '' }}">
                          </div>
                  </div>

 <div class="col-md-2">
 <label>Free Wi-Fi</label>
  <div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="free_wifi1" name="free_wifi" value="yes" @isset($val->free_wifi) {{ $val->free_wifi == 'yes' ? 'checked' : '' }} @endisset>
  <label class="custom-control-label" for="free_wifi1">Yes</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="free_wifi2" name="free_wifi" value="no" @isset($val->free_wifi) {{ $val->free_wifi == 'no' ? 'checked' : '' }} @endisset>
  <label class="custom-control-label" for="free_wifi2">No</label>
</div>
</div>
<div class="col-md-3">
 <label>Shower and Bathtub</label>
  <div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="shower_bathtub1" name="shower_bathtub" value="yes" @isset($val->shower_bathtub) {{ $val->shower_bathtub == 'yes' ? 'checked' : '' }} @endisset>
  <label class="custom-control-label" for="shower_bathtub1">Yes</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="shower_bathtub2" name="shower_bathtub" value="no" @isset($val->shower_bathtub) {{ $val->shower_bathtub == 'no' ? 'checked' : '' }} @endisset>
  <label class="custom-control-label" for="shower_bathtub2">No</label>
</div>
</div>
<div class="col-md-2">
  @if(Session::has('data'))
  <button class="btn btn-color" type="submit" name="update">Update</button>
  @else
  <button class="btn btn-color" type="submit" name="submit">Save</button>
  @endif
</div>
                  </div>
                     </form>
                    </div>

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
    <script type="text/javascript">
      function validateSize(input) {
      var fileSize = input.files[0].size / 1024 / 1024;
      if (fileSize > 2)
      {
        alert('File size exceeds 2 MiB');
        input.value='';
      }
      else
      {

      }
}

function validatename(input)
{
  if(!input.files[0].name.match(/.(jpg|jpeg|png|gif|JPG|PNG|JPEG|GIF)$/i))
  {
    alert('Please Choose Correct Image File');
    input.value='';
  }
  else
  {

  }
}
  </script>
  </body>

<!-- Mirrored from aaryaweb.info/html/travelride/tr001/hotel_booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Feb 2022 06:49:55 GMT -->
</html>
