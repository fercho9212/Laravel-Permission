@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {{ Form::model($post, array('route'=>array('post.update',$post->id),'method' => 'PUT')) }}
                <div class="form-group">
                    {{ Form::label('title', 'title', array('class' => 'awesome'))}}
                    {{ Form::input('text', 'title', null,['class'=>'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('body', 'body', array('class' => 'awesome'))}}
                    {{ Form::input('text', 'body', null,['class'=>'form-control']) }}
                </div>
                <br>
                <div class="form-group">
                    {{ Form::submit('Save', array('class' => 'well span6 btn btn-primary')) }}
                </div>
            {{ Form::close() }}           
        </div>
    </div>
@endsection