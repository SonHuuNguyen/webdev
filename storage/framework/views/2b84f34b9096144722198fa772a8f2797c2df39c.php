<!DOCTYPE html>
<html>
<head>
  <title>News page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- include boostrap  -->
<link rel="shortcut icon" href="http://sstatic.net/stackoverflow/img/favicon.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/news.css">
<link href="../css/font/Lato-Thin.woff" rel="stylesheet" type="text/css">
</head>
<body>
<!-- navbar --> 
<nav class="navbar navbar-default">
  <div class="container">
    <ul class="nav navbar-nav" align="center">
      <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
      <li><a href="#">Star</a></li>
      <li><a href="#">TV show</a></li>
      <li><a href="#">Cinema</a></li>
      <li><a href="#">Social</a></li>
      <li><a href="#">World</a></li>
      <li><a href="#">Science</a></li>
      <li><a href="#">Natural</a></li>
      <li><a href="#">Beauty</a></li>
      <li><a href="#">Gender</a></li>
    </ul>
  </div>
</nav>
<!-- end of navbar -->
<div class="container" id="main_body">
  <div id="advertise" style="height: 8em; width: 100%; background-color: #000;">
    
  </div>
  <br>
  <div class="row">
     <div class="col-md-8 col-sm-8 col-xs-12" id="left_side">
       <div class="row" id="big_news">
           <div class="col-md-8 col-sm-8 col-xs-12" id="big_news_1">
             <img src="../../img/satisfy.png" alt="" style="height: 23em; width: 100%">
             <h2>This is header if big news 1</h2>
           </div>
           <div class="col-md-4 col-sm-4 col-xs-12" id="big_news_2">
             <img src="../../img/video.jpg" style="height: 23em; width: 100%;">
             <h3>This is header of big news 3</h3>
           </div>
       </div><!-- end of big_news -->
       <hr style="height: 0.3em; background-color: #ff8000;">
       <div class="row" id="carousel_1">
         
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">

            <div class="item active">
                  <div id="carou_news_1" style="float: left; padding-right: 2px;">
                    <img src="../../img/250150.png" alt="Chania">
                  <h4>this header of carousel news 1</h4>
                  </div>
                  <div id="carou_news_2" style="float: left; padding-right: 2px;">
                    <img src="../../img/250150.png" alt="Chania">
                  <h4>this header of carousel news 2</h4>
                  </div> 
                  <div id="carou_news_3" style="float: left; padding-right: 2px;">
                    <img src="../../img/250150.png" alt="Chania">
                  <h4>this header of carousel news 3</h4>
                  </div>            
            </div>
            <div class="item">
                  <div id="carou_news_1" style="float: left; padding-right: 2px;">
                    <img src="../../img/250150.png" alt="Chania">
                  <h4>this header of carousel news 1</h4>
                  </div>
                  <div id="carou_news_2" style="float: left; padding-right: 2px;">
                    <img src="../../img/250150.png" alt="Chania">
                  <h4>this header of carousel news 2</h4>
                  </div> 
                  <div id="carou_news_3" style="float: left; padding-right: 2px;">
                    <img src="../../img/250150.png" alt="Chania">
                  <h4>this header of carousel news 3</h4>
                  </div>            
            </div>
            <div class="item">
                  <div id="carou_news_1" style="float: left; padding-right: 2px;">
                    <img src="../../img/250150.png" alt="Chania">
                  <h4>this header of carousel news 1</h4>
                  </div>
                  <div id="carou_news_2" style="float: left; padding-right: 2px;">
                    <img src="../../img/250150.png" alt="Chania">
                  <h4>this header of carousel news 2</h4>
                  </div> 
                  <div id="carou_news_3" style="float: left; padding-right: 2px;">
                    <img src="../../img/250150.png" alt="Chania">
                  <h4>this header of carousel news 3</h4>
                  </div>            
            </div>
            <div class="item">
                  <div id="carou_news_1" style="float: left; padding-right: 2px;">
                    <img src="../../img/250150.png" alt="Chania">
                  <h4>this header of carousel news 1</h4>
                  </div>
                  <div id="carou_news_2" style="float: left; padding-right: 2px;">
                    <img src="../../img/250150.png" alt="Chania">
                  <h4>this header of carousel news 2</h4>
                  </div> 
                  <div id="carou_news_3" style="float: left; padding-right: 2px;">
                    <img src="../../img/250150.png" alt="Chania">
                  <h4>this header of carousel news 3</h4>
                  </div>            
            </div>

            
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="width: 2em;">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="width: 2em;">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

    </div><!--  end of carousel_1 -->
    <hr>
    <div class="row" id="small_news">
      <div class="col-md-4 col-sm-4 col-xs-6" id="smal_news_pic">
        <img src="../../img/250150.png">
      </div>
      <div class="col-md-7 col-sm-7 col-xs-5" id="small_news_text">
      <h4>This is header of small news</h4>
      <p><strong style="color: #ff8000;">Star</strong><strong>&nbsp&nbsp&nbsp&nbsp</strong><small>12/12/2012</small></p>
      <p>This is abbreviation of small news....</p>
      </div>
    </div><!--  end of small news -->
        <hr>
    <div class="row" id="small_news">
      <div class="col-md-4 col-sm-4 col-xs-6" id="smal_news_pic">
        <img src="../../img/250150.png">
      </div>
      <div class="col-md-7 col-sm-7 col-xs-5" id="small_news_text">
      <h4>This is header of small news</h4>
      <p><strong style="color: #ff8000;">Star</strong><strong>&nbsp&nbsp&nbsp&nbsp</strong><small>12/12/2012</small></p>
      <p>This is abbreviation of small news....</p>
      </div>
    </div><!--  end of small news -->
        <hr>
    <div class="row" id="small_news">
      <div class="col-md-4 col-sm-4 col-xs-6" id="smal_news_pic">
        <img src="../../img/250150.png">
      </div>
      <div class="col-md-7 col-sm-7 col-xs-5" id="small_news_text">
      <h4>This is header of small news</h4>
      <p><strong style="color: #ff8000;">Star</strong><strong>&nbsp&nbsp&nbsp&nbsp</strong><small>12/12/2012</small></p>
      <p>This is abbreviation of small news....</p>
      </div>
    </div><!--  end of small news -->
        <hr>
    <div class="row" id="small_news">
      <div class="col-md-4 col-sm-4 col-xs-6" id="smal_news_pic">
        <img src="../../img/250150.png">
      </div>
      <div class="col-md-7 col-sm-7 col-xs-5" id="small_news_text">
      <h4>This is header of small news</h4>
      <p><strong style="color: #ff8000;">Star</strong><strong>&nbsp&nbsp&nbsp&nbsp</strong><small>12/12/2012</small></p>
      <p>This is abbreviation of small news....</p>
      </div>
    </div><!--  end of small news -->

    <div class="row" id="noteworthy">
    <div class="col-md-12 col-sm-12 col-xs-12" id="noteworthy_header">
         <p class="glyphicon glyphicon-flash"></p><strong style="font-size: 1.5em;">Noteworthy</strong>
    </div>
    <div class="row" id="northworthy_news">
      <div class="col-md-4 col-sm-4 col-xs-6" id="noteworthy_news_pic">
        <img src="../../img/250150.png">
      </div>
      <div class="col-md-7 col-sm-7 col-xs-5" id="noteworthy_news_text">
      <h4>This is header of small news</h4>
      <p><strong style="color: #ff8000;">Star</strong><strong>&nbsp&nbsp&nbsp&nbsp</strong><small>12/12/2012</small></p>
      <p>This is abbreviation of small news....</p>
      </div>
    </div><!--  end of northworthy_news -->
    <div class="row" id="northworthy_news">
      <div class="col-md-4 col-sm-4 col-xs-6" id="noteworthy_news_pic">
        <img src="../../img/250150.png">
      </div>
      <div class="col-md-7 col-sm-7 col-xs-5" id="noteworthy_news_text">
      <h4>This is header of small news</h4>
      <p><strong style="color: #ff8000;">Star</strong><strong>&nbsp&nbsp&nbsp&nbsp</strong><small>12/12/2012</small></p>
      <p>This is abbreviation of small news....</p>
      </div>
    </div><!--  end of northworthy_news -->
    <div class="row" id="northworthy_news">
      <div class="col-md-4 col-sm-4 col-xs-6" id="noteworthy_news_pic">
        <img src="../../img/250150.png">
      </div>
      <div class="col-md-7 col-sm-7 col-xs-5" id="noteworthy_news_text">
      <h4>This is header of small news</h4>
      <p><strong style="color: #ff8000;">Star</strong><strong>&nbsp&nbsp&nbsp&nbsp</strong><small>12/12/2012</small></p>
      <p>This is abbreviation of small news....</p>
      </div>
    </div><!--  end of northworthy_news -->

    </div><!--  end of noteworthy -->
    <br>
   <!-- next 3 small news -->
   <div class="row" id="small_news">
      <div class="col-md-4 col-sm-4 col-xs-6" id="smal_news_pic">
        <img src="../../img/250150.png">
      </div>
      <div class="col-md-7 col-sm-7 col-xs-5" id="small_news_text">
      <h4>This is header of small news</h4>
      <p><strong style="color: #ff8000;">Star</strong><strong>&nbsp&nbsp&nbsp&nbsp</strong><small>12/12/2012</small></p>
      <p>This is abbreviation of small news....</p>
      </div>
    </div><!--  end of small news -->
    <div class="row" id="small_news">
      <div class="col-md-4 col-sm-4 col-xs-6" id="smal_news_pic">
        <img src="../../img/250150.png">
      </div>
      <div class="col-md-7 col-sm-7 col-xs-5" id="small_news_text">
      <h4>This is header of small news</h4>
      <p><strong style="color: #ff8000;">Star</strong><strong>&nbsp&nbsp&nbsp&nbsp</strong><small>12/12/2012</small></p>
      <p>This is abbreviation of small news....</p>
      </div>
    </div><!--  end of small news -->
    <div class="row" id="small_news">
      <div class="col-md-4 col-sm-4 col-xs-6" id="smal_news_pic">
        <img src="../../img/250150.png">
      </div>
      <div class="col-md-7 col-sm-7 col-xs-5" id="small_news_text">
      <h4>This is header of small news</h4>
      <p><strong style="color: #ff8000;">Star</strong><strong>&nbsp&nbsp&nbsp&nbsp</strong><small>12/12/2012</small></p>
      <p>This is abbreviation of small news....</p>
      </div>
    </div><!--  end of small news -->

   <!-- end next 3 small news -->      
     </div><!--  end of left side -->
     <div class="col-md-4 col-sm-4 col-xs-12" id="right_side">

     </div> <!--  end of right side -->

  </div>
</div><!--  end of container -->
<br>
<div class="container">
  <div class="row" id="video">
  <div class="col-md-7 col-sm-5 col-xs-12">
    <video width="400" controls>
     <source src="../../video/tieungaogiangho.mp4" type="video/mp4">
     Your browser does not support HTML5 video.
    </video>    
  </div>
  <div class="col-md-5 col-sm-5 col-xs-12" id="video_list">
  <ul>
  <a href="#">
    <li>
      <div class="row" id="video_list_row">
        <div class="col-md-4 col-sm-8 col-xs-8" id="video_list_video">
        <video width="400">
         <source src="../../video/tieungaogiangho.mp4" type="video/mp4">
         Your browser does not support HTML5 video.
        </video>  
        </div>
        <div class="col-md-8 col-sm-8 col-xs-8" id="video_list_title">
          <h4>Nhac phim tan tieu ngao giang ho</h4>
        </div>
      </div>
    </li>
    </a>
    <li>
      <div class="row" id="video_list_row">
        <div class="col-md-4 col-sm-8 col-xs-8" id="video_list_video">
        <video width="400">
         <source src="../../video/tieungaogiangho.mp4" type="video/mp4">
         Your browser does not support HTML5 video.
        </video>  
        </div>
        <div class="col-md-8 col-sm-8 col-xs-8" id="video_list_title">
          <h4>Nhac phim tan tieu ngao giang ho</h4>
        </div>
      </div>
    </li>
    <li>
      <div class="row" id="video_list_row">
        <div class="col-md-4 col-sm-8 col-xs-8" id="video_list_video">
        <video width="400">
         <source src="../../video/tieungaogiangho.mp4" type="video/mp4">
         Your browser does not support HTML5 video.
        </video>  
        </div>
        <div class="col-md-8 col-sm-8 col-xs-8" id="video_list_title">
          <h4>Nhac phim tan tieu ngao giang ho</h4>
        </div>
      </div>
    </li>
    <li>
      <div class="row" id="video_list_row">
        <div class="col-md-4 col-sm-8 col-xs-8" id="video_list_video">
        <video width="400">
         <source src="../../video/tieungaogiangho.mp4" type="video/mp4">
         Your browser does not support HTML5 video.
        </video>  
        </div>
        <div class="col-md-8 col-sm-8 col-xs-8" id="video_list_title">
          <h4>Nhac phim tan tieu ngao giang ho</h4>
        </div>
      </div>
    </li>
    <li>
      <div class="row" id="video_list_row">
        <div class="col-md-4 col-sm-8 col-xs-8" id="video_list_video">
        <video width="400">
         <source src="../../video/tieungaogiangho.mp4" type="video/mp4">
         Your browser does not support HTML5 video.
        </video>  
        </div>
        <div class="col-md-8 col-sm-8 col-xs-8" id="video_list_title">
          <h4>Nhac phim tan tieu ngao giang ho</h4>
        </div>
      </div>
    </li>
    <li>
      <div class="row" id="video_list_row">
        <div class="col-md-4 col-sm-8 col-xs-8" id="video_list_video">
        <video width="400">
         <source src="../../video/tieungaogiangho.mp4" type="video/mp4">
         Your browser does not support HTML5 video.
        </video>  
        </div>
        <div class="col-md-8 col-sm-8 col-xs-8" id="video_list_title">
          <h4>Nhac phim tan tieu ngao giang ho</h4>
        </div>
      </div>
    </li>
  </ul>
  </div><!-- end of video list -->

  </div>
</div>
</body>
</html>