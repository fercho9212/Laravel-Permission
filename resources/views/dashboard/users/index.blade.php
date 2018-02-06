@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="col-sm">
                    <div class="panel-heading">
                        <div class="alert alert-success" role="alert"><center>USUARIOS REGISTRADOS</center></div>
                    </div>
                </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="col-md-10 ">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Nivel</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{str_replace(array('[',']','"'),'',$user->roles()->pluck('name') )}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            @include('dashboard.users.frm_create')
        </div>
    </div>
</div>
@endsection
