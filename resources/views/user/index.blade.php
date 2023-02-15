@extends('layouts.app')

@section('template_title')
    User
@endsection

@section('content')
<div class="homeContainer">
    <div class="buttonCotainer">
            <a class="aAddButton" href="{{ route('register') }}">
                <button class="addStudentButton btn btn-primary">
                    <div class="textAddButton">AÑADIR ALUMNO</div>
                </button>
            </a>
    </div>
                            
                                {{-- <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Create New') }}
                                </a> --}}
        
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="tableContainer">
                        <div class="listStudents">LISTADO DE ALUMNOS</div>


                        <table class="table tableHome table-striped text-center">
                            <thead class="tableHead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Email</th>
										<th>Isadmin</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $user->name }}</td>
											<td>{{ $user->email }}</td>
											<td>{{ $user->isAdmin }}</td>

                                            <td>
                                                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('users.show',$user->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('users.edit',$user->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                </div>
                {!! $users->links() !!}
        
    </div>
@endsection
