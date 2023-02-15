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

            <div class="allT">
                    <table class="firstT box table-striped text-center">
                        <thead>
                            <tr>
                                <td rowspan="2" class="align-middle"></td>
                                <td colspan="4">PRIMER TRIMESTRE</td>
                            </tr>
                            <tr class="tableNotes">
                                <td>Nota 1</td>
                                <td>Nota 2</td>
                                <td>Nota 3</td>
                                <td>Final</td>
                            </tr>
                        </thead>
                        @if(count($grades) > 0)
                        <tbody>
                        @foreach($grades as $grade)
                            <tr>
                                @switch($grade->subject)
                                    @case('Inglés')
                                        {{ $grade->subject }}

                                        @switch($grade->exam)
                                            @case('1')
                                                <td>{{ $grade->grade }}</td>
                                            @break

                                            @case('2')
                                                <td>{{ $grade->grade }}</td>
                                            @break

                                            @case('3')
                                                <td>{{ $grade->grade }}</td>
                                            @break
                                        @endswitch
                                    @break
                                @endswitch
                            </tr>
                            <tr>Donde estoy</tr>
                        @endforeach
                        </tbody>
                    </table>
                
                </div>
                @else
                <p>No hay calificaciones registradas para este usuario.</p>
                @endif
            </div>
            
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
