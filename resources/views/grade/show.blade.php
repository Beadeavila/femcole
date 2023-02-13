@extends('layouts.app')

@section('template_title')
    {{ $grade->name ?? 'Show Grade' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Grade</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('grades.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $grade->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Subject:</strong>
                            {{ $grade->subject }}
                        </div>
                        <div class="form-group">
                            <strong>Trimester:</strong>
                            {{ $grade->trimester }}
                        </div>
                        <div class="form-group">
                            <strong>Exam:</strong>
                            {{ $grade->exam }}
                        </div>
                        <div class="form-group">
                            <strong>Grade:</strong>
                            {{ $grade->grade }}
                        </div>
                        <div class="form-group">
                            <strong>Schoolyear:</strong>
                            {{ $grade->schoolYear }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
