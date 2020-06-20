@extends('layouts.admin')

@section('content')


<h1>Posts </h1>




<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Owner</th>
      <th scope="col">Category_Id</th>
      <th scope="col">Photo_id</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Created At</th>
      <th scope="col">Updated At</th>
    </tr>
  </thead>
  <tbody>
  @if($posts)
  @foreach($posts as $post)
    <tr>
      <td>{{$post->id}}</td>
      <td>{{$post->user->name}}</td>
      <td>{{$post->category_id}}</td>
      <td>{{$post->photo_id}}</td>
      <td>{{$post->title}}</td>
      <td>{{$post->body}}</td>
      <td>{{$post->created_at->diffForHumans()}}</td>
      <td>{{$post->updated_at->diffForHumans()}}</td>
      

    </tr>
    @endforeach
    @endif
  </tbody>
</table>

@endsection
