@extends('admin.layout.master')
@section('title', 'Admin - Cập nhật món ăn')
@section('content')

	<section id="main-content">
          <section class="wrapper">
            <div class="panel panel-body">
              <section class="content">
                  <div class="panel panel-default">
                      <div class="panel-heading"><b>Cập nhật món ăn</b>
                      </div>
                      <div class="panel-body">
                        
                        <div class="col-md-8">  
                        @if(count($errors) > 0)                       
                            <div class="alert alert-danger">@foreach($errors->all() as $err){{$err}}<br>@endforeach</div>
                        @endif

                     	<form method="POST" action="admin/food/sua/{{ $food->id }}" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Chọn nước</label>
                                                    <select class="form-control" name="NuocMonAn" id="NuocMonAn">
                                                      @foreach($foodCountry as $cou)
                                                        <option @if($cou->id == $food->id_country) {{ 'selected' }} @endif value="{{$cou->id}}">{{$cou->name}}</option>
                                                      @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Chọn loại món ăn</label>
                                                    <select class="form-control" name="LoaiMonAn" id="LoaiMonAn">
                                                      @foreach($foodType as $type)
                                                        <option @if($type->id == $food->id_type) {{ 'selected' }} @endif value="{{$type->id}}">{{$type->name}}</option>
                                                      @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tên món ăn</label>
                                                    <input type="text" class="form-control" name="TenMonAn" value="{{ $food->name }}">
                                                </div>
                                            </div>   
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                    <label class="control-label">Nguyên liệu</label>
                                                    <textarea id="demo" class="form-control " rows="8" name="NguyenLieu" id="NguyenLieu">{{ $food->summary }}</textarea>
                                                    <script type="text/javascript">CKEDITOR.replace( 'NguyenLieu' );</script>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                    <label class="control-label">Chi tiết</label>
                                                    <textarea id="demo" class="form-control " rows="8" name="ChiTiet" id="ChiTiet">{{ $food->detail }}</textarea>
                                                    <script type="text/javascript">CKEDITOR.replace( 'ChiTiet' );</script>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                  <label class="control-label">Hình ảnh</label>

                                                  <input type="file" name="HinhMonAn" class="form-control" />
                                                  <img src="adminAssets/img/hinh_mon_an/{{ $food->image }}" height="200px">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Ngày đăng</label>
                                                    <input type="date" class="form-control date" placeholder="Ngày đăng"  name="NgayDang" value="<?= date('Y-m-d') ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Số lượt xem</label>
                                                    <input type="number" value="{{ $food->soluotxem }}" class="form-control"  name="SoLuotXem">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
  
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Giá món ăn</label>
                                                    <input type="text" value="{{ $food->price }}" class="form-control" name="GiaMonAn">
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
        $('div.alert').delay(5000).slideUp();
    </script>
@endsection