@extends('layouts.dashboard')
@section('content')

<form action="{{route('post.store')}}" method="post">
  @csrf
  @method('POST')

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>

  <div class="form-group">
    <label for="body">Body</label>
    <textarea type="text" class="form-control" id="body" name="content"></textarea>
  </div>

  <button class="btn btn-success" type="submit">Salva</button>
</form>

@endsection
