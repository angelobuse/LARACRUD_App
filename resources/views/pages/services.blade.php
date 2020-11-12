@extends('layouts.app')
@section('content')
    <h1>Services page</h1>
        <p>{{$title}}</p>

        @if (count($services) > 0)
        <ol class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ol>   
        @endif
@endsection