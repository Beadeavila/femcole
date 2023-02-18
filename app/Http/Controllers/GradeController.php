<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Grade;
use Illuminate\Http\Request;

/**
 * Class GradeController
 * @package App\Http\Controllers
 */
class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = Grade::paginate();

        return view('grade.index', compact('grades'))
            ->with('i', (request()->input('page', 1) - 1) * $grades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grade = new Grade();
        $user = User::pluck('name', 'id');
        return view('grade.create', compact('grade', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Grade::$rules);

        $grade = Grade::create($request->all());

        return redirect()->route('grades.index')
            ->with('success', 'Grade created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $grade = Grade::find($id);

        return view('grade.show', compact('user', 'grade'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grade = Grade::find($id);
        $user = User::pluck('name', 'id');
        return view('grade.edit', compact('grade', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Grade $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grade $grade)
    {
        request()->validate(Grade::$rules);

        $grade->update($request->all());

        return redirect()->route('grades.index')
            ->with('success', 'Grade updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $grade = Grade::find($id)->delete();

        return redirect()->route('grades.index')
            ->with('success', 'Grade deleted successfully');
    }

/*     public function calculateAveragesBySubjectAndTrimester()
{
    $subjects = Grade::select('subject')->distinct()->get();

    $averages = [];
    foreach ($subjects as $subject) {
        for ($trimester = 1; $trimester <= 3; $trimester++) {
            $grades = Grade::where('subject', $subject->subject)
                ->where('trimester', $trimester)
                ->whereIn('exam', [1, 2, 3])
                ->pluck('grade');
            $average = round($grades->average(), 0);
            $averages[] = [
                'subject' => $subject->subject,
                'trimester' => $trimester,
                'average' => $average
            ];
        }
    }

    return $averages;
}

public function showGradesByExamTrimesterSubject($exam, $trimester, $subject)
{
    $grades = Grade::where('exam', $exam)
                    ->where('trimester', $trimester)
                    ->where('subject', $subject)
                    ->get();

    $averages = $grades->groupBy(['subject', 'trimester', 'exam'])
                        ->map(function ($subjectGrades) {
                            $gradesSum = $subjectGrades->sum('grade');
                            $average = $gradesSum ? round($gradesSum / 3, 0) : 0;
                            return $average;
                        });

    return view('user.show', compact('averages', 'exam', 'trimester', 'subject'));
}


public function finalEvaluationBySubject()
{
    $subjects = Grade::select('subject')
                        ->groupBy('subject')
                        ->get();

    $finalEvaluations = [];

    foreach ($subjects as $subject) {
        $trimester1 = $this->averageBySubjectAndTrimester($subject->subject, 1);
        $trimester2 = $this->averageBySubjectAndTrimester($subject->subject, 2);
        $trimester3 = $this->averageBySubjectAndTrimester($subject->subject, 3);

        $finalEvaluation = ($trimester1 + $trimester2 + $trimester3) / 3;

        $finalEvaluations[$subject->subject] = $finalEvaluation;
    }

    return $finalEvaluations;
} */



}
