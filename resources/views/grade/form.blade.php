<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::select('user_id', $user, $grade->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('asignatura') }}
            {{ Form::select('subject',['lengua'=>'Lengua','inglés'=>'Inglés','matemáticas'=>'Matemáticas', 'historia'=>'Historia' ,'geografía'=>'Geografía'], $grade->subject, ['class' => 'form-control' . ($errors->has('subject') ? ' is-invalid' : ''), 'placeholder' => 'Asignatura']) }}
            {!! $errors->first('subject', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('trimestre') }}
            {{ Form::select('trimester',['1'=>'1','2'=>'2','3'=>'3'], $grade->trimester, ['class' => 'form-control' . ($errors->has('trimester') ? ' is-invalid' : ''), 'placeholder' => 'Trimestre']) }}
            {!! $errors->first('trimester', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('examen') }}
            {{ Form::select('exam',['1'=>'1','2'=>'2','3'=>'3'], $grade->exam, ['class' => 'form-control' . ($errors->has('exam') ? ' is-invalid' : ''), 'placeholder' => 'Examen']) }}
            {!! $errors->first('exam', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota') }}
            {{ Form::text('grade', $grade->grade, ['class' => 'form-control' . ($errors->has('grade') ? ' is-invalid' : ''), 'placeholder' => 'Nota']) }}
            {!! $errors->first('grade', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('curso escolar') }}
            {{ Form::text('schoolYear', $grade->schoolYear, ['class' => 'form-control' . ($errors->has('schoolYear') ? ' is-invalid' : ''), 'placeholder' => '2023']) }}
            {!! $errors->first('schoolYear', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>