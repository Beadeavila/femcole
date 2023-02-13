@extends('layouts.app')

@section('template_title')
    {{ $grade->name ?? 'Show Grade' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="studentCard">

            <img src="https://res.cloudinary.com/dog5ljnve/image/upload/v1675023061/logoFemCole_q4mump.png" alt="Paloma Babot" class="imageStudent">




                <div class="cardFem">
                    <div class="cardHeader">
                        <div class="float-left">
                            <span class="cardTitle">Show Grade</span>
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
