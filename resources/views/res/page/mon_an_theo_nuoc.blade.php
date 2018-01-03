@extends ('res.layout.master')
@section ('title', 'Danh sách các nước')
@section ('content')

<section id="featured" class="description_content ">
	<div class="text-content container"> 
		<div class="col-md-6">
			<h1>{{ $country->name }}</h1>
			<div style="margin-top: 50px"></div>
			<p class="desc-text">{{ $country->description }}</p>
		</div>
		<div class="col-md-6">
			<ul class="image_box_story2">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active">
							<img src="adminAssets/img/hinh_mon_an_cac_nuoc/{{ $country->id }}.jpg"  alt="..." style="height: 320px !important">
							<div class="carousel-caption">

							</div>
						</div>
					</div>
				</div>
			</ul>
		</div>
	</div>
</section>
<section class="description_content">
	<div class="text-content container">
		<div class="col-md-12">
			<h1>Các món ăn</h1>
			<div class="fa fa-cutlery fa-2x"></div>
			<div id="mixcontent" class="mixcontent">

				@foreach ($foods as $food)
				<div class="col-md-4 no-padding">
					<div class="single_mixi_portfolio">
						<img src="adminAssets/img/hinh_mon_an/{{ $food->image }}" />
						<div class="mixi_portfolio_overlay">
							<div class="overflow_hover_text">
								<h2 style="font-size: 50px"><a href="chi-tiet-mon-an/{{ $food->id }}">{{ $food->name }}</a></h2>
							</div>
						</div>
					</div>
				</div>
				@endforeach

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