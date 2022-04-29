  <!-- HEADER START -->
  <header class="navbar navbar-custom header" id="header">
        <div class="navbar-expand">
          <div class="header-top">
            <div class="container">
              <div class="top-line">
                <div class="row">
                  @if(isset(auth()->user()->name))
                  <div class="col-sm-6 col-12">
                      <div class="top-right-link float-sm-right d-none d-sm-block">
                    <ul>
                      <li class="login-icon content">
                    <a href="javascript:void(0)" title="">
                            <span class="fa fa-user"></span> {{auth()->user()->name}}
                          </a>
                  </li>
                  <li class="login-icon content">
                          <a href="{{url('logout')}}" title="Login">
                            <span class="fas fa-sign-out-alt"></span> Logout
                          </a>
                        </li>
                </ul>
              </div>
                  </div>
                  @else
                  <div class="col-sm-6 col-12">
                    <div class="top-right-link float-sm-right d-none d-sm-block">
                      <ul>
                        <li class="login-icon content">
                          <a href="{{url('login')}}" title="Login">
                            <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M14.74 15.57h-2.49a.36.36 0 0 1-.36-.36v-1.19a.36.36 0 0 1 .36-.36h2.49a.95.95 0 0 0 .95-.95V7.04a.95.95 0 0 0-.95-.95h-2.49a.36.36 0 0 1-.36-.36V4.55a.36.36 0 0 1 .36-.36h2.49a2.85 2.85 0 0 1 2.85 2.85v5.69c0 1.57-1.28 2.84-2.85 2.84zm-1.39-5.96L8.37 4.63a.72.72 0 0 0-1.22.51v2.85H3.12c-.39 0-.71.32-.71.71v2.85c0 .39.32.71.71.71h4.03v2.85c0 .64.77.95 1.22.5l4.98-4.98c.27-.29.27-.74 0-1.02z" fill="#fff"/></svg></span> Login
                          </a>
                        </li>
                        <li class="register-icon">
                          <a href="{{url('register')}}" title="Register">
                            <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.69 10.46c2.17 0 3.94-1.76 3.94-3.94s-1.76-3.94-3.94-3.94-3.94 1.77-3.94 3.94 1.76 3.94 3.94 3.94zm3.5.87h-1.51a4.75 4.75 0 0 1-1.99.44 4.75 4.75 0 0 1-1.99-.44H6.19c-1.93 0-3.5 1.57-3.5 3.5v.44c0 .72.59 1.31 1.31 1.31h11.38c.72 0 1.31-.59 1.31-1.31v-.44c0-1.93-1.57-3.5-3.5-3.5z" fill="#fff"/></svg></span> Register
                          </a>
                        </li>
                       
                      </ul>
                    </div>
                  </div>
                  @endif
                </div>
              </div>
            </div>
          </div>
          <div class="header-middle">
            <div class="container">
              <div class="row no-gutters align-items-center">
                <div class="col-lg-9 col-6">
                  <div class="header-middle-left">
                    <div class="row no-gutters align-items-center">
                      <div class="col-lg-3 col-12">
                        <div class="logo navbar-header float-none-sm">
                          <a class="navbar-brand page-scroll" href="#">
                            <h3 class="color-white">Room Trade</h3>
                          </a> 
                        </div>
                      </div>
                      <div class="col-lg-9 col-0">
                        <div class="overlay"></div>
                        <div id="menu" class="navbar-collapse collapse justify-content-center" >
                          <div class="top-right-link  mobile-link d-block d-sm-none">
                            @if(isset(auth()->user()->name))
                            @else
                            <ul>
                              <li class="login-icon content">
                                <a href="{{url('login')}}" title="Login">
                                  <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M14.74 15.57h-2.49a.36.36 0 0 1-.36-.36v-1.19a.36.36 0 0 1 .36-.36h2.49a.95.95 0 0 0 .95-.95V7.04a.95.95 0 0 0-.95-.95h-2.49a.36.36 0 0 1-.36-.36V4.55a.36.36 0 0 1 .36-.36h2.49a2.85 2.85 0 0 1 2.85 2.85v5.69c0 1.57-1.28 2.84-2.85 2.84zm-1.39-5.96L8.37 4.63a.72.72 0 0 0-1.22.51v2.85H3.12c-.39 0-.71.32-.71.71v2.85c0 .39.32.71.71.71h4.03v2.85c0 .64.77.95 1.22.5l4.98-4.98c.27-.29.27-.74 0-1.02z" fill="#fff"/></svg></span> Login
                                </a>
                              </li>
                              <li class="register-icon">
                                <a href="{{url('register')}}" title="Register">
                                  <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.69 10.46c2.17 0 3.94-1.76 3.94-3.94s-1.76-3.94-3.94-3.94-3.94 1.77-3.94 3.94 1.76 3.94 3.94 3.94zm3.5.87h-1.51a4.75 4.75 0 0 1-1.99.44 4.75 4.75 0 0 1-1.99-.44H6.19c-1.93 0-3.5 1.57-3.5 3.5v.44c0 .72.59 1.31 1.31 1.31h11.38c.72 0 1.31-.59 1.31-1.31v-.44c0-1.93-1.57-3.5-3.5-3.5z" fill="#fff"/></svg></span> Register
                                </a>
                              </li>
                             
                            </ul>
                             @endif
                          </div>

                          {{-- <ul id="menu-main" class="nav navbar-nav">
                            <li class="level">
                              <a class="page-scroll" href="index-2.html">Home</a>
                            </li>
                            <li class="level dropdown"> <span class="opener plus"></span> 
                              <a class="page-scroll" href="#">Categories</a>
                              <div class="megamenu mobile-sub-menu">
                                <div class="megamenu-inner-top">
                                  <ul class="sub-menu-level1">
                                    <li class="dropdown right-side-dropdown">
                                      <a href="#"><span></span>Tours</a><span class="opener plus"></span> 
                                      <div class="megamenu second-sub-menu">
                                        <ul class="sub-menu-level2">
                                          <li>
                                            <a href="index-tour.html"><span></span>Tour Home Page</a>
                                          </li>
                                          <li>
                                            <a href="tour_grid.html"><span></span>Tour grid</a>
                                          </li>
                                          <li>
                                            <a href="tour_list.html"><span></span>Tour List</a>
                                          </li>
                                          <li>
                                            <a href="tour_grid_2.html"><span></span>Tour Grid 2</a>
                                          </li>
                                          <li>
                                            <a href="tour_grid_sticky.html"><span></span>Tour Sticky Sidebar</a>
                                          </li>
                                          <li>
                                            <a href="tour_full_width.html"><span></span>Tour Full Width</a>
                                          </li>
                                          <li>
                                            <a href="tour_detail.html"><span></span>Tour Detail</a>
                                          </li>
                                          <li>
                                            <a href="tour_booking.html"><span></span>Tour booking</a>
                                          </li>
                                        </ul>
                                      </div>
                                    </li>
                                    <li class="dropdown right-side-dropdown">
                                      <a href="#"><span></span>Hotels</a><span class="opener plus"></span> 
                                      <div class="megamenu second-sub-menu">
                                        <ul class="sub-menu-level2">
                                          <li>
                                            <a href="index-hotel.html"><span></span>Hotel Home Page</a>
                                          </li>
                                          <li>
                                            <a href="hotel_grid.html"><span></span>Hotel grid</a>
                                          </li>
                                          <li>
                                            <a href="hotel_list.html"><span></span>Hotel List</a>
                                          </li>
                                          <li>
                                            <a href="hotel_grid_2.html"><span></span>Hotel Grid 2</a>
                                          </li>
                                          <li>
                                            <a href="hotel_grid_sticky.html"><span></span>Hotel Sticky Sidebar</a>
                                          </li>
                                          <li>
                                            <a href="hotel_full_width.html"><span></span>Hotel Full Width</a>
                                          </li>
                                          <li>
                                            <a href="hotel_detail.html"><span></span>Hotel Detail</a>
                                          </li>
                                          <li>
                                            <a href="hotel_booking.html"><span></span>Hotel booking</a>
                                          </li>
                                        </ul>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                            <li class="level dropdown"> <span class="opener plus"></span>
                              <a class="page-scroll" href="#">About</a>
                              <div class="megamenu mobile-sub-menu">
                                <div class="megamenu-inner-top">
                                  <ul class="sub-menu-level1">
                                    <li>
                                      <a href="about.html"><span></span>About</a>
                                    </li>
                                    <li>
                                      <a href="about_2.html"><span></span>About 2</a>
                                    </li>
                                    <li>
                                      <a href="about_3.html"><span></span>About 3</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                            <li class="level dropdown"> <span class="opener plus"></span> 
                              <a class="page-scroll" href="#">Gallery</a>
                              <div class="megamenu mobile-sub-menu">
                                <div class="megamenu-inner-top">
                                  <ul class="sub-menu-level1">
                                    <li>
                                      <a href="gallery.html"><span></span>Gallery Grid</a>
                                    </li>
                                    <li>
                                      <a href="gallery_grid_tab.html"><span></span>Gallery Grid Tab</a>
                                    </li>
                                    <li>
                                      <a href="gallery_masonry.html"><span></span>gallery Masonry</a>
                                    </li>
                                    <li>
                                      <a href="gallery_masonry_tab.html"><span></span>gallery Masonry Tab</a>
                                    </li>
                                    <li>
                                      <a href="gallery_no_spacing.html"><span></span>gallery No Spacing</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                            <li class="level dropdown"> <span class="opener plus"></span> 
                              <a class="page-scroll" href="#">Services</a>
                              <div class="megamenu mobile-sub-menu">
                                <div class="megamenu-inner-top">
                                  <ul class="sub-menu-level1">
                                    <li>
                                      <a href="services.html"><span></span>Services</a>
                                    </li>
                                    <li>
                                      <a href="services_2.html"><span></span>Services 2</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                            <li class="level dropdown"> <span class="opener plus"></span> 
                              <a class="page-scroll" href="javascript:void(0)">Page</a>
                              <div class="megamenu mobile-sub-menu">
                                <div class="megamenu-inner-top">
                                  <ul class="sub-menu-level1">
                                    <li>
                                      <a href="contact.html"><span></span>Contact</a>
                                    </li>
                                    <li class="dropdown">
                                      <a href="#"><span></span>Blog</a><span class="opener plus"></span> 
                                      <div class="megamenu second-sub-menu">
                                        <ul class="sub-menu-level2">
                                          <li>
                                            <a href="blog.html"><span></span>Blog</a>
                                          </li>
                                          <li>
                                            <a href="blog_full_width.html"><span></span>Blog Full Width</a>
                                          </li>
                                          <li>
                                            <a href="blog_sticky.html"><span></span>Blog Sticky Sidebar</a>
                                          </li>
                                          <li>
                                            <a href="single_blog.html"><span></span>Single Blog</a>
                                          </li>
                                          <li>
                                            <a href="single_blog_sticky.html"><span></span>Single Blog Sticky</a>
                                          </li>
                                        </ul>
                                      </div>
                                    </li>
                                    
                                    <li>
                                      <a href="login.html"><span></span>Login</a>
                                    </li>
                                    <li>
                                      <a href="register.html"><span></span>Register</a>
                                    </li>
                                    <li>
                                      <a href="password_recover.html"><span></span>recover password</a>
                                    </li>
                                    <li>
                                      <a href="404_error.html"><span></span>404 Error</a>
                                    </li>
                                    <li>
                                      <a href="coming_soon.html"><span></span>Coming Soon</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                          </ul> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="header-middle-right">
                    <div class="header-contact-info d-none d-lg-block">
                      <span><i class="fas fa-phone-alt"></i></span>
                      <h3>+91 9188328575</h3>
                      <p class="m-0">Toll Free & 24/7 Available</p>
                    </div>
                    <div class="right-side header-right-link">
                      <ul>
                        <li class="side-toggle">
                          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><i class="fas fa-bars"></i></button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- HEADER END -->  
      