@extends('layouts.admin')

@section('content')

<H1> Create User  Here</H1>

{{ Form::open(['method'=>'post','action'=>'AdminUsersController@store','files'=>true]) }}

<div class="form-group">
{{Form :: label('name', 'Name')}}
{{Form :: text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Username'])}}
</div>
<div class="form-group">
{{Form :: label('email', 'Email')}}
{{Form :: email('email', '', ['class' => 'form-control', 'placeholder' => 'Enter Email'])}}
</div>

<div class="form-group">
{{Form :: label('password', 'Password')}}
{{Form :: password('password', ['class' => 'form-control', 'placeholder' => 'Enter content'])}}
</div>

<div class="form-group">
{{Form :: label('role_id', 'Role')}}
{{Form :: select('role_id',[''=>"select Option"]+$roles,null, ['class' => 'form-control',])}}
</div>
<div class="form-group">
{{Form :: label('is_active', 'Status')}}
{{Form :: select('is_active', [0=>'Not Active',1=>'Active'],0, ['class' => 'form-control'])}}
</div>

<div class="form-group">
{{Form :: label('file', 'User Photo')}}
{{Form :: file('file', null, ['class' => 'file-control', ])}}
</div>
<br>

<div class="form-group">
{{Form::submit('Create User', ['class' => 'btn btn-primary'])}}
</div>


{{ Form::close() }}

@include('includes.form_error')


@endsection

