@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? 'Show User' }}
@endsection

@section('content')
@php
    use Illuminate\Support\Facades\Storage;
@endphp
<div class="studentCard">
    <img src="{{ Storage::url($user->image) }}" alt="{{ $user->name }}" class="imageStudent">


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

{{-- <div class="allT">

	@foreach(range(1, 3) as $trimester)
    <table class="table tableHome table-striped text-center">
        <thead class="tableHead">
            <tr>
                <th colspan="{{ count($grades->pluck('exam')->unique()) + 1 }}">
                    Trimester {{ $trimester }}
                </th>
            </tr>
            <tr>
                <th>Asignatura</th>
                <th class="tableTrimesters">1 Nota</th>
                @foreach($grades->pluck('exam')->unique()->reject(fn($e) => $e == '1') as $exam)
                    <th class="tableTrimesters">{{ $exam }} Nota</th>
                @endforeach
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
                </tr>
            @endforeach
        </tbody>
    </table>
@endforeach --}}





{{-- Codigo LAIA --}}

@foreach(range(1, 3) as $trimester)
    <table class="table tableHome table-striped text-center">
        <thead class="tableHead">
            <tr>
                <th colspan="{{ count($grades->pluck('exam')->unique()) + 2 }}">
                    Trimester {{ $trimester }}
                </th>
            </tr>
            <tr>
                <th>Asignatura</th>
                <th class="tableTrimesters">1 Nota</th>
                @foreach($grades->pluck('exam')->unique()->reject(fn($e) => $e == '1') as $exam)
                    <th class="tableTrimesters">{{ $exam }} Nota</th>
                @endforeach
                <th class="tableTrimesters">Media</th>
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
                            $grades_sum = $subjectGrades->where('trimester', $trimester)->sum('grade');
                            /* $grades_count = $subjectGrades->where('trimester', $trimester)->count(); */
                            $average = $grades_sum ? round($grades_sum / 3, 0) : 0;
                        @endphp
                        {{ $average }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endforeach

</section>
@endsection