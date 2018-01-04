@extends ('res.layout.master')
@section ('title', 'Chi tiết món ăn')
@section ('style')
<style type="text/css" media="screen">
	h2, h3, h4{
		text-align: left;
	}
	.desc-text h1{
		font-size: 50px;
		width: 100%;
		border-width: 0px
	}		
	.desc-text p{
		font-size: 22px;
		text-align: left;
		text-align: justify;
	}
	.nguyenlieu{
		margin-left: 130px
	}
</style>
@endsection
@section ('content')

<section class="description_content chitiet">
	<div class="container"> 
		<div class="col-md-6">
			<h1>{{ $food->name }}</h1>
			<div style="margin-top: 50px"></div>
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
<section class="description_content chitiet">
            <div class="bread background_content" style="background-image: url('resAssets/images/pricing.jpg') !important;">
                <h1 >Chi tiết món ăn</h1>
            </div>
            <div class="container"> 
                <div class="col-md-12">
                	<div class="col-md-2"></div>
                	<div class="col-md-8">
	                    <div style="margin-top: 20px"></div>
	                    <div class="desc-text">{!! $food->detail !!}</div>
                	</div>
                    
                </div>
            </div>
        </section>

        <div style="margin-bottom: 50px"></div>

@endsection
@section ('script')
<script type="text/javascript">
	$(document).ready(function(){
		$(this).scrollTop(550);
	});
</script>
@endsection