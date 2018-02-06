
@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach($posts as $post)
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        {{$post->title}}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">{{$post->body}}</p>
                        
                            {!! Form::open(['method' => 'DELETE', 'route' => ['post.destroy', $post->id] ]) !!}                           
                             <a href="#" class="btn btn-primary">Go somewhere</a>
                             <a  href="{{route('post.edit',$post->id)}}" class="btn btn-warning">Edit</a>   
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}                       
                            {!! Form::close() !!}
                       
                    </div>
                </div>
            </div>           
        </div>
        @endforeach
    </div>
@endsection
