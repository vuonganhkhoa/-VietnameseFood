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
                        <form method="POST" action="admin/food-country/sua/{{ $foodCountry->id }}" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tên nước</label>
                                                    <input type="text" class="form-control" name="TenNuoc" value="{{ $foodCountry->name }}">
                                                </div>
                                            </div>   
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                    <label class="control-label">Mô tả</label>
                                                    <textarea id="demo" class="form-control " rows="8" name="MoTaMonAnNuoc" id="MoTaLoaiMonAn">{{ $foodCountry->description }}</textarea>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                  <label class="control-label">Hình ảnh</label>
                                                  <input type="file" name="HinhMonAnCacNuoc" class="form-control" />
                                                  <img src="adminAssets/img/hinh_mon_an_cac_nuoc/{{ $foodCountry->image }}" height="200px" ">
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <button type="submit" class="btn btn-danger pull-right">Cập nhật</button>
                                        
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
  $('.alert').delay(5000).slideUp()
</script>

@endsection