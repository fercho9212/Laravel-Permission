@extends('layouts.app')
@section('content')

        <div class="container">
                <div class="alert alert-primary" role="alert">
                        <center>Permisos</center>
                </div>
            <div class="row">
                <div class="col-md-4">
                    @include('dashboard.users.permission.frm_create')
                </div>
                <div class="col-md-8">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Permisos</th>
                                    <th>Roles</th>
                                    <th>Fecha de creación</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($permissions as $permission)
                                <tr>
                                    <td>{{$permission->id}}</td>
                                    <td>{{$permission->name}}</td>
                                    <td>{{str_replace(array('[',']','"'),'',$permission->roles()->pluck('name') )}}</td>
                                    <td>{{$permission->created_at}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    

                </div>
            </div>
        </div>
@endsection
