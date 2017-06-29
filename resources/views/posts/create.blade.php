@extends('layout')

@section('content')
<div class= "contents row">
  <div class= "container">
    <div class= "form-group">
      {{ Form::open(['url' => '/posts', 'method' => 'post']) }}
        <h3>ぽすとする</h3>
        <input placeholder="image url" type="text" name="image" class="form-control">
        <textarea cols="30" rows="10" placeholder="text" type="text" name="post" class="form-control"></textarea>
        <input type="submit" value="投稿する" class="btn btn-default">
      {{ Form::close() }}
    </div>
  </div>
</div>
@endsection
