@extends('layouts.admin')

@section('content')




<h1>Users</h1>
<table class="table responsive">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Photo</th>
      <th scope="col">Username</th>
      <th scope="col">User Email</th>
      <th scope="col">Role</th>
      <th scope="col">Status</th>
      <th scope="col">Created</th>
      <th scope="col">Updated</th>
  
    </tr>
  </thead>
  <tbody>
      @if($users)
      @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td><img height='50' src='{{$user->photo?$user->photo->file:'/Images/sample_img.jpg'}}' alt=""></td>
      <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
      <td>{{$user->email}}</td>
      <td>{{$user->role->name}}</td>
      <td>{{$user->is_active == 1 ? 'Active':"Not Active"}}</td>
      <td>{{$user->created_at->diffForHumans()}}</td>
      <td>{{$user->updated_at->diffForHumans()}}</td>
      
    </tr>
    @endforeach
    @endif
   
  </tbody>
</table>


@endsection