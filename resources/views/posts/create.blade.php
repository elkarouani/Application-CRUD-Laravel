{{-- @extends('layouts.app1') --}}
@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Create Post</h1><br>
		{!! Form::open(['action' => 'PostsController@store', 'methode' => 'POST', 'enctype' => 'multipart/form-data']) !!}
			<div class="form-group">
				{{Form::label('title', 'Title')}}
				{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
			</div>
			<div class="form-group">
				{{Form::label('body', 'Body')}}
				{{Form::textarea('body', '', ['id' => 'article', 'class' => 'form-control', 'placeholder' => 'Body'])}}
			</div>
			<div class="form-group">
				{{Form::file('cover_image')}}
			</div>
			{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
		{!! Form::close() !!}
		<br>
	</div>
@endsection
