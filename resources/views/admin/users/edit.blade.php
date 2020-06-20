@extends('layouts.admin')

@section('content')

<h1> Edit User  Here</h1>
<div class="col-sm-4 border border-dark rounded">
<img src="{{$user->photo?$user->photo->file:'/Images/sample_img.jpg'}}" alt="" class ="img-responsive img-rounded ">

</div>
<div class="col-sm-6">

{{ Form::model($user,['method'=>'PATCH','route'=>['users.update',$user],'files'=>true]) }}


<div class="form-group">
{{Form :: label('name', 'Name')}}
{{Form :: text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Username'])}}
</div>
<div class="form-group">
{{Form :: label('email', 'Email')}}
{{Form :: email('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email'])}}
</div>

<div class="form-group">
{{Form :: label('password', 'Password')}}
{{Form :: password('password', ['class' => 'form-control', 'placeholder' => 'Enter Password'])}}
</div>

<div class="form-group">
{{Form :: label('role_id', 'Role')}}
{{Form :: select('role_id',$roles,null, ['class' => 'form-control',])}}
</div>
<div class="form-group">
{{Form :: label('is_active', 'Status')}}
{{Form :: select('is_active', [0=>'Not Active',1=>'Active'],null, ['class' => 'form-control'])}}
</div>

<div class="form-group">
{{Form :: label('photo_id', 'User Photo')}}
{{Form :: file('photo_id', null, ['class' => 'file-control', ])}}
</div>


<div class="row">

<div class="col-sm-6">
<div class="form-group">
{{Form::submit('Upadte User', ['class' => 'btn btn-primary'])}}
</div>


{{ Form::close() }}
</div>
<div class="col-sm-6">
{{ Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id]]) }}

<div class="form-group">
{{Form::submit('Delete User', ['class' => 'btn btn-danger '])}}
</div>

{{ Form::close() }}

</div>
</div>
</div>






@include('includes.form_error')


@endsection

