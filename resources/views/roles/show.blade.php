@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="/roles/create" class="btn btn-primary">Create Role</a>
            <hr>    
            <h3>Your roles</h3>

            <table class="table table-striped table-dark">
                <tr>
                    <th>ID</th>
                    <th>#</th>
                    <th>#</th>
                </tr>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->name}}</td>
                        <td>{{$role->guard_name}}</td>
                        <td>
                            <a href="/roles/{{$role->id}}/edit" class="btn btn-success">Edit</a>
                            {!! Form::open(['action' => ['App\Http\Controllers\RolesController@destroy',
                            $role->id],'method' => 'POST', 'class' => 'float-right']) !!}
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


