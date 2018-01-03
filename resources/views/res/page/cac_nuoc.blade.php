@extends ('res.layout.master')
@section ('title', 'Danh sách các nước')
@section ('content')

<section class="description_content">
	<div class="text-content container">
		<div class="col-md-12">
			<h1>Các nước</h1>
			<div class="fa fa-cutlery fa-2x"></div>
			<div id="mixcontent" class="mixcontent">

				@foreach ($country as $food)
				<div class="col-md-4 no-padding">
					<div class="single_mixi_portfolio">
						<img src="adminAssets/img/hinh_mon_an_cac_nuoc/{{ $food->image }}" />
						<div class="mixi_portfolio_overlay">
							<div class="overflow_hover_text">
								<h2 style="font-size: 50px"><a href="mon-an-theo-nuoc/{{ $food->id }}">{{ $food->name }}</a></h2>
							</div>
						</div>
					</div>
				</div>
				@endforeach

			</div>
		</div>
	</section>

@endsection