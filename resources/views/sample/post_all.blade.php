@extends('sample.news_admin')
@section('title', " -  All posts")
@section('item')
<span class="glyphicon glyphicon-chevron-right" style="font-size:1em;"></span> <strong> All posts</strong>
@endsection
@section('content')
  <table class="table table-striped" id="all_post">
    <thead>
      <tr>
        <th>#</th>
        <th>Title</th>
        <th>Content</th>
        <th>Status</th>
        <th>More</th>
      </tr>
    </thead>
    <tbody>
    @foreach($post as $s_post)
      <tr>
        <td>{{$s_post-> id }}</td>
        <td>{{$s_post-> title }}</td>
        <td>{{(strlen($s_post->content)>30)? substr($s_post->content,0,30) . "..."  : $s_post->content }}</td>
        <td><span class="glyphicon glyphicon-ok-sign" style="color: green;"></span></td>
        <td><a class="btn btn-sm btn-default" href="{{route('posts.show', $s_post->id)}}" >View</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection