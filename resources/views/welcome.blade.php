<!DOCTYPE html>
<html>
<head>
  <title>My portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- include boostrap  -->
<link rel="shortcut icon" href="http://sstatic.net/stackoverflow/img/favicon.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/front.css">
<link href="../css/font/Lato-Thin.woff" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="http://localhost/webdev/public/favicon.ico" />
  <link rel="icon" 
     type="image/png/x-icon" 
     href="http://localhost/webdev/public/favicon.ico">
<!-- end incltude boostrap -->
</head>
<body ng-app="indexng" ng-controller="indexCtrl">
<div id="landing_page">
  <!--  Navbar -->
     <div>
     <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
          <a class="navbar-brand" href="#" style="font: italic bold 20px/30px Georgia, serif; color:  #ffcc00;" >Start Your Website</a>
        </div>

        <div class="collapse navbar-collapse navbar-right" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Services</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Contact</a></li>
        </ul><!-- end of #myNavbar -->
        </div> 
      </div>
    </nav>
    </div>
    <div id=#landing_greet>
      <h2>Welcome to our team!</h2>
    <h1>It is our pleasure to work with you!</h1>
    <button id="btn_tell_us">Tell us about you</button>
    </div>

<!-- end of Navbar -->
</div>

<div id="landing_page_z1">
  
</div>
<div id="landing_page_z2">
  
</div>
<br>

<div class="container">
      <!-- Three columns of text below the carousel -->
      <div class="row" id="greeting">
        <div class="col-lg-4" align="center">
          <img class="img-square" src="../img/satisfy.png" alt="Customer satisfy" width="200" height="140" align="center">
          <h2>Satisfy</h2>
          <p>We assure customer's satisfy by quality service, low cost and long-term mainternance. Willing to support if any additional request. You can design your own website layout by our tool</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4" align="center">
          <img class="img-square" src="../img/responsive.png" alt="Generic placeholder image" width="200" height="140">
          <h2>Responsive</h2>
          <p>We design responsive websites. Our website have different layout, can fix with multi-width devive : laptop, destop, mobile phone, tablet</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4" align="center">
          <img class="img-square" src="../img/quality.png" alt="Generic placeholder image" width="170" height="140">
          <h2>Quality</h2>
          <p>We apply new technical and framework, help to speed up website and high level security.</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->




<div class="col-md-8 col-md-offset-2">
<!-- <hr style="height:2px;border:none;color:#000;background-color:#ff8000;margin-right: 10px; margin-top: 10px;" /> -->
</div>
<div class="row" id="news-website">
<div id="news-website-text" class="col-md-6 col-xs-12 col-sm-6">
  <h2>News, margazine or your own blog website</h2>
  <hr style="-moz-box-shadow: 1px 2px 8px rgba(0, 0, 0,0.5);
    -webkit-box-shadow: 1px 2px 8px rgba(0, 0, 0, .5);
    box-shadow: 1px 2px 8px rgba(0, 0, 0, .5);">
  <p class="lead">&nbsp<span class="glyphicon glyphicon-ok" style="color:#009900;"></span>&nbsp With beautiful view, focus on mobile first</p>
  <p class="lead">&nbsp<span class="glyphicon glyphicon-ok"  style="color:#009900;"></span>&nbsp Professional style of admin page</p>
  <p class="lead">&nbsp<span class="glyphicon glyphicon-ok"  style="color:#009900;"></span>&nbsp Full control your post/news</p>
  <p class="lead">&nbsp<span class="glyphicon glyphicon-ok"  style="color:#009900;"></span>&nbsp Full comment features</p>
  <p class="lead">&nbsp<span class="glyphicon glyphicon-ok"  style="color:#009900;"></span>&nbsp Able to change theme</p>
  <p class="lead">&nbsp<span class="glyphicon glyphicon-ok"  style="color:#009900;"></span>&nbsp Google Ad implemented to your website</p>
  <script>
    var app = angular.module('indexng', []);

         $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        if(scroll > 500) {$(".navbar").addClass('navbar-glass'); }
        else {$(".navbar").removeClass('navbar-glass');}
         
       });

  </script>
</div>

<div class="col-md-6 col-sm-6 col-xs-12" id="news-website-pic">
<div class="row" id="btn-view" align="center">
   <div class="col-md-4 col-md-offset-4 col-xs-4 col-sm-4 col-sm-offset-4 col-xs-offset-1" id="btn-live">
        <a href="sample/news" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-eye-open"></span>&nbspLive view sample</a>
   </div>
</div>
</div>

</div>
<hr>
<div class="row" id="shopping">
  
<div class="col-md-6 col-sm-6 col-xs-12" id="shopping-website-pic">
<div class="row" id="btn-view" align="center">
   <div class="col-md-4 col-md-offset-4 col-xs-4 col-sm-4 col-sm-offset-4 col-xs-offset-1" id="btn-live">
        <button class="btn btn-success btn-lg"><span class="glyphicon glyphicon-eye-open"></span>&nbspLive view sample</button>
   </div>
</div>
</div><!--  end of shopping website pic -->
<div class="col-md-6 col-sm-6 col-xs-12" id="shopping-website-text">
    <h2>Your online store, shopping cart, E-commerce website</h2>
  <hr style="-moz-box-shadow: 1px 2px 8px rgba(0, 0, 0,0.5);
    -webkit-box-shadow: 1px 2px 8px rgba(0, 0, 0, .5);
    box-shadow: 1px 2px 8px rgba(0, 0, 0, .5);">
  <p class="lead">&nbsp<span class="glyphicon glyphicon-ok" style="color:#009900;"></span>&nbsp With beautiful view, focus on mobile first</p>
  <p class="lead">&nbsp<span class="glyphicon glyphicon-ok"  style="color:#009900;"></span>&nbsp Visa, PayPal payment are supported</p>
  <p class="lead">&nbsp<span class="glyphicon glyphicon-ok"  style="color:#009900;"></span>&nbsp Chat box with your customer</p>
  <p class="lead">&nbsp<span class="glyphicon glyphicon-ok"  style="color:#009900;"></span>&nbsp Able to change theme</p>
  <p class="lead">&nbsp<span class="glyphicon glyphicon-ok"  style="color:#009900;"></span>&nbsp Manage your business with powerful admin dashboard</p>
  <script>
         $(window).scroll(function (event) {
        var scroll1 = $(window).scrollTop();
        if (scroll1 > 600){
           $("#news-website-text").find("p").addClass('moveon');
            }
         else {
           $("#news-website-text").find("p").removeClass('moveon');
         }
         if (scroll1 > 1000){
           $("#shopping-website-text").find("p").addClass('moveon');
            }
         else {
           $("#shopping-website-text").find("p").removeClass('moveon');
         }
         if (scroll1 > 1400){
           $("#gallery-website-text").find("p").addClass('moveon');
            }
         else {
           $("#gallery-website-text").find("p").removeClass('moveon');
         }
        if (scroll1 > 1800){
           $("#video-website-text").find("p").addClass('moveon');
            }
         else {
           $("#video-website-text").find("p").removeClass('moveon');
         }
       });

  </script> 
</div>
</div><!--  end of shopping -->
<hr>
<div class="row" id="gallery">
<div class="col-md-6 col-sm-6 col-xs-12" id="gallery-website-text">
    <h2>You are an artist ? We make your own gallery!</h2>
  <hr style="-moz-box-shadow: 1px 2px 8px rgba(0, 0, 0,0.5);
    -webkit-box-shadow: 1px 2px 8px rgba(0, 0, 0, .5);
    box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.5);">
  <p class="lead">&nbsp<span class="glyphicon glyphicon-ok" style="color:#009900;"></span>&nbsp With beautiful view, beautiful effect</p>
  <p class="lead">&nbsp<span class="glyphicon glyphicon-ok"  style="color:#009900;"></span>&nbsp Simple modify your image</p>
  <p class="lead">&nbsp<span class="glyphicon glyphicon-ok"  style="color:#009900;"></span>&nbsp Able to change theme, layout, effect </p>
  </div><!--  end of gallery-website-text -->
<div class="col-md-6 col-sm-6 col-xs-12" id="gallery-website-pic">
    <div class="row" id="btn-view" align="center">
   <div class="col-md-4 col-md-offset-4 col-xs-4 col-sm-4 col-sm-offset-4 col-xs-offset-1" id="btn-live">
        <button class="btn btn-success btn-lg"><span class="glyphicon glyphicon-eye-open"></span>&nbspLive view sample</button>
   </div>
</div>
</div><!--  end of gallery website pic -->
</div> <!-- end of gallery -->
<hr>
<div class="row" id="video">
<div class="col-md-6 col-sm-6 col-xs-12" id="video-website-pic">
<div class="row" id="btn-view" align="center">
   <div class="col-md-4 col-md-offset-4 col-xs-4 col-sm-4 col-sm-offset-4 col-xs-offset-1" id="btn-live">
        <button class="btn btn-success btn-lg"><span class="glyphicon glyphicon-eye-open"></span>&nbspLive view sample</button>
   </div>
</div>
</div><!--  end of video website pic -->
<div class="col-md-6 col-sm-6 col-xs-12" id="video-website-text">
    <h2>You need a video hub for sharing, or for your business?</h2>
  <hr style="-moz-box-shadow: 1px 2px 8px rgba(0, 0, 0,0.5);
    -webkit-box-shadow: 1px 2px 8px rgba(0, 0, 0, .5);
    box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.5);">
  <p class="lead">&nbsp<span class="glyphicon glyphicon-ok" style="color:#009900;"></span>&nbsp With beautiful view, beautiful effect</p>
  <p class="lead">&nbsp<span class="glyphicon glyphicon-ok"  style="color:#009900;"></span>&nbsp Video sharing via Google+, Facebook, Twitter</p>
  <p class="lead">&nbsp<span class="glyphicon glyphicon-ok"  style="color:#009900;"></span>&nbsp Able to change theme, layout, effect </p>
  <p class="lead">&nbsp<span class="glyphicon glyphicon-ok"  style="color:#009900;"></span>&nbsp Implemented Google Ads </p>
  </div><!--  end of video-website-text -->
</div><!-- end of video -->
</div>


</div>
<div id="footer">
  <div class="container">
     <div class="row">
       <div class="col-md-6 col-sm-6 col-xs-12">
         <h2>WebDev</h2>
         <p><span class="glyphicon glyphicon-envelope"></span>&nbsp <u>nguyensonute@gmail.com</u></p>
       </div>
     </div><!-- end of row -->

  </div>
  
</div><!--  end of footer -->

</body>
</html>