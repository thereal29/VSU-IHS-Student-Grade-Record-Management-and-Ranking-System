<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentUser;
use App\Models\Curriculum;
use App\Models\CurriculumGrades;
use Illuminate\Support\Facades\DB;
class CurriculumController extends Controller
{
    public function index(Request $request){
       // $cur = Curriculum::all();
        
        if($request->gradelevel != null){
            $subjects = DB::table('student_personal_details')->join('grades_per_subject', 'grades_per_subject.student_id', '=', 'student_personal_details.id')->join('subject', 'subject.id', '=', 'grades_per_subject.subject_id')->where('student_personal_details.grade_level', $request->gradelevel)->groupBy('grades_per_subject.subject_id')->select('*', DB::raw('count(grades_per_subject.student_id) AS totalstudents'))->get();
        }
        elseif($request->gradelevel == 'None'){
            $subjects = DB::table('subject')
            ->select('*')
            ->whereNotExists(function ($query) {
                $query->from('grades_per_subject')
                    ->select('*')
                    ->where('subject.id','=',DB::raw('grades_per_subject.subject_id'));
            })
            ->groupBy('subject_name')
            ->get();
        }else{
            $subjects = DB::table('subject')->groupBy('subject.subject_name')->select("*")->get();
        }
        $flag = $request->gradelevel;
       // $totalstudents = $subjects->count();
      //  $totalstudents = DB::table('grades_per_subject')->join('student_personal_details', 'grades_per_subject.student_id', '=', 'student_personal_details.id')->where('student_personal_details.grade_level', $request->gradelevel)->groupBy('grades_per_subject.subject_id')->count();
        // $subjects = $students->when($request->gradelevel != null, function ($q) use ($request){
        //     return $q->where('student_personal_details.grade_level', $request->gradelevel);
        // });
       
    //    $students = CurriculumGrades::all()->where('student_id', StudentUser::select('id'));
      //  $query = Curriculum::all()->count(StudentUser::select('grade_level'))->((join(Subject::all(), CurriculumGrades::select('subject_id', '=', Subject::select('id'))))->join(StudentUser::all(), StudentUser::select('id'), '=', CurriculumGrades::select('student_id'))->where(StudentUser::select('grade_level'), $request->gradelevel))->groupBy(Curriculum::select('subject_id'))->get();
        return view('admin.curriculum', compact('subjects', 'flag'));
    }
    public function addCurriculum(Request $request){
        $curriculum = new Curriculum;
        $curriculum->subject_name = $request->input('subjectname');
        $curriculum->save();
        return redirect()->route('admin.curriculum')->with('success', 'Curriculum Successfully Created');
    }
}

