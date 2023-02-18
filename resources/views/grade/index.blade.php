@extends('layouts.app')

@section('template_title')
    Notas
@endsection

@section('content')

    <div class="homeContainer">
        <div class="buttonContainer">
            <a class="addButton" href="{{ route('grades.create') }}"> 
                <button class="addStudentButton btn btn-primary">
                    <div class="textAddButton">AÑADIR NOTA</div>
                </button>
            </a>
        </div>




{{-- <section class="content container-fluid">
    <div class="studentCard">
        
                <div class="cardFem">
                    <div class="cardHeader">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title" class="cardTitle">
                                {{ __('Grade') }}
                            </span>

                
                    </div>
                    </div> --}}
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="tableContainer">
            <div class="listStudents">LISTA DE NOTAS</div>
                <table class="table tableHome table-striped text-center">
                    <thead class="tableHead">
                        <tr>
                            {{-- <td rowspan="2" class="align-middle"></td>
                            <td colspan="4">PRIMER TRIMESTRE</td> --}}
                            <th>Nº</th>
                            <th>Estudiante</th>
                            <th>Asignatura</th>
                            <th>Trimestre</th>
                            <th>Examen</th>
                            <th>Nota</th>
                            <th>Curso Escolar</th>
                            <th></th>
                        </tr>

                        {{-- <tr class="tableNotes"> 
                            <td>Nota 1</td>
                            <td>Nota 2</td>
                            <td>Nota 3</td>
                            <td>Final</td>
                        </tr> --}}
                    </thead>
                    <tbody>
                        @foreach ($grades as $grade)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $grade->user->name}} {{ $grade->user->surname1}} {{ $grade->user->surname2}}</td>
                                <td>{{ $grade->subject }}</td>
                                <td>{{ $grade->trimester }}</td>
                                <td>{{ $grade->exam }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->schoolYear }}</td>
                                <td>
                                    <form action="{{ route('grades.destroy',$grade->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('grades.show',$grade->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('grades.edit',$grade->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {!! $grades->links() !!}
        </div>
    </div>
@endsection
