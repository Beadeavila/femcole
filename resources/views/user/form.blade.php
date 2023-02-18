<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('primer apellido') }}
            {{ Form::text('surname1', $user->surname1, ['class' => 'form-control' . ($errors->has('surname1') ? ' is-invalid' : ''), 'placeholder' => 'primer apellido']) }}
            {!! $errors->first('surname1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('segundo apellido') }}
            {{ Form::text('surname2', $user->surname2, ['class' => 'form-control' . ($errors->has('surname2') ? ' is-invalid' : ''), 'placeholder' => 'segundo apellido']) }}
            {!! $errors->first('surname2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <address class="form-group">
            {{ Form::label('password') }}
            {{ Form::text('password', $user->password, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'password']) }}
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('foto') }}
            {{ Form::file('image', ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'accept' => 'image/*']) }}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('role') }}
            {{ Form::text('isAdmin', $user->isAdmin, ['class' => 'form-control' . ($errors->has('isAdmin') ? ' is-invalid' : ''), 'placeholder' => 'Role']) }}
            {!! $errors->first('isAdmin', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Añadir Estudiante</button>
    </div>
</div>