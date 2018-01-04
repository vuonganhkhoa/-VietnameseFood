@extends ('res.layout.master')
@section ('title', 'WorldFOOD')
@section ('content')

        <!-- ============ About Us ============= -->

        <section id="story" class="description_content">
            <div class="text-content container">
                <div class="col-md-6">
                    <h1>Giới thiệu</h1>
                    <div class="fa fa-cutlery fa-2x"></div>
                    <p class="desc-text">Ẩm thực là chiếc gương soi chân thực cho nền văn hóa của mỗi quốc gia. Ẩm thực cũng là một cách để mỗi đất nước quảng bá nền văn hóa của họ. Mỗi nền văn hóa ẩm thực của mỗi quốc gia đều lớn lên và đi cùng với mỗi bước phát triển của đất nước đó, là một khía cạnh để đánh giá quốc gia đó có được một nền văn hóa phát triển rực rỡ, có sát cánh với nền ẩm thực đa dạng, phong phú, muôn hình, muôn vẻ của thế giới đang phát triển từng ngày. Bên cạnh những món ăn hiện đại là cả một kho tàng phong phú về những món ăn cổ truyền hấp dẫn muôn vàn thế hệ.</p>
                </div>
                <div class="col-md-6">
                    <div class="img-section">
                       <img src="resAssets/images/kabob.jpg" width="250" height="220">
                       <img src="resAssets/images/limes.jpg" width="250" height="220">
                       <div class="img-section-space"></div>
                       <img src="resAssets/images/radish.jpg"  width="250" height="220">
                       <img src="resAssets/images/corn.jpg"  width="250" height="220">
                   </div>
                </div>
            </div>
        </section>

       <!-- ============ Pricing  ============= -->

        <section id ="pricing" class="description_content">
            <section id="portfolio" class="portfolio">
                <div class="pricing background_content">
                    <h1>Thể giới ẩm thực</h1>
                </div>

                <div class="text-content container">
                    <div class="row">
                        <div class="main_mix_content text-center sections">
                            <div class="main_mix_menu">
                                <ul>
                                    <li class="navactive active btn btn-primary filter" data-filter=".cat1">MÓN SÚP</li>
                                    <li class="btn btn-primary filter" data-filter=".cat2">MÓN THỊT</li>
                                    <li class="btn btn-primary filter" data-filter=".cat3">MÓN XÀO</li> 
                                    <li class="btn btn-primary filter" data-filter=".cat4">MÓN CƠM</li>
                                    <li class="btn btn-primary filter" data-filter=".cat5">MÓN TRÁNG MIỆNG</li>
                                    <li class="btn btn-primary filter" data-filter=".cat6">MÓN NỔI BẬT</li>
                                </ul>
                            </div>

                            <div id="mixcontent" class="mixcontent">
                                
                                @foreach ($foods_soup as $food)
                                <div class="col-md-4  mix cat1 no-padding">
                                    <div class="single_mixi_portfolio">
                                        <img src="adminAssets/img/hinh_mon_an/{{ $food->image }}" />
                                        <div class="mixi_portfolio_overlay">
                                            <div class="overflow_hover_text">
                                                <h2 style="font-size: 50px"><a href="chi-tiet-mon-an/{{ $food->PageUrl->url }}">{{ $food->name }}</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                @foreach ($foods_meat as $food)
                                <div class="col-md-4 mix cat2 no-padding">
                                    <div class="single_mixi_portfolio">
                                        <img src="adminAssets/img/hinh_mon_an/{{ $food->image }}" />
                                        <div class="mixi_portfolio_overlay">
                                            <div class="overflow_hover_text">
                                                <h2 style="font-size: 50px"><a href="chi-tiet-mon-an/{{ $food->PageUrl->url }}">{{ $food->name }}</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                @foreach ($foods_xao as $food)
                                <div class="col-md-4 mix cat3 no-padding">
                                    <div class="single_mixi_portfolio">
                                        <img src="adminAssets/img/hinh_mon_an/{{ $food->image }}" />
                                        <div class="mixi_portfolio_overlay">
                                            <div class="overflow_hover_text">
                                                <h2 style="font-size: 50px"><a href="chi-tiet-mon-an/{{ $food->PageUrl->url }}">{{ $food->name }}</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                @foreach ($foods_rice as $food)
                                <div class="col-md-4 mix cat4 no-padding">
                                    <div class="single_mixi_portfolio">
                                        <img src="adminAssets/img/hinh_mon_an/{{ $food->image }}" />
                                        <div class="mixi_portfolio_overlay">
                                            <div class="overflow_hover_text">
                                                <h2 style="font-size: 50px"><a href="chi-tiet-mon-an/{{ $food->PageUrl->url }}">{{ $food->name }}</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                @foreach ($foods_desert as $food)
                                <div class="col-md-4 mix cat5 no-padding">
                                    <div class="single_mixi_portfolio">
                                        <img src="adminAssets/img/hinh_mon_an/{{ $food->image }}" />
                                        <div class="mixi_portfolio_overlay">
                                            <div class="overflow_hover_text">
                                                <h2 style="font-size: 50px"><a href="chi-tiet-mon-an/{{ $food->PageUrl->url }}">{{ $food->name }}</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                @foreach ($foods_top as $food)
                                <div class="col-md-4 mix cat6 no-padding">
                                    <div class="single_mixi_portfolio">
                                        <img src="adminAssets/img/hinh_mon_an/{{ $food->image }}" />
                                        <div class="mixi_portfolio_overlay">
                                            <div class="overflow_hover_text">
                                               <h2 style="font-size: 50px"><a href="chi-tiet-mon-an/{{ $food->PageUrl->url }}">{{ $food->name }}</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                <div class="portfolio_btn_area">
                                    <a href="{{ route('DanhSachTatCaMonAn') }}" class="btn btn-md">Xem thêm</a>
                                </div>

                                <div class="gap"></div>
                            </div>
                        </div>                     
                    </div>
                </div>
        </section>
        </section>



       <!-- ============ Our Bread  ============= -->

        <section id="bread" class=" description_content ">
            <div  class="bread background_content">
                <h1>Ẩm thực thế giới</h1>
            </div>
            <div class="text-content container"> 
                <div class="col-md-6">
                    <h1>Ẩm thực Việt</h1>
                    <div class="icon-beer fa-2x"></div>
                    <p class="desc-text">Ẩm thực người Việt được biết đến với những nét đặc trưng như: tính hòa đồng, đa dạng, ít mỡ; đậm đà hương vị với sự kết hợp nhiều loại gia giảm để tăng mùi vị, sức hấp dẫn trong các món ăn. Việc ăn thành mâm và sử dụng đũa và đặc biệt trong bữa ăn không thể thiếu cơm là tập quán chung của cả dân tộc Việt Nam.</p>
                </div>
                <div class="col-md-6">
                    <ul class="image_box_story2">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="resAssets/images/vn1.jpg"  alt="..." style="height: 320px !important">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="resAssets/images/vn2.jpg" alt="..." style="height: 320px !important">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="resAssets/images/vn3.JPG" alt="..." style="height: 320px !important">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ============ Our Beer  ============= -->

        <section id ="beer" class="description_content ">
                <div class="text-content container"> 
                    <div class="col-md-6">
                    <ul class="image_box_story2">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="resAssets/images/nhat1.jpg"  style="height: 360px !important" alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="resAssets/images/nhat2.jpg" style="height: 360px !important" alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="resAssets/images/nhat3.JPG" style="height: 360px !important" alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
                    <br>
                    <div class="col-md-6 ">
                        <h1>Ẩm thực Nhật</h1>
                        <div class="icon-cup-of-tea fa-2x"></div>
                        <p class="desc-text">Ẩm thực Nhật Bản chú trọng đến hương vị tươi ngon của món ăn, vì vậy hương vị món ăn của người Nhật thường thanh tao, nhẹ nhàng và phù hợp với thiên nhiên từng mùa. Là 1 hòn đảo được bao bọc quanh là biển, các món ăn của họ phần lớn là hải sản và rong biển bổ dưỡng, và không thể không kể đến món Sushi được rất nhiều người yêu thích.</p>
                    </div>
                </div>
        </section>
 
        <!-- ============ Featured Dish  ============= -->

        <section id="featured" class="description_content ">
            <div class="text-content container"> 
                <div class="col-md-6">
                    <h1>Ẩm thực Ý</h1>
                    <div class="icon-cheese fa-2x"></div>
                    <p class="desc-text">Quốc gia nổi tiếng với những món mì Pasta, cà phê Capuchino hay Pizza… Nói đến ẩm thực Ý, bạn sẽ nghĩ ngay đến sự tinh tế trong chế biến các món ăn… không chỉ ngon mà còn đẹp mắt. Họ dễ dàng tạo ra cả một bàn tiệc cho mình chỉ với mỳ, một ít dầu oliu hay thịt muối. Các món ăn của Ý vì vậy từ lâu đã trở thành món ăn của mọi người, đặc biệt được các em nhỏ rất yêu thích.</p>
                </div>
                <div class="col-md-6">
                    <ul class="image_box_story2">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="resAssets/images/y1.jpg"  alt="..." style="height: 360px !important">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="resAssets/images/y2.jpg" alt="..." style="height: 360px !important">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="resAssets/images/y3.JPG" alt="..." style="height: 360px !important">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </section>
		
		<section id="portfolio" class="portfolio">
        <div class="portfolio_btn_area">
            <a href="{{ route('DanhSachTatCaCacNuoc') }}" class="btn btn-md">Xem thêm</a>
        </div>
        <div class="gap"></div>
    	</section>

        <!-- ============ Social Section  ============= -->
      
        <section class="social_connect">
            <div class="text-content container"> 
                <div class="col-md-6">
                    <span class="social_heading">Theo dõi chúng tôi</span>
                    <ul class="social_icons">
                        <li><a class="icon-twitter color_animation" href="./" target="_blank"></a></li>
                        <li><a class="icon-github color_animation" href="https://github.com/vuonganhkhoa" target="_blank"></a></li>
                        <li><a class="fa fa-facebook color_animation" href="https://www.facebook.com/anhkhoa.vuong.71" target="_blank"></a></li>
                        <li><a class="icon-mail color_animation" href="mailto:vuonganhkhoa96@gmail.com"></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <span class="social_heading">Điện thoại</span>
                    <span class="social_info"><a class="color_animation" href="tel:0906482639">&nbsp; &nbsp;0906482639</a></span>
                </div>
            </div>
        </section>

        <!-- ============ Contact Section  ============= -->

        <section id="contact">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15678.080780624374!2d106.6911!3d10.771413!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb606461dc7627921!2zVHJ1bmcgVMOibSDEkMOgbyBU4bqhbyBUaW4gSOG7jWMgS2hvYSBQaOG6oW0!5e0!3m2!1svi!2s!4v1514896311433" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner contact">
                            <!-- Form Area -->
                            <div class="contact-form">
                                <!-- Form -->
                                <form id="contact-us" method="post" action="contact.php">
                                    <!-- Left Inputs -->
                                    <div class="col-md-6 ">
                                        <!-- Name -->
                                        <input type="text" name="HoTen" id="name" required="required" class="form" placeholder="Tên của bạn" />
                                        <!-- Email -->
                                        <input type="email" name="Email" id="email" required="required" class="form" placeholder="Địa chỉ Email" />
                                        <!-- Subject -->
                                        <input type="text" name="TuaDe" id="subject" required="required" class="form" placeholder="Tựa đề" />
                                    </div><!-- End Left Inputs -->
                                    <!-- Right Inputs -->
                                    <div class="col-md-6">
                                        <!-- Message -->
                                        <textarea name="NoiDung" id="message" class="form textarea"  placeholder="Nội dung"></textarea>
                                    </div><!-- End Right Inputs -->
                                    <!-- Bottom Submit -->
                                    <div class="relative fullwidth col-xs-12">
                                        <!-- Send Button -->
                                        <button type="submit" id="submit" name="submit" class="form-btn">Gửi</button> 
                                    </div><!-- End Bottom Submit -->
                                    <!-- Clear -->
                                    <div class="clear"></div>
                                </form>
                            </div><!-- End Contact Form Area -->
                        </div><!-- End Inner -->
                    </div>
                </div>
            </div>
        </section>

@endsection