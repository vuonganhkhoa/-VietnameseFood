@extends('admin.layout.master')
@section('title', 'Admin - Cập nhật người quản trị')
@section('content')

	<section id="main-content">
          <section class="wrapper">
            <div class="panel panel-body">
              <section class="content">
                  <div class="panel panel-default">
                      <div class="panel-heading"><b>Cập nhật người quản trị</b>
                      </div>
                      <div class="panel-body">
                        
                        <div class="col-md-8">  
                        @if(count($errors) > 0)                       
                            <div class="alert alert-danger">@foreach($errors->all() as $err){{$err}}<br>@endforeach</div>
                        @endif

                     	<form method="POST" action="admin/quantri/sua/{{ $user->id }}" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tên đăng nhập</label>
                                                    <input type="text" class="form-control" name="Username" value="{{ $user->username }}">
                                                </div>
                                            </div>   
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Họ tên</label>
                                                    <input type="text" class="form-control" name="HoTen" value="{{ $user->fullname }}">
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
                                                    <input type="text" class="form-control" name="Email" value="{{ $user->email }}">
                                                </div>
                                            </div> 
                                        </div>
										
                                        <div class="row">
                                        	<div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Giới tính</label><br>
                                                    <label class=""><input type="radio" name="GioiTinh" value=" Nam" @if($user->gender == 'Nam') {{ 'checked' }} @endif> Nam</label>
                                                    <label class=""><input type="radio" name="GioiTinh" value=" Nữ" @if($user->gender == 'Nữ') {{ 'checked' }} @endif> Nữ</label>
                                                </div>
                                            </div> 
                                        </div>

                                        <div class="row">
                                        	<div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Địa chỉ</label><br>
                                                    <input type="text" class="form-control" name="DiaChi" value="{{ $user->address }}">
                                                </div>
                                            </div> 
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Ngày sinh</label>
                                                    <input type="date" class="form-control date" placeholder="Ngày sinh"  name="NgaySinh" value="{{ $user->birthdate }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Điện thoại</label>
                                                    <input type="text" value="{{ $user->phone }}" class="form-control"  name="DienThoai" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
  
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Quyền</label>
                                                    <input type="text" value="{{ $user->role }}" class="form-control" name="Quyen">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                        	<div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Hình đại diện</label><br>
                                                    <input type="file" class="form-control" name="HinhDaiDien">
                                                    <img src="adminAssets/img/photos/{{ $user->image }}" alt="">
                                                </div>
                                            </div> 
                                        </div>

                                        
                                        <button type="submit" class="btn btn-danger pull-right">Cập nhật</button>
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