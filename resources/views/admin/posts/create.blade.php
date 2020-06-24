<h1>This si Create Post</h1>
@extends('layouts.admin')

@section('content')

<H1> Create User  Here</H1>

{{ Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>true]) }}

<div class="form-group">
{{Form :: label('title', 'Title')}}
{{Form :: text('title', null,['class' => 'form-control', 'placeholder' => 'Enter title'])}}
</div>

<div class="form-group">
{{Form :: label('category_id', 'Category_id')}}
{{Form :: select('category_id',[''=>"Choose Category"]+$categories,null, ['class' => 'form-control',])}}
</div>

<div class="form-group">
{{Form :: label('photo_id', 'Photo')}}
{{Form :: file('photo_id',null, ['class' => 'file-control'])}}
</div>
<div class="form-group">
{{Form :: label('body', 'Description')}}
{{Form :: textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Write description here','rows'=>3])}}
</div>
<div class="form-group">
{{Form::submit('Create Post', ['class' => 'btn btn-primary'])}}
</div>

{{ Form::close() }}



@include('includes.form_error')

@endsection

