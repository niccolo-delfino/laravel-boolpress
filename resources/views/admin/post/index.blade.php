@extends('layouts.dashboard')
@section('content')

  <div class="ml-4">
    @if(session('status'))
      <div class="alert alert-succes">
        {{session('status')}}
      </div>
    @endif
    <div class="mb-4">
      <a class="btn btn-primary" href="{{route('post.create')}}">Crea un nuovo post</a>
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
            <td><a class="btn btn-primary" href="{{route('post.show', $post->id)}}">View</a></td>
            <td><a class="btn btn-warning" href="{{route('post.edit', $post->id)}}">Edit</a></td>
            <td>
              <form action="{{route('post.destroy', $post)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
  </div>

@endsection
