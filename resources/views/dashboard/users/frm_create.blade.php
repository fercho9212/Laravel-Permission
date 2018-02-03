<div class="">
    <div class="row" style="width:100% !important">
        {{ Form::open(array('url' => 'home','method' => 'post')) }}
            <div class="form-group">
                {{ Form::label('Nombre', 'Nombre', array('class' => 'awesome'))}}
                {{ Form::input('text', 'name', null,['class'=>'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('Correo', 'Correo', array('class' => 'awesome'))}}
                {{ Form::input('text', 'email', null,['class'=>'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('Password', 'Password', array('class' => 'awesome'))}}
                {{ Form::input('text', 'password', null,['class'=>'form-control']) }}
            </div>
            <div class='form-group'>
                @foreach ($roles as $role)
                    {{ Form::checkbox('roles[]',  $role->id ) }}
                    {{ Form::label($role->name, ucfirst($role->name)) }}<br>
                @endforeach
            </div>    
            <br>

            <div class="form-group">
                {{ Form::submit('Save', array('class' => 'well span6 btn btn-primary')) }}
            </div>

        {{ Form::close() }}
    
    </div>
</div>