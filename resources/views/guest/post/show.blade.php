@extends('layouts.app')

@section('title','dettaglio post')

@section('content')
<h1>dettaglio post</h1>
<div class="container">
  <div class="card">
  <div class="card-header">
    {{$post->title}}
  </div>
  <div class="card-body">
    <p class="card-text">{{$post->content}}</p>
  </div>
</div>
</div>
@endsection
