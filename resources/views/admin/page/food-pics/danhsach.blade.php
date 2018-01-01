@extends('admin.layout.master')
@section('title', 'Admin - danh sách hình món ăn')
@section('content')

	<section id="main-content">
          <section class="wrapper">
            <div class="panel panel-body">
              <section class="content">
                  <div class="panel panel-default">

                      <div class="panel-heading"><b>Danh sách hình món ăn</b>
                      </div>
                      <div class="panel-body">

                      	@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
	                  	@endif
	                  	@if(session('error'))
						<div class="alert alert-danger">
							{{ session('error') }}
						</div>
	                  	@endif
                          
                      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>STT</th>
				                <th>Tên món ăn</th>
				                <th>Hình món ăn</th>
				                <th>Xóa</th>
				                <th>Cập nhật</th>
				            </tr>
				        </thead>
				        <tfoot>
				            <tr>
				                <th>STT</th>
				                <th>Tên món ăn</th>
				                <th>Hình món ăn</th>
				                <th>Xóa</th>
				                <th>Cập nhật</th>
				            </tr>
				        </tfoot>
				        <tbody>
							
							<?php $stt = 1; ?>
							@foreach ($pics as $pic)
				            <tr>
				                <td>{{ $stt }}</td>
				                <td width="100px">{{ $pic->food->name }}</td>
				                <td><img src="adminAssets/img/hinh_mon_an/{{ $pic->image }}" height="100px"></td>
				                <td width="80px" style="font-size: 25px" class="text-center"><a onclick="return XacNhanXoa('Bạn có chắc muốn xóa?')" href="admin/food-pics/xoa/{{ $pic->id }}"><i class="fa fa-trash-o fa-fw"></i></a></td>
				                <td width="80px" style="font-size: 25px" class="text-center"><a href="admin/food-pics/sua/{{ $pic->id }}"><i class="fa fa-pencil fa-fw"></i></a></td>
				            </tr>
				            <?php $stt++; ?>
							@endforeach

				        </tbody>
				    </table>

                      </div>
                  </div>
              </section>
            </div>
          </section>
      </section>

@endsection
@section('script')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script>
	
    $(document).ready(function() {
        $('#example').DataTable();
        $('div.alert').delay(5000).slideUp();
    });

    function XacNhanXoa(message){
        	if(window.confirm(message)){
        		return true;
        	}
        	return false;
        }

</script>
@endsection