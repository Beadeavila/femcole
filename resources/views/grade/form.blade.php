<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::select('user_id', $user, $grade->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('subject') }}
            {{ Form::select('subject',['lengua'=>'Lengua','inglés'=>'Inglés','matemáticas'=>'Matemáticas', 'historia'=>'Historia' ,'geografía'=>'Geografía'], $grade->subject, ['class' => 'form-control' . ($errors->has('subject') ? ' is-invalid' : ''), 'placeholder' => 'Subject']) }}
            {!! $errors->first('subject', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('trimester') }}
            {{ Form::select('trimester',['1'=>'1','2'=>'2','3'=>'3'], $grade->trimester, ['class' => 'form-control' . ($errors->has('trimester') ? ' is-invalid' : ''), 'placeholder' => 'Trimester']) }}
            {!! $errors->first('trimester', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('exam') }}
            {{ Form::select('exam',['1'=>'1','2'=>'2','3'=>'3'], $grade->exam, ['class' => 'form-control' . ($errors->has('exam') ? ' is-invalid' : ''), 'placeholder' => 'Exam']) }}
            {!! $errors->first('exam', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('grade') }}
            {{ Form::text('grade', $grade->grade, ['class' => 'form-control' . ($errors->has('grade') ? ' is-invalid' : ''), 'placeholder' => 'Grade']) }}
            {!! $errors->first('grade', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('schoolYear') }}
            {{ Form::text('schoolYear', $grade->schoolYear, ['class' => 'form-control' . ($errors->has('schoolYear') ? ' is-invalid' : ''), 'placeholder' => '2023']) }}
            {!! $errors->first('schoolYear', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>