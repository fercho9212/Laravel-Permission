@extends('layouts.app')

@section('content')
<div class="container">
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
    <div class="row">
        <div class="col-md-4"> 
            {{ Form::open(array('url' => 'roles','method' => 'post')) }}
                <div class="form-group">
                    {{ Form::label('NOMBRE', 'NAME', array('class' => 'awesome'))}}
                    {{ Form::input('text', 'name', null,['class'=>'form-control']) }}
                </div>
                <div class="form-group">
                    @foreach($permissions as $permission)
                    {{ Form::checkbox('permissions[]',$permission->id)}}
                    {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>
                    @endforeach
                </div>
                    <br>
                <div class="form-group">
                    {{ Form::submit('Save', array('class' => 'well span6 btn btn-primary')) }}
                </div>
            {{ Form::close() }}
        </div>

                <div class="col-md-8">    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="alert alert-success" role="alert"><center>ROLES REGISTRADOS</center></div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>guard_name</th>
                                        <th>Id/th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($roles as $rol)
                                    <tr>
                                        <td>{{$rol->name}}</td>
                                        <td>{{$rol->guard_namel}}</td>
                                        <td>{{str_replace(array('[',']','"'),'', $rol->permissions()->pluck('name') )}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    
</div>
@endsection