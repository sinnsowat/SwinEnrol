<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use App\Student;
use App\Unit;
use App\EnrolmentUnits;
use App\Config;
use App\StudentEnrolmentIssues;
use App\Course;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];

        $user = Auth::user();

        $student = Student::findOrFail($user->username);
        $data['student'] = $student;
        $course = Course::where('courseCode', '=', $student->courseCode)->first();
        $data['course'] = $course;
        $data['student'] = $student;
        $data['currentsem'] = Config::find('semester');
        $data['currentyear'] = Config::find('year');
        $data['phase'] = Config::find('enrolmentPhase');
        $enrolled = EnrolmentUnits::with('unit')->where([
            ['studentID', '=', $user->username],
            ['year', '=', Config::find('year')->value],
            ['semester', '=', Config::find('semester')->value],
        ])->get();
        $data['enrolled'] = $enrolled;

        $issues = StudentEnrolmentIssues::with('student', 'enrolment_issues')
        ->where('studentID', '=',$student->studentID)
        ->get();
        $data['issues'] = $issues;

        // get all the previous taken units (joined with Unit table) - that has a 'pass' grade
        $history = EnrolmentUnits::with('unit')->where('studentID', '=', $user->username)->where('grade', 'pass')->get();
        $data['history'] = $history;

        // get the exemptions
        $exempted = EnrolmentUnits::with('unit')->where('studentID', '=', $user->username)->where('status', '=', 'exempted')->get();
        $data['exempted'] = $exempted;

        return view ('student.student', $data);
    }

    public function downloadExcel()
    {
        $data = EnrolmentUnits::get()->toArray();
          Excel::create('unit_list_student', function($excel) use ($data) {
          $excel->sheet('mySheet', function($sheet) use ($data){
            $sheet->fromArray($data);
          });
        })->export('xls');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = [];

        $studentIn = Student::findOrFail($id);
        $data['studentIn'] = $studentIn;

        return view ('student.student',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $enrolled = EnrolmentUnits::with('unit')
            ->where([
                ['studentID', '=', $user->username],
                ['year', '=', Config::find('year')->value],
                ['semester', '=', Config::find('semester')->value],
            ])->get();
        $data['enrolled'] = $enrolled;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
