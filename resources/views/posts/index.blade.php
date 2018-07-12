@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Posts</h1>
		@if( count($posts) > 0 )
			@foreach($posts as $post)
				<div class="card card-block bg-faded border border-primary m-3 p-3">
					<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
					<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
				</div>
			@endforeach
			{{$posts->links()}}
		@else
			<h3>No Posts Found!</h3>
		@endif
	</div>
@endsection