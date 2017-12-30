<header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="{{route('welcome')}}" class="logo">VN<span>FOOD</span></a>
            <!--logo end-->

            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="adminAssets/img/photos/user3.png" height="40px">
                            <span class="username">Vuong Anh Khoa</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout" style="width: 160px !important">
                            <div class="log-arrow-up"></div>
                            <li><a href="login.html"><i class="fa fa-key"></i> Đăng xuất</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
    </header>