@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="posts/create" class="btn btn-primary">Create Post</a><br><br>
                    <h3>Your Blog Posts</h3>
                    @if (count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>
                                        <a href="posts/{{$post->id}}/edit" class="btn btn-sm btn-info float-right">
                                            <i class="fa fa-edit"> Edit</i>
                                        </a>
                                    </td>
                                    <td>
                                        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{ Form::button('<i class="fa fa-trash"> Delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm'] )  }}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <br><em>You have no posts</em>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
