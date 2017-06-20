@extends('layout')

@section('content')
  @foreach($posts as $post)
    <div class="rakko_post" style="background-image: url({{ $post->image }});">
      <p>{{ $post->post }}</p>
    </div>
  @endforeach
@endsection
