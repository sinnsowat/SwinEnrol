<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use App\UnitTerm;
use App\Course;
use App\Student;
use App\Config;

use Carbon\Carbon;

class ViewPlannerController extends Controller
{
    public function index(Request $request)
    {
        $input = $request->only([
            'year',
            'term',
            'courseCode'
        ]);

        $year = Config::find('year')->value;
        $semester = Config::find('semester')->value;

        $user = Auth::user();
        $student = Student::find($user->username);;

        if($input['year'] == 0)
        {
            $input['year'] = $year;
        }

        // default to current semester
        if($input['term'] == '')
            $input['term'] = $semester;

        // default to student's course
        if($input['courseCode'] == '')
            $input['courseCode'] = $student->courseCode;

        $data = [];
        $units = UnitTerm::with('unit', 'unit_type', 'course')
            ->where([
                ['unitType', '=', 'study_planner'],
                ['year', '=', $input['year']],
                ['term', '=', $input['term']],
                ['courseCode', '=', $input['courseCode']]
            ])
            ->get();
        $data['termUnits'] = $units;

        // get semester size
        $data['size'] = Config::find('semesterLength')->value;

        // get semester unit count
        for($n = 0; $n < $data['size']; $n++)
        {
            $count[$n] = UnitTerm::where([
                    ['year', '=', $year], // todo: get from user
                    ['term', '=', $semester], // todo: get from user
                    ['enrolmentTerm', '=', $n]
                ])->count();
        }
        $data['count'] = $count;

        // generate year/semester strings
        for($n = 0; $n < $data['size']; $n++)
            $term[$n] = 'Year ' . (1 + (($n - $n % 3) / 3)) . ' Semester ' . (1 + $n % 3);
        $data['term'] = $term;

        // get current year
        $data['currentYear'] = Carbon::now()->year;

        // get year
        $data['year'] = $input['year'];

        // get semester
        $data['semester'] = $input['term'];

        // get selected course
        $selectedCourse = Course::where('courseCode', '=', $input['courseCode'])->get();
        if(count($selectedCourse) > 0)
        {
            $data['courseCode'] = $selectedCourse[0]->courseCode;
            $data['courseName'] = $selectedCourse[0]->courseName;
        }
        else
        {
            $data['courseCode'] = '';
            $data['courseName'] = '';
        }

        // get all courses
        $data['courses'] = Course::all();

        return view('student.viewstudyplanner', $data);
    }
}
