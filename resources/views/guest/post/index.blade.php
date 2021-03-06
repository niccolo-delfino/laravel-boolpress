@extends('layouts.app')

@section('title','elenco dei post')

@section('content')
<h1>elenco post</h1>
<div class="container">
  @foreach($posts as $post)
  <div class="card">
  <div class="card-header">
    {{$post->title}}
  </div>
  <div class="card-body">
    <p class="card-text">{{$post->content}}</p>
    <p>{{ $post->user->name}}</p>
    <a href="{{ route('guest.posts.show', $post->slug)}}" class="btn btn-primary">Dettagli</a>
  </div>
</div>
  @endforeach
</div>
@endsection
