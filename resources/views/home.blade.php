@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
    </div>
</div>
<section class="content container-fluid">
    <div class="studentCard">
        
                <div class="cardFem">
                    <div class="cardHeader">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card-title" class="cardTitle">
                                {{ __('Grade') }}
                            </span>

                            <div class="float-right">
                            <a href="{{ route('grades.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Create New') }}
                            </a>
                            </div>
                    </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif


{{-- @foreach ($grades as $grade)
<p>
{{ $grade->user->name }}
</p>
@endforeach --}}



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
                                            <td>{{ ++$i }} {{ $grade->subject }}</td>
                                            
											
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
                </div>
                {!! $grades->links() !!}
            
        </div>
    </div>
@endsection
