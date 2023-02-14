<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::select('user_id', $user, $grade->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('subject') }}
            {{ Form::text('subject', $grade->subject, ['class' => 'form-control' . ($errors->has('subject') ? ' is-invalid' : ''), 'placeholder' => 'Subject']) }}
            {!! $errors->first('subject', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('trimester') }}
            {{ Form::text('trimester', $grade->trimester, ['class' => 'form-control' . ($errors->has('trimester') ? ' is-invalid' : ''), 'placeholder' => 'Trimester']) }}
            {!! $errors->first('trimester', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('exam') }}
            {{ Form::text('exam', $grade->exam, ['class' => 'form-control' . ($errors->has('exam') ? ' is-invalid' : ''), 'placeholder' => 'Exam']) }}
            {!! $errors->first('exam', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('grade') }}
            {{ Form::text('grade', $grade->grade, ['class' => 'form-control' . ($errors->has('grade') ? ' is-invalid' : ''), 'placeholder' => 'Grade']) }}
            {!! $errors->first('grade', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('schoolYear') }}
            {{ Form::text('schoolYear', $grade->schoolYear, ['class' => 'form-control' . ($errors->has('schoolYear') ? ' is-invalid' : ''), 'placeholder' => 'Schoolyear']) }}
            {!! $errors->first('schoolYear', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>