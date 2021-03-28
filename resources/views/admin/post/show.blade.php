@extends('layouts.dashboard')
@section('content')

  <table class="table table-hover">
    <thead>
      <tr>
        <<th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Created By</th>
        <th scope="col">Body</th>
        <th scope="col">Created at</th>
        <th scope="col">updated at</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->user->name}}</td>
        <td>{{$post->content}}</td>
        <td>{{$post->created_at}}</td>
        <td>{{$post->updated_at}}</td>
      </tr>
    </tbody>
  </table>

@endsection
