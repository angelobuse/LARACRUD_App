@extends('layouts.app')

@section('content')
    <br>
    <a href="/posts" class="btn btn-info"><< Go back </a>
    <div>
        <h1>{{$post->title}}</h1>
    </div>
    <div>
        <p>{{$post->body}}</p>
    </div>    
    <small>Written on  {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id==$post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
            {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy',$post->id],'method' => 'POST', 'class' => 'float-right']) !!}
            {{ Form::hidden('_method', 'DELETE') }}
            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
            {!! Form::close() !!}
        @endif  
    @endif 
@endsection
 