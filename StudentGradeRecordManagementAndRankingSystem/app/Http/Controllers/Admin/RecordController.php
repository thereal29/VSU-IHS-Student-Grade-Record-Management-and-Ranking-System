<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentUser;
use App\Models\Curriculum;
use App\Models\CurriculumGrades;
use Illuminate\Support\Facades\DB;
class RecordController extends Controller
{
    public function index(){
        $records = DB::table('student_personal_details')->join('grades_per_subject', 'grades_per_subject.student_id', '=', 'student_personal_details.id')->join('subject', 'subject.id', '=', 'grades_per_subject.subject_id')->groupBy('student_personal_details.lrn_number')->get();
        return view('admin.academic_record', compact('records'));
    }
}
