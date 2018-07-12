@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/posts" class="btn btn-secondary mb-3">GO BACK</a>
        <h1>{{$post->title}}</h1>
        <div class="card card-block bg-faded border border-primary m-3 p-3">
            {!! $post->body !!}
        </div>
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
        @if(!Auth::guest())
            @if(Auth::user()->id==$post->user_id)
                <div>
                    <a class="btn btn-info" href="/posts/{{$post->id}}/edit">Edit</a>
                    {!! Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right']) !!}
                    {!! Form::hidden('_method','DELETE') !!}
                    {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </div>
            @endif
         @endif
    </div>
@endsection