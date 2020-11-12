@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <hr>    
                    <h3>Your blog posts</h3>

                    <table class="table table-striped">
                        <tr>
                            <th>
                                Title
                            </th>
                            <th>Action</th>
                        </tr>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td>
                                    <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
                                    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy',
                                    $post->id],'method' => 'POST', 'class' => 'float-right']) !!}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
