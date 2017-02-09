<!DOCTYPE html>
<html>
<head>
	<title>News|Admin|@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- include boostrap  -->
<link rel="shortcut icon" href="http://sstatic.net/stackoverflow/img/favicon.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://use.fontawesome.com/9ecddf0b9d.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<!-- Include Editor style. -->
<link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.4.2/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
<link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.4.2/css/froala_style.min.css' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="http://localhost/webdev/css/froala_editor.pkgd.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
 <link rel="stylesheet" href="http://localhost/webdev/css/froala_style.css">
 <link rel="stylesheet" href="http://localhost/webdev/css/plugins/code_view.css">
 <link rel="stylesheet" href="http://localhost/webdev/css/plugins/image_manager.css">
 <link rel="stylesheet" href="http://localhost/webdev/css/plugins/image.css">
 <link rel="stylesheet" href="http://localhost/webdev/css/plugins/table.css">
 <link rel="stylesheet" href="http://localhost/webdev/css/plugins/video.css">

<!-- Include JS file. -->
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.4.2/js/froala_editor.min.js'></script>

<link rel="stylesheet" type="text/css" href="http://localhost/webdev/css/news_admin.css">
</head>
<body>
<!-- navbar -->
 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">News Dashboard</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-share-alt"></span> Visit site</a></li>
      <li><a href="{{route('posts.create')}}"><span class="glyphicon glyphicon-plus"></span> Add new</a></li>
      <li><a href="#"></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li>
		<form class="navbar-form">
		  <div class="input-group">
		    <input type="text" class="form-control" placeholder="Search">
		    <div class="input-group-btn">
		      <button class="btn btn-default" type="submit">
		        <i class="glyphicon glyphicon-search"></i>
		      </button>
		    </div>
		  </div>
		</form>
      </li>
       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">User
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Logout</a></li>
          <li><a href="#">My profile</a></li>
        </ul>
      </li>

    </ul>
  </div>
  </nav>

<div class="container-fluid" style="margin-top: 50px;">
	<div class="row" id="main">
		<div class="col-md-2 col-sm-2 col-xs-12" id="left_menu">
			<table>
				<tbody>
				<tr><th>Dashboard</th>
				</tr>
				<tr>
		
					<td class='{{Request::is('*posts') ? "dsb_active" : ''}}'><a href="{{route('posts.index')}}"><h5>All posts</h5></a></td>
				
				</tr>
				<tr>
					<td><a href="#"><h5>All comments</h5></a></td>
				</tr>
				<tr>
					<td><a href="#"><h5>All category</h5></a></td>
				</tr>
				<tr>
					<td><a href="#"><h5>Advertisment</h5></a></td>
				</tr>
				<tr>
					<td><a href="#"><h5>User managment</h5></a></td>
				</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-10 col-sm-10 col-xs-12" id="main_display">
		<div class="well" style="border-radius: 0px; margin-left: -15px; margin-right: -15px;height: 1em; display: flex;align-items: center;">	
		<strong>Dashboard </strong>@yield('item')
		</div>
          @yield('content')
		</div>
	</div>
</div><!--  end of container-fluid --> 
@yield('js')
</body>
</html>