<div class="col-md-3 left_col menu_fixed">
        <div class="left_col scroll-view">
          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="/images/profile-photo/{{auth()->user()->photo_id ? auth()->user()->profile_photo(auth()->user()->id) : 'empty.jpg'}}" alt=""class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>{{auth()->user()->first_name}}</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="/adminDashboard"><i class="fas fa-tachometer-alt" style="font-size: 24px;"></i> DashBoard</a>   
                  </li>
                </ul> 
              <h3>Master</h3>
              <ul class="nav side-menu">
                <li><a><i class="fas fa-users-cog" style="font-size: 24px;"></i> User Management<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/users">Users</a></li>
                    <li><a href="/roles">roles</a></li>

                  </ul>
                </li>
                <li><a><i class="fas fa-user-circle"style="font-size: 24px;"></i> Parent Master<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/parents">parent</a></li>
                  </ul>
                </li>
                <li><a><i class="fas fa-school" style="font-size: 24px;"></i> Class Master<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/classes">class</a></li>
                  </ul>
                </li>
                <li><a><i class="fas fa-graduation-cap" style="font-size: 24px;"></i> Student Master<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/students">student</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> MIS/Eloquent<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/information"> Information</a></li>
                    <li><a href="/information1">Profile Information</a></li>
                  </ul>
                </li>
                <li><a><i class="fas fa-envelope" style="font-size: 24px;"></i> Mail<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/mail">Information</a></li>
                  </ul>
                </li>
                <ul class="nav side-menu">
                  <li><a href="/userDashboard"><i class="fa fa-home"></i>User DashBoard</a>   
                  </li>
                </ul> 
              </ul>
            </div>
    </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="fa fa-cogs" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="fa fa-arrows-alt" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="fa fa-lock" aria-hidden="true"></span>
            </a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
              <span class="fas fa-sign-out-alt" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>
