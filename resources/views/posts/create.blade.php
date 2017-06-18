@extends('layout')

@section('content')
<div class= "contents row">
  <div class= "container">
    {{ Form::open(['url' => '/posts', 'method' => 'post']) }}
      <h3>Post</h3>
      <input placeholder="image url" type="text" name="image">
      <textarea cols="30" rows="10" placeholder="text" type="text" name="post"></textarea>
      <input type="submit" value="投稿する">
    {{ Form::close() }}
  </div>
</div>
@endsection
