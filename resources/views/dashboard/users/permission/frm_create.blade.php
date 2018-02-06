
        {{ Form::open(array('url' => 'permissions','method' => 'post')) }}
            <div class="form-group">
                {{ Form::label('Nombre', 'Nombre', array('class' => 'awesome'))}}
                {{ Form::input('text', 'name', null,['class'=>'form-control']) }}
            </div>

            <div class="form-group">
                @foreach($roles as $rol)
                    {{Form::checkbox('roles[]',$rol->id)}}
                    {{Form::label($rol->name,ucfirst($rol->name)) }}<br>
                @endforeach
            </div>

            <div class="form-group">
                {{ Form::submit('Save', array('class' => 'well span6 btn btn-primary')) }}
            </div>

        {{ Form::close() }}
