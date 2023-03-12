@extends('layouts.app')

@section('template_title')
    {{ $grade->name ?? 'Show Grade' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="studentCard">
            {{-- <img src="https://res.cloudinary.com/dog5ljnve/image/upload/v1675023061/logoFemCole_q4mump.png" alt="Paloma Babot" class="imageStudent"> --}}

            <div class="cardFem">
                <div class="cardHeader">
                    <div class="float-left">
                        <span class="cardTitle">Show Grade</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('grades.index') }}"> Back</a>
                    </div>
                </div>
                <div class="allT">
                    <table class="firstT box table-striped text-center">
                        <thead>
                            <tr>
                                <td rowspan="2" class="align-middle"></td>
                                <td colspan="4">TRIMESTRE</td>
                            </tr>
                            <tr class="tableNotes">
                                <td>Nota Examen 1</td>
                                <td>Nota Examen 2</td>
                                <td>Nota Examen 3</td>
                                <td>Media trimestral</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $grade->subject }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                            </tr>
                            <tr>
                                <td>{{ $grade->subject }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                            </tr>
                            <tr>
                                <td>{{ $grade->subject }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                            </tr>
                            <tr>
                                <td>{{ $grade->subject }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                            </tr>
                            <tr>
                                <td>{{ $grade->subject }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection