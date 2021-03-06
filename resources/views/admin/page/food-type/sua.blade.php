@extends('admin.layout.master')
@section('title', 'Admin - Cập nhật loại món ăn')
@section('content')

	<section id="main-content">
          <section class="wrapper">
            <div class="panel panel-body">
              <section class="content">
                  <div class="panel panel-default">
                      <div class="panel-heading"><b>Cập nhật loại món ăn</b>
                      </div>
                      <div class="panel-body">
                        
                        <div class="col-md-8">  
                        @if(count($errors) > 0)                       
                            <div class="alert alert-danger">@foreach($errors->all() as $err){{$err}}<br>@endforeach</div>
                        @endif

                     	<form method="POST" action="admin/food-type/sua/{{ $foodType->id }}" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tên loại món ăn</label>
                                                    <input type="text" class="form-control" name="TenLoaiMonAn" value="{{ $foodType->name }}">
                                                </div>
                                            </div>   
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                    <label class="control-label">Mô tả</label>
                                                    <textarea id="demo" class="form-control " rows="8" name="MoTaLoaiMonAn">{{ $foodType->description }}</textarea>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                  <label class="control-label">Hình ảnh</label>
                                                  <input type="file" name="HinhLoaiMonAn" class="form-control" />
                                                  <img src="adminAssets/img/hinh_loai_mon_an/{{ $foodType->image }}" height="150px">
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <button type="submit" class="btn btn-danger pull-right">Cập nhật</button>
                                        
                        </form>
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
	$('.alert').delay(5000).slideUp()
</script>

@endsection