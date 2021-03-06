@extends('layouts.dashboard')
@section('content')

<form action="{{route('post.update', $post)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
  </div>

  <form>
    <div class="form-group">
      <label for="immagine">Carica l'immagine</label>
      <input type="file" class="form-control-file" id="immagine" name="image">
    </div>
  </form>

  <div class="form-group">
    <label for="body">Body</label>
    <textarea type="text" class="form-control" id="body" name="content" value="{{$post->content}}">{{$post->content}}</textarea>
  </div>

  <button class="btn btn-success" type="submit">Salva</button>
</form>

@endsection
