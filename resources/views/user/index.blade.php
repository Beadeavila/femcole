@extends('layouts.app')

@section('template_title')
    Estudiante
@endsection

@section('content')
    <div class="homeContainer">
        <div class="buttonContainer">
            <a class="addButton" href="{{ route('users.create') }}">
                <button class="addStudentButton btn btn-primary">
                    <div class="textAddButton">AÑADIR ESTUDIANTE</div>
                </button>
            </a>
        </div>
        <div class="tableContainer">
            <div class="listStudents">LISTA DE ESTUDIANTES</div>
            @if ($message = Session::get('success')) 
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div> 
            @endif
                <table class="table tableHome table-striped text-center">
                    <thead class="tableHead">
                        <tr>
                            <th style="font-size:17px;color:white;"><strong>Nº</strong></th>
                            <th style="font-size:17px;color:white;"><strong>Nombre y Apellidos</strong></th>
                            {{-- <th>Email</th>
                            <th>Role (0=Alumno,1=Profesor)</th> --}}
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $user->name }} {{ $user->surname1 }} {{ $user->surname2 }}</td>
                                {{-- <td>{{ $user->email }}</td>
                                <td>{{ $user->isAdmin }}</td> --}}
                                <td>
                                    <form action="{{ route('users.destroy',$user->id) }}" method="POST"  class="buttonsCrud">
                                        <a class="btnCrud green btn-purpleB editButton" href="{{ route('users.show',$user->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                        <a class="btnCrud blue btn-purpleB editButton" href="{{ route('users.edit',$user->id) }}"><i class="fa fa-fw fa-edit"></i> Modificar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm ('¿Estás seguro de querer borrar a {{ $user->name }}?')"class="bt-adm m-1 d-flex red justify-content-center align-items-center"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {!! $users->links() !!}    
    </div>
@endsection
