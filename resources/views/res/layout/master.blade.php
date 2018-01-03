<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>@yield ('title')</title>
        <base href="{{ asset('') }}">
        <link rel="stylesheet" href="resAssets/css/normalize.css">
        <link rel="stylesheet" href="resAssets/css/main.css" media="screen" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="resAssets/css/bootstrap.css">
        <link rel="stylesheet" href="resAssets/css/style-portfolio.css">
        <link rel="stylesheet" href="resAssets/css/picto-foundry-food.css" />
        <link rel="stylesheet" href="resAssets/css/jquery-ui.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="resAssets/css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="favicon-1.ico" type="image/x-icon">

        <!--For Plugins external css-->
        <link rel="stylesheet" href="resAssets/assets/css/teamslide.css" />
        <link rel="stylesheet" href="resAssets/assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="resAssets/assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="resAssets/assets/css/responsive.css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">


        <script src="resAssets/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    </head>

    <body>

        @include ('res.layout.header')

		@yield ('content')

        @include ('res.layout.footer')

        
        <script type="text/javascript" src="resAssets/js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="resAssets/js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="resAssets/js/jquery-1.10.2.js"></script>     
        <script type="text/javascript" src="resAssets/js/jquery.mixitup.min.js" ></script>
        <!-- <script type="text/javascript" src="resAssets/js/main.js" ></script> -->

        <script src="resAssets/assets/js/jquery.easypiechart.min.js"></script>
        <script src="resAssets/assets/js/jquery.mixitup.min.js"></script>
        <script src="resAssets/assets/js/jquery.easing.1.3.js"></script>
        <script src="resAssets/assets/css/skills/inview.min.js"></script>
        <script src="resAssets/assets/css/skills/progressbar.js"></script>
        <script src="resAssets/assets/css/skills/main.js"></script>

        <script src="resAssets/assets/js/plugins.js"></script>
        <script src="resAssets/assets/js/main.js"></script>
        
        @yield ('script')

    </body>
</html>