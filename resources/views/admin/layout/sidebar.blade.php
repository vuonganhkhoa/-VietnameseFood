
<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="{{ route('welcome') }}">
                          <i class="fa fa-home"></i>
                          <span>Thông tin</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cutlery"></i>
                          <span>Các món ăn</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ route('themmonan') }}">Thêm món ăn</a></li>
                          <li><a  href="{{ route('danhsachmonan') }}">Danh sách món ăn</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Loại món ăn</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ route('themloaimonan') }}">Thêm loại món</a></li>
                          <li><a  href="{{ route('danhsachloaimonan') }}">Danh sách loại</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-picture-o"></i>
                          <span>Hình món ăn</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ route('themhinh') }}">Thêm hình món ăn</a></li>
                          <li><a  href="{{ route('danhsachhinh') }}">Danh sách hình</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="admin/binhluan" >
                          <i class="fa fa-comments-o"></i>
                          <span>Xem bình luận</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cog"></i>
                          <span>Quản lý</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ route('themnguoiquantri') }}">Thêm người quản trị</a></li>
                          <li><a  href="{{ route('danhsachnguoiquantri') }}">Danh sách quản trị</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
