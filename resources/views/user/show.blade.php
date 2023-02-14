@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? 'Show User' }}
@endsection

@section('content')

    <div class="studentCard">
        <img src="{{$user->image}}" alt="Student's photo" class="imageStudent">
        <div class="infoStudent">
            <div>
                <strong>Nombre y Apellidos:</strong>
                {{ $user->name }} {{ $user->surname1 }} {{ $user->surname2 }}
            </div>
            <div>
                <strong>Curso: </strong>
                {{-- {{ $grades->schoolYear }} --}}
            </div>
            <div>
                <strong>Email:</strong>
                {{ $user->email }}
            </div>
        </div>
    </div>
                        
        <h2>Calificaciones de {{ $user->name }} {{ $user->surname1 }} {{ $user->surname2 }}</h2>
            @if(count($grades) > 0)
                <ul>
                    @foreach($grades as $grade)
                        <li>{{ $grade->subject }}: {{ $grade->grade }} {{$grade->trimester}} {{$grade->exam}}</li>
                    @endforeach
                </ul>
            @else
                <p>No hay calificaciones registradas para este usuario.</p>
            @endif
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
