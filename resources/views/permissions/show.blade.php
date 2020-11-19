@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="/permissions/create" class="btn btn-primary">Create Permission</a>
            <hr>    
            <h3>Your permissions</h3>

            <table class="table table-striped table-dark">
                <tr>
                    <th>ID</th>
                    <th>#</th>
                    <th>#</th>
                </tr>
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{$permission->id}}</td>
                        <td>{{$permission->name}}</td>
                        <td>{{$permission->guard_name}}</td>
                        <td>
                            <a href="/permissions/{{$permission->id}}/edit" class="btn btn-success">Edit</a>
                            {!! Form::open(['action' => ['App\Http\Controllers\PermissionsController@destroy',
                            $permission->id],'method' => 'POST', 'class' => 'float-right']) !!}
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
@endsection


