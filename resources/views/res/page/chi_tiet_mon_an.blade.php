@extends ('res.layout.master')
@section ('title', 'Chi tiết món ăn')
@section ('content')

<section class="description_content">
	<div class="container"> 
		<div class="col-md-6">
			<h1>{{ $food->name }}</h1>
			<div class="desc-text nguyenlieu">{!! $food->summary !!}</div>
		</div>
		<div class="col-md-6">
			<ul class="image_box_story2">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active">
							<img src="adminAssets/img/hinh_mon_an/{{ $food->image }}"  alt="..." style="height: 320px !important">
						</div>
					</div>
				</div>
			</ul>
		</div>
	</div>
</section>

<section class="description_content">
	<div class="bread background_content" style="background-image: url('resAssets/images/pricing.jpg') !important;">
		<h1 >Chi tiết món ăn</h1>
	</div>
	<div class="container"> 
		<div class="col-md-12">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="desc-text chitiet">{!! $food->detail !!}</div>
			</div>

		</div>
	</div>
</section>

<section class="description_content binhluan">
	<div class="container"> 
		<div class="col-md-12">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h2>Bình luận ({{ $count }})</h2>
				@if (isset($comment))
				@foreach ($comment as $com)
				<div class="row">
					<div class="col-md-12">
						<div class="binhluan">
							<div class="panel panel-default">
								<div class="panel-heading">
								<strong>{{ $com->name }}</strong> <span class="text-muted">{{ date('d/m/Y', strtotime($com->date)) }}</span>
								</div>
								<div class="panel-body">
								{{ $com->comment }}
								</div><!-- /panel-body -->
							</div>
						</div>		
					</div>
				</div>
				@endforeach
				@endif
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form action="binhluan/{{ $food->id }}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<h2></h2>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<input type="text" class="form-control input-md" placeholder="Họ tên" name="TenNguoiBinhLuan" required>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<textarea class="form-control" placeholder="Bạn nghĩ gì về món ăn này?" rows="5" name="NoiDungBinhLuan" required></textarea>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-default ">Đăng</button>
				</form>
			</div>
		</div>
	</div>
</section>

@endsection
@section ('script')
<script type="text/javascript">
	$(document).ready(function(){
		$(this).scrollTop(550);
	});
</script>
@endsection