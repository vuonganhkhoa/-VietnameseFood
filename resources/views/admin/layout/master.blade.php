<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/flatlab/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Aug 2015 03:42:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <link rel="shortcut icon" href="adminAssets/img/favicon.html">

    <title>@yield('title')</title>

     <link href="adminAssets/css/bootstrap.min.css" rel="stylesheet">
    <link href="adminAssets/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="adminAssets/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="adminAssets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="adminAssets/css/owl.carousel.css" type="text/css">

      <!--right slidebar-->
      <link href="adminAssets/css/slidebars.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="adminAssets/css/style.css" rel="stylesheet">
    <link href="adminAssets/css/style-responsive.css" rel="stylesheet" />



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="adminAssets/adminAssets/js/html5shiv.js"></script>
      <script src="adminAssets/adminAssets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!--header start-->
      @include('admin.layout.header')
      <!--header end-->
      <!--sidebar start-->
      @include('admin.layout.sidebar')
      <!--sidebar end-->
      <!--main content start-->
      @yield('content')
      <!--main content end-->
      <!--footer start-->
      @include('admin.layout.footer')
      <!--footer end-->
  </section>

    <script src="adminAssets/js/jquery.js"></script>
    <script src="adminAssets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="adminAssets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="adminAssets/js/jquery.scrollTo.min.js"></script>
    <script src="adminAssets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="adminAssets/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="adminAssets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="adminAssets/js/owl.carousel.js" ></script>
    <script src="adminAssets/js/jquery.customSelect.min.js" ></script>
    <script src="adminAssets/js/respond.min.js" ></script>

    <!--right slidebar-->
    <script src="adminAssets/js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="adminAssets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="adminAssets/js/sparkline-chart.js"></script>
    <script src="adminAssets/js/easy-pie-chart.js"></script>
    <script src="adminAssets/js/count.js"></script>
    @yield('script')

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>

<!-- Mirrored from thevectorlab.net/flatlab/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Aug 2015 03:43:32 GMT -->
</html>
