
    <!-- Sidebar -->
    <div class="sidebar sidebar-style-2">     
      <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
          <div class="user">
            <div class="avatar-sm float-left mr-2">
              @if(file_exists(Auth::guard('admin')->user()->profile_picture))
                  <img src="{{url(Auth::guard('admin')->user()->profile_picture)}}" alt="user" class="avatar-img rounded-circle" width="31">
              @else
                  <img src="{{url('public/admin//img/profile.jpg')}}" alt="user" class="avatar-img rounded-circle" width="31">
              @endif
            </div>
            <div class="info">
              <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                <span>
                  {{Auth::guard('admin')->user()->name}}
                  <span class="user-level">Administrator</span>
                  <span class="caret"></span>
                </span>
              </a>
              <div class="clearfix"></div>

              <div class="collapse in" id="collapseExample">
                <ul class="nav">
                 
                  <li>
                    <a href="{{ route('admin.profile') }}">
                      <span class="link-collapse">Edit Profile</span>
                    </a>
                  </li>
                  <li>
                    <a href="#settings">
                      <span class="link-collapse">Settings</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <ul class="nav nav-primary">

         
            <li class="nav-item active">
              <a  href="{{ route('admin.dashboard') }}">
                <i class="fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
                <!-- <span class="caret"></span> -->
              </a>
            </li>
      <!--  <li class="nav-item">
              <a data-toggle="collapse" href="#base">
                <i class="fas fa-user"></i>
                <p>Manage User</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="base">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="view-user.html">
                      <span class="sub-item">View Users</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li> -->
           
          </ul>
        </div>
      </div>
    </div>
    <!-- End Sidebar -->