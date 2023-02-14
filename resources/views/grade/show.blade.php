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

                <div class="allT">
                        <table class="firstT box tableHome table-striped text-center">
                                
                                <thead class="tableHead">
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
                                
                                <tbody>
                                    @foreach ($grades as $grade)
                                        <tr>
                                            <td> {{ $grade->subject }}</td>
                                            
											
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




                    <!-- ______________________________________ -->

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
