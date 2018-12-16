{{-- @extends('layouts.app1') --}}
@extends('layouts.app')

@section('content')
	<h1>{{$post->title}}</h1>
	<img style="width: 100%;" src="{{asset('storage/cover_image/'.$post->cover_image) }}">
	<a href="../posts" class="btn btn-default float-right">[ ◄ Go Back ]</a><br><br>
	<div class="list-group-item">
		{!!$post->body!!}<br><br>
		<small class="float-right">[Written on : {{$post->created_at}} By {{$post->user->name}}]</small><br>
		@if (!Auth::guest())
			@if (Auth::user()->id == $post->user_id)
				{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
					{{Form::hidden('_method', 'DELETE')}}
					{{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm'] )  }}
				{!! Form::close() !!}
				<a href="../posts/{{$post->id}}/edit" class="btn btn-sm btn-info float-right" style="margin-right: 10px;"><i class="fa fa-edit"></i></a>
			@endif
		@endif
		<br><br>
	</div>
@endsection