
@extends('layouts.app')

@section('content')

	<h1>Posts 
		<div class="pull-right">
			<a href="post/create">
				{{Form::button('Create Post', ['class' => 'btn btn-primary'])}}
			</a>
		</div>
	</h1>

	@if(count($posts) > 0)
		@foreach($posts as $post)
			<div class="well">
				<h3><a href="/post/{{$post->id}}">{{$post->title}}</a></h3>
				<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
			</div>
		@endforeach
		{{$posts->links()}}
	@else
		<p>No post Found!</p>
	@endif
@endsection

