@extends('layout')

@section('content')
  <p>{{ $name }}さんの投稿一覧</p>
  @foreach ($posts as $post)
    <div class="rakkoPost" style="background-image: url({{ $post->image }});">
      <a href="#"><span>投稿者</span>{{ $name }}</a>
    </div>
  @endforeach
@endsection
