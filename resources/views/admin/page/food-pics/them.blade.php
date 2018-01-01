@extends('admin.layout.master')
@section('title', 'Admin - Thêm hình món ăn')
@section('content')

	<section id="main-content">
          <section class="wrapper">
            <div class="panel panel-body">
              <section class="content">
                  <div class="panel panel-default">
                      <div class="panel-heading"><b>Thêm hình món ăn</b>
                      </div>
                      <div class="panel-body">
                        
                        <div class="col-md-8">  
                        @if(count($errors) > 0)                       
                            <div class="alert alert-danger">@foreach($errors->all() as $err){{$err}}<br>@endforeach</div>
                        @endif
                     	<form method="POST" action="admin/food-pics/them" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tên món ăn</label>
                                                    <select name="TenMonAn" class="form-control">
                                                    	@foreach ($food as $f)
                                                    	<option value="{{ $f->id }}">{{ $f->name }}</option>
                                                    	@endforeach
                                                    </select>
                                                </div>
                                            </div>   
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                  <label class="control-label">Hình ảnh</label>
                                                  <input type="file" multiple name="HinhMonAn[]" class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <button type="submit" class="btn btn-danger pull-right">Thêm</button>
                                        
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