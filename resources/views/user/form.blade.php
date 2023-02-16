<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('surname1') }}
            {{ Form::text('surname1', $user->surname1, ['class' => 'form-control' . ($errors->has('surname1') ? ' is-invalid' : ''), 'placeholder' => 'surname1']) }}
            {!! $errors->first('surname1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('surname2') }}
            {{ Form::text('surname2', $user->surname2, ['class' => 'form-control' . ($errors->has('surname2') ? ' is-invalid' : ''), 'placeholder' => 'surname2']) }}
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
            {{ Form::label('image') }}
            {{ Form::text('image', $user->image, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'image']) }}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('isAdmin') }}
            {{ Form::text('isAdmin', $user->isAdmin, ['class' => 'form-control' . ($errors->has('isAdmin') ? ' is-invalid' : ''), 'placeholder' => 'Isadmin']) }}
            {!! $errors->first('isAdmin', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>