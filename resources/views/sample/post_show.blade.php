@extends('sample.news_admin')
@section('title', " - $post->title")
@section('item')
<span class="glyphicon glyphicon-chevron-right" style="font-size:1em;"></span> <strong> Post show {{$post->id}}</strong>
@endsection
@section('content')
<div class="row">
  <div class="col-md-8 col-sm-8 col-xs-12" id="post_content">
    <h3>{{$post->title}}</h3>
    <img src="" alt="featured-image" width="100" height="100">
    <?php echo $post->content; ?>
  </div>
  <div class="col-md-4 col-sm-4 col-xs-12" id="post_more">
    <div class="well">
      <p><label>Post by:</label>Tim</p>
      <p><label>Category:</label>TV show</p>
      <p><label>Last edit:</label></p>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6">
            <label>Post to Web:</label>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
          <label class="switch">
            <input type="checkbox">
            <div class="slider round"></div>
          </label>
        </div>
        <br>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6" id="post_edit"><a class="btn btn-block btn-success" href="{{route('posts.edit', $post->id)}}">Edit</a></div>
        <div class="col-md-6 col-sm-6 col-xs-6" id="post_delete">
        <form action="{{route('posts.destroy', $post->id)}}" method="post" accept-charset="utf-8">
           <input type="submit" class="btn btn-block btn-danger" value="Delete">
          <input type="hidden" name="_token" value="{{ Session::token() }}"> {{ method_field('DELETE') }}
        </form>
        </div>
      </div>
 
      
      </div>
    </div>
  </div>
</div>

@endsection