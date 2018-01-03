@extends ('res.layout.master')
@section ('title', 'Danh sách các món ăn')
@section ('content')

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

				{{ $foods->links() }}

			</div>
		</div>
	</section>

@endsection
@section ('script')
<script type="text/javascript">
	$(document).ready(function(){
    $(this).scrollTop(780);
});
</script>
@endsection