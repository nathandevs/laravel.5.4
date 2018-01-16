
@extends('layouts.app')

@section('content')

	<h1>Posts</h1>

	<div class="well">
		<h3><a href="/post/{{$post->id}}">{{$post->title}}</a></h3>
		<p>{!!$post->body!!}</p> <!-- NOTE: "!!" parseHtml -->
		<hr>
		<small>Written on {{$post->created_at}}</small>

		@if(!Auth::guest())
		<hr>
		<a href="/post/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

		{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
			{{Form::hidden('_method', 'DELETE')}}
			{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
		{!!Form::close()!!}

		@endif
	</div>
@endsection

