    <div id="sidebar" class="col-xl-3 col-lg-4 mb-md-40 p-0 static-sidebar">
                <div class="sidebar__inner">
                  <div class="sidebar-block sidebar-block-1 mt-md-30">
                    <div class="box-shadow radius-5px p-25 p-xs-15">
                       <div class="sidebar-box sidebar-item sidebar-item-wide "> <span class="opener plus"></span>
                       <div class="sidebar-contant pt-3">
                      <div class="item-user"> 
                        <div class="profile-details text-center"> 
                          <div class="profile-pic mb-0 mx-5"> 
                            <img src="images/boy.png" class="rounded-circle" style="height: 100px;"> 
                          </div> 
                        </div> 
                        <div class="text-center mt-2 product-filter-desc"> 
                          <a href="#" class="text-center">
                            <h5 class="mt-0 mb-1">{{ auth()->user()->name }}</h5>
                          </a> 
                        </div> 
                      </div>
                    </div>
                      <div class="sidebar-box listing-archive"> <span class="opener plus"></span>
                    <div class="sidebar-title">
                    </div>
                    <div class="sidebar-contant pt-3">  
                      <ul>
                        <li><a href="{{ route('dashboard') }}"><i class="fas fa-home"></i> Dashboard</a></li>
                        <li><a href="{{ route('hotel_booking') }}"><i class="fas fa-edit"></i> Add Rooms</a></li>
                        <li><a href="{{ route('hotel_report') }}"><i class="fas fa-paste"></i> Rooms Reports</a></li>
                        <li><a href="{{ route('hotel_reset') }}"><i class="fas fa-paste"></i>Booked Rooms Reports</a></li>
                        <li class="login-icon content"><a href="{{ url('logout') }}" ><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                     
                     
                    </div>
                  </div>
                </div>
              </div>
             </div>