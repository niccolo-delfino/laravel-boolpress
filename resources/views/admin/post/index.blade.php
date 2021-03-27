@extends('layouts.dashboard')
@section('content')

  <div>
    <button type="button" class="btn btn-primary" href="{{route('post.create')}}">Crea un nuovo post</button>
  </div>

  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">User Id</th>
      <th scope="col">Created at</th>
      <th scope="col">updated at</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
      <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->user_id}}</td>
        <td>{{$post->created_at}}</td>
        <td>{{$post->updated_at}}</td>
      </tr>
    @endforeach

  </tbody>
</table>
@endsection
