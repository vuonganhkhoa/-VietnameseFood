
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/flatlab/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Aug 2015 03:42:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Đăng nhập</title>

    <!-- Bootstrap core CSS -->
    <link href="adminassets/css/bootstrap.min.css" rel="stylesheet">
    <link href="adminassets/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="adminassets/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="adminassets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="adminassets/css/owl.carousel.css" type="text/css">

    <link href="adminassets/css/style-responsive.css" rel="stylesheet" />
    <link href="adminassets/css/login-form.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body>
    <div class="container">
        <div class="card card-container">
           <!--  <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post" action="{{ route('login') }}">
            {{csrf_field()}}
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name="email" class="form-control" placeholder="Nhập email hoặc username" required autofocus>
                <input type="password" name="password" class="form-control" placeholder="Nhập password" required>
                
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login">Đăng nhập</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Quên mật khẩu?
            </a>
            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
        </div><!-- /card-container -->
        
    </div><!-- /container -->
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="adminassets/js/jquery.js"></script>
    <script src="adminassets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('div.alert').delay(5000).slideUp();
    </script>
    
  </body>

<!-- Mirrored from thevectorlab.net/flatlab/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Aug 2015 03:43:32 GMT -->
</html>
