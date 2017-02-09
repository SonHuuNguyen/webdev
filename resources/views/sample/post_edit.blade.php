@extends('sample.news_admin')
@section('title', "| Edit post")
@section('content')
<div class="row">
	<div class="col-md-10 col-sm-10 col-xs-12" id="new_form">
	  <form method="post" action="{{route('posts.update', $post->id)}}" accept-charset="UTF-8">
	   {{ csrf_field() }}
        <div class="form-group">
		    <label for="title">Post title:</label>
		    <input type="input" class="form-control" id="title" name="title" value="{{$post->title}}">
		</div>
		<div class="form-group">
		    <label for="category">Category:</label>
		    <select class="form-control" id="category" name="category">
			    <option>1</option>
			    <option>2</option>
			    <option>3</option>
			    <option>4</option>
			</select>
		</div>
	    <div class="form-group">
		  <label for="Content">Content:</label>
		  <textarea class="form-control editor" rows="10" id="edit" name="content">{{$post->content}}</textarea>
		  <br>
		  <label for="preview">Preview your post:</label>
		  <pre id="preview"></pre>

		  <button type="submit" class="btn btn-default">Save change</button>
		  <input type="hidden" name="_token" value="{{ Session::token() }}"> {{ method_field('PUT') }}
		<!--   <input type="hidden" name="_token" value="{{ Session::token() }}"> -->
	  </form>
	</div>
	<div class="col-md-2 col-sm-10 col-xs-12" id="recent_post">
		
	</div>
</div> 
@endsection
@section('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
 <script src="http://localhost/webdev/js/plugins/file.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="http://localhost/webdev/js/froala_editor.min.js"></script>
  <script type="text/javascript" src="http://localhost/webdev/js/plugins/align.min.js"></script>
  <script type="text/javascript" src="http://localhost/webdev/js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="http://localhost/webdev/js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="http://localhost/webdev/js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="http://localhost/webdev/js/plugins/image.min.js"></script>
  <script type="text/javascript" src="http://localhost/webdev/js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="http://localhost/webdev/js/plugins/link.min.js"></script>
  <script type="text/javascript" src="http://localhost/webdev/js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="http://localhost/webdev/js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="http://localhost/webdev/js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="http://localhost/webdev/js/plugins/table.min.js"></script>
  <script type="text/javascript" src="http://localhost/webdev/js/plugins/video.min.js"></script>
  <script type="text/javascript" src="http://localhost/webdev/js/plugins/url.min.js"></script>
  <script type="text/javascript" src="http://localhost/webdev/js/plugins/entities.min.js"></script>
   <script>
 $(function() {
        $('#edit').froalaEditor({
          imageUploadURL:"http://localhost/webdev/resources/views/sample/upload.php",
          // videoUploadMethod: 'PUT',
          videoUploadURL:"http://localhost/webdev/resources/views/sample/upload_video.php"
        }).on('froalaEditor.contentChanged froalaEditor.initialized', function (e, editor) {
           $('#preview').html(editor.html.get());
         }).froalaEditor();

      });

  </script>

@endsection