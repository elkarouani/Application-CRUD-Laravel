{{-- @extends('layouts.app1') --}}
@extends('layouts.app')

@section('content')
	<h1>Posts</h1><br>
	@foreach ($posts as $post)
		<div class="row">
			<div class="col-md-4 col-sm-4">
				<img style="width: 100%;" src="{{asset('storage/cover_image/'.$post->cover_image) }}">
			</div>	
			<div class="col-md-8 col-sm-8">
				<div class="list-group-item">
					<h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3><hr>
					{!!$post->body!!}<br><br>
					<small class="float-right">[Written on : {{$post->created_at}} By {{$post->user->name}}]</small><br>
				</div>
			</div>	
		</div>
		<br>
	@endforeach
	<div style="display: flex;justify-content: center;">{{$posts->links()}}</div>
@endsection