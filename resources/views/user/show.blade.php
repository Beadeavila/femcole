@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? 'Show User' }}
@endsection

@section('content')
@php
    use Illuminate\Support\Facades\Storage;
@endphp
    <div class="studentCard">
        <img src="{{ asset($user->image) }}" alt="{{ $user->name }}" class="imageStudent">


        <div class="infoStudent">
            <div>
                <strong>Nombre y Apellidos:</strong>
                {{ $user->name }} {{ $user->surname1 }} {{ $user->surname2 }}
            </div>
            <div>
                <strong>Curso: </strong>
                2022-2023
            </div>
            <div>
                <strong>Email:</strong>
                {{ $user->email }}
            </div>
        </div>
    </div>

    @foreach(range(1, 3) as $trimester)
        <table class="table tableHome table-striped text-center">
            <thead class="tableHead">
                <tr>
                    <th colspan="{{ count($grades->pluck('exam')->unique()) + 2 }}">
                        Trimestre {{ $trimester }}
                    </th>
                </tr>
                <tr>
                    <th>Asignatura</th>
                    <th class="tableTrimesters">Nota 1</th>
                    @foreach($grades->pluck('exam')->unique()->reject(fn($e) => $e == '1') as $exam)
                        <th class="tableTrimesters">Nota {{ $exam }}</th>
                    @endforeach
                    <th class="tableTrimesters">Final</th>
                </tr>
            </thead>
            <tbody>
                @foreach($grades->groupBy('subject') as $subject => $subjectGrades)
                    <tr>
                        <td>{{ $subject }}</td>
                        <td>
                            @foreach($subjectGrades->where('exam', '1')->where('trimester', $trimester) as $grade)
                                {{ $grade->grade }}
                            @endforeach
                        </td>
                        @foreach($grades->pluck('exam')->unique()->reject(fn($e) => $e == '1') as $exam)
                            <td>
                                @foreach($subjectGrades->where('exam', $exam)->where('trimester', $trimester) as $grade)
                                    {{ $grade->grade }}
                                @endforeach
                            </td>
                        @endforeach
                        <td>
                            @php
                                $gradesSum = $subjectGrades->where('trimester', $trimester)->sum('grade');
                                /* $grades_count = $subjectGrades->where('trimester', $trimester)->count(); */
                                $average = $gradesSum ? round($gradesSum / 3, 0) : 0;
                            @endphp
                            {{ $average }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endforeach
    {{-- <table class="table tableHome table-striped text-center">
        <thead class="tableHead">
            <tr>
                <th>Evaluación Final</th>
                <th>Asignatura</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($finalAverages as $subject => $trimesterAverages)
            <tr>
                <td>{{ $subject }}</td>
                @foreach ($trimesters as $trimester)
                    <td>{{$trimesterAverages[$trimester]}}</td>
                @endforeach
                <td>{{ round(array_sum($trimesterAverages) / 3, 0) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table> --}}
@endsection