@extends('layouts.admin')

@section('content')
<div class="container-fluid">

<h1> Edit User  Here</h1>
{{ Form::model($user,['method'=>'PATCH','route'=>['users.update',$user],'files'=>true]) }}
<div class="col-sm-9">

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
<br>

<div class="form-group">
{{Form::submit('Create User', ['class' => 'btn btn-primary'])}}
</div>
</div>
<div class="col-sm-3 border border-dark rounded">
<img src="{{$user->photo?$user->photo->file:'/Images/sample_img.jpg'}}" alt="" class ="img-responsive img-rounded ">
</div>

{{ Form::close() }}
</div>

@include('includes.form_error')


@endsection

