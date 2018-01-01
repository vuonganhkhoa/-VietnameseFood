@extends('admin.layout.master')
@section('title', 'Admin - Thêm người quản trị')
@section('content')

	<section id="main-content">
          <section class="wrapper">
            <div class="panel panel-body">
              <section class="content">
                  <div class="panel panel-default">
                      <div class="panel-heading"><b>Thêm người quản trị</b>
                      </div>
                      <div class="panel-body">
                        
                        <div class="col-md-8">  
                        @if(count($errors) > 0)                       
                            <div class="alert alert-danger">@foreach($errors->all() as $err){{$err}}<br>@endforeach</div>
                        @endif

                     	<form method="POST" action="admin/quantri/them" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tên đăng nhập</label>
                                                    <input type="text" class="form-control" name="Username">
                                                </div>
                                            </div>   
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Họ tên</label>
                                                    <input type="text" class="form-control" name="HoTen">
                                                </div>
                                            </div>    
                                        </div>
										
										 <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Mật khẩu</label>
                                                    <input type="password" class="form-control" name="Password">
                                                </div>
                                            </div>   
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nhập lại mật khẩu</label>
                                                    <input type="password" class="form-control" name="PasswordConfirm">
                                                </div>
                                            </div>  
                                        </div>

										<div class="row">
                                            
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email</label><br>
                                                    <input type="text" class="form-control" name="Email">
                                                </div>
                                            </div> 
                                        </div>
										
                                        <div class="row">
                                        	<div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Giới tính</label><br>
                                                    <label class=""><input type="radio" name="GioiTinh" value=" Nam" checked> Nam</label>
                                                    <label class=""><input type="radio" name="GioiTinh" value=" Nữ"> Nữ</label>
                                                </div>
                                            </div> 
                                        </div>

                                        <div class="row">
                                        	<div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Địa chỉ</label><br>
                                                    <input type="text" class="form-control" name="DiaChi">
                                                </div>
                                            </div> 
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Ngày sinh</label>
                                                    <input type="date" class="form-control date" placeholder="Ngày sinh"  name="NgaySinh" value="<?= date('Y-m-d') ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Điện thoại</label>
                                                    <input type="text" value="0" class="form-control"  name="DienThoai">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
  
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Quyền</label>
                                                    <input type="text" value="admin" class="form-control" name="Quyen">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                        	<div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Hình đại diện</label><br>
                                                    <input type="file" class="form-control" name="HinhDaiDien">
                                                </div>
                                            </div> 
                                        </div>

                                        
                                        <button type="submit" class="btn btn-danger pull-right">Thêm</button>
                                        <div class="clearfix"></div>
                        </form>
                        </div>

                        <div class="col-md-4">
						
                        </div>

                      </div>
                  </div>
              </section>
            </div>
          </section>
      </section>

@endsection
@section('script')


<script type="text/javascript">
	$('.alert').delay(10000).slideUp()
</script>

@endsection