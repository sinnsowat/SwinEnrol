<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Config;
use App\EnrolmentUnits;
use App\Requisite;
use App\Unit;
use App\Student; // for testing

class PhaseController extends Controller
{
    /**
     * Approves units in the current enrolment
     *
     * @return json string with status
     */
    public static function unitApprove()
    {
        // get config setting
        $status = true;
        $year = Config::find('year')->value;
        $semester = Config::find('semester')->value;
        $phase = Config::find('enrolmentPhase')->value;
        $success = [];
        $failed = [];

        // check if short/long semester
        if($phase == '2')
            $length = 'short';
        else
            $length = 'long';

        // get students with pending enrolment units
        $data['students'] = $students = EnrolmentUnits::distinct()
            ->select('studentID')
            ->where('year', '=', $year)
            ->where('semester', '=', $semester)
            ->where('semesterLength', '=', $length)
            ->where('status', '=', 'pending')
            ->get();

        // check business rules
        foreach($students as $student)
        {
            // get all student's current pending units
            $pending = EnrolmentUnits::with('unit')
            ->where('studentID', '=', $student->studentID)
            ->where('year', '=', $year)
            ->where('semester', '=', $semester)
            ->where('semesterLength', '=', $length)
            ->where('status', '=', 'pending')
            ->get();

            // sort units, move units with corequisite to the back
            $units = [];
            foreach($pending as $unit)
            {
                $requisites = Requisite::where('unitCode', '=', $unit->unitCode)
                ->where('type', '=', 'corequisite')
                ->get();

                // check if corequisite exists
                if(count($requisites) > 0)
                {
                    $units[] = $unit; // push to end of array
                }
                else
                {
                    array_unshift($units, $unit); // push to front of array
                }
            }

            // get student's completed units
            $completed = EnrolmentUnits::where('studentID', '=', $student->studentID)
            ->where('grade', '=', 'pass')
            ->get();

            foreach($pending as $unit)
            {
                $status = true; // status for checking unit approval

                // already completed
                if(!$this->completedUnitCheck($unit, $completed))
                    $status = false;

                // check prerequisites
                if(!$this->prerequisiteCheck($unit, $completed))
                    $status = false;

                // check antirequisites
                if(!$this->antirequisiteCheck($unit, $completed, $success))
                    $status = false;

                // check credit points
                if(!$this->creditPointsCheck($unit, $completed))
                    $status = false;

                // check corequisite
                if(!$this->corequisiteCheck($unit, $completed, $success))
                    $status = false;

                if($status == true)
                {
                    // approve unit
                    EnrolmentUnits::where('studentID', '=', $student->studentID)
                    ->where('unitCode', '=', $unit->unitCode)
                    ->where('year', '=', $year)
                    ->where('semester', '=', $semester)
                    ->where('semesterLength', '=', $length)
                    ->update(['status' => 'confirmed']);

                    $success[] = $unit->unitCode;
                }
                else
                {
                    // disapprove unit
                    EnrolmentUnits::where('studentID', '=', $student->studentID)
                    ->where('unitCode', '=', $unit->unitCode)
                    ->where('year', '=', $year)
                    ->where('semester', '=', $semester)
                    ->where('semesterLength', '=', $length)
                    ->update(['status' => 'dropped']);

                    $failed[] = $unit->unitCode;
                }
            }
        }

        // debug
        $data['status'] = $status;
        $data['year'] = $year;
        $data['semester'] = $semester;
        $data['phase'] = $phase;
        $data['success'] = $success;
        $data['failed'] = $failed;

        // return response()->json($data); // for debug
        return $data;
    }

    /**
     * Test harness for testing unit approval
     *
     * @return json string with status
     */
    public static function unitCheck()
    {
        // get config setting
        $status = true;
        $year = 2016;
        $semester = 'Semester 1';
        $length = 'long';

        // get student
        $student = Student::find('4304373');

        // get student's completed units
        $completed = EnrolmentUnits::where('studentID', '=', $student->studentID)
        ->where('grade', '=', 'pass')
        ->get();

        // get unit
        $unit = Unit::find('PRE11');

        $data = $this->prerequisiteCheck($unit, $completed);

        return response()->json($data);
    }

    /**
     * Checks if the unit's prerequisites are met
     * Returns true if there are no prerequisites or if prerequisite conditions are met
     *
     * @return boolean with status
     */
    public static function prerequisiteCheck($unit, $completed)
    {
        $status = true; // status for prerequisite validity

        // get unit's prerequisites
        $prerequisites = Requisite::where('unitCode', '=', $unit->unitCode)
        ->where('type', 'LIKE', 'prerequisite%')
        ->get();

        // check if prerequisites exists
        if(count($prerequisites) > 0)
        {
            // sort prerequisites into array by index
            $array = [];
            foreach($prerequisites as $prerequisite)
            {
                $prerequisite->type = explode(' ', $prerequisite->type); // split type into array
                $array[$prerequisite->index][] = $prerequisite;
            }

            // check prerequisites if exists
            for($i = 0; $i < count($array); $i++)
            {
                $count = 0; // count to check number of prerequisites

                // count completed prerequisites in array
                foreach($array[$i] as $prerequisite)
                {
                    foreach($completed as $completedUnit)
                    {
                        // increment if unit is completed
                        if($prerequisite->requisite == $completedUnit->unitCode)
                            $count++;
                    }
                }

                // check if prerequisite is a group
                if(count($array[$i][0]['type']) > 1)
                {
                    // if minimum units not completed set status to false
                    if($count < $array[$i][0]['type'][1])
                        $status = false;
                }
                else
                {
                    // if no units completed set status to false
                    if($count == 0)
                        $status = false;
                }
            }
        }

        return $status;
    }

    /**
     * Checks if the unit's corequisites are met
     * Returns true if there are no corequisites or if corequisites conditions are met
     *
     * @return boolean with status
     */
    public static function corequisiteCheck($unit, $completed, $approvedUnits)
    {
        $status = true; // status for corequisite validity

        // get unit's corequisites
        $corequisites = Requisite::where('unitCode', '=', $unit->unitCode)
        ->where('type', '=', 'corequisite')
        ->get();

        // check corequisites if exists
        if(count($corequisites) > 0)
        {
            $count = 0; // count for number of corequisites

            // check each corequisite
            foreach($corequisites as $corequisite)
            {
                // check current enrolment
                foreach($approvedUnits as $approvedUnit)
                {
                    if($approvedUnit->unitCode == $corequisite->requisite)
                        $count++; // incremenmt if unit is enrolled
                }

                // check completed units
                foreach($completed as $completedUnit)
                {
                    if($completedUnit->unitCode == $corequisite->requisite)
                        $count++; // increment if unit is completed
                }
            }

            // return false if corequisites do not match
            if($count != count($corequisites))
                $status = false;
        }

        return $status;
    }

    /**
     * Checks if the unit's antirequisites are met
     * Returns true if there are no antirequisites or if antirequisites conditions are met
     *
     * @return boolean with status
     */
    public static function antirequisiteCheck($unit, $completed, $approvedUnits)
    {
        $status = true; // status for antirequisite validity

        // get antirequisites
        $antirequisites = Requisite::where('unitCode', '=', $unit->unitCode)
        ->where('type', '=', 'antirequisite')
        ->get();

        // check antirequisites if exists
        if(count($antirequisites) > 0)
        {
            // check each antirequisite
            foreach($antirequisites as $antirequisite)
            {
                // check current enrolment
                foreach($approvedUnits as $approvedUnit)
                {
                    // return false if antirequisite exists
                    if($approvedUnit->unitCode == $antirequisite->requisite)
                        $status = false;
                }

                // check completed units
                foreach($completed as $completedUnit)
                {
                    // return false if antirequisite exists
                    if($completedUnit->unitCode == $antirequisite->requisite)
                        $status = false;
                }
            }
        }

        return $status;
    }

    /**
     * Checks if the unit's credit points are met
     * Returns true if the unit's credit points requirement is equals or less than the student's current credit points
     *
     * @return boolean with status
     */
    public static function creditPointsCheck($unit, $completed)
    {
        $status = true; // status for checking credit points validity

        // credit points
        if($unit->creditPoints > count($completed) * 12.5)
            $status = false; // false if credit points not met

        return $status;
    }

    /**
     * Checks if the unit is completed
     * Returns true if the unit is not completed
     *
     * @return boolean with status
     */
    public static function completedUnitCheck($unit, $completed)
    {
        $status = true; // status for completed unit validity

        foreach($completed as $completedUnit)
        {
            if($unit->unitCode == $completedUnit->unitCode)
                $status = false;
        }

        return $status;
    }

    // /**
    //  * Finalizes units in the current enrolment
    //  *
    //  * @return json string with status
    //  */
    // public function unitLock()
    // {
    //     // get config setting
    //     $phase = Config::find('enrolmentPhase')->value;
    //     $year = Config::find('year')->value;
    //     $semester = Config::find('semester')->value;
    //
    //     // check if short/long semester
    //     if($phase == '2')
    //         $length = 'short';
    //     else
    //         $length = 'long';
    //
    //     // update all pending units
    //     EnrolmentUnits::where('unitCode', '=', $unit->unitCode)
    //     ->where('year', '=', $year)
    //     ->where('semester', '=', $semester)
    //     ->where('semesterLength', '=', $length)
    //     ->update(['status' => 'confirmed']);
    // }

    /**
     * Checks for event to change enrolment phase
     *
     * @return json string with status
     */
    public static function phaseTrigger()
    {
        $approval = [];
        // get config setting
        $phase = Config::find('enrolmentPhase');
        $year = Config::find('year');
        $semester = Config::find('semester');

        if($phase->value == '1')
        {
            $phase->value = '2';
        }
        else if($phase->value == '2')
        {
            $approval = $this->unitApprove();
            $phase->value = '3';
        }
        else if($phase->value == '3')
        {
            $phase->value = '4';
        }
        else if($phase->value == '4')
        {
            $phase->value = '5';
        }
        else if($phase->value == '5')
        {
            $approval = $this->unitApprove();
            $phase->value = '6';
        }
        else if($phase->value == '6')
        {
            $phase->value = '7';
        }
        else if($phase->value == '7')
        {
            $phase->value = '8';
        }
        else if($phase->value == '8')
        {
            if($semester->value == 'Semester 1')
            {
                // increment semester
                $semester->value = 'Semester 2';
                $semester->save();
                $phase->value = '1';
            }
            else
            {
                // increment year and semester
                $year->value = intval($year->value) + 1;
                $year->save();
                $semester->value = 'Semester 1';
                $semester->save();
                $phase->value = '1';
            }
        }

        $phase->save();

        // debug
        $data['phase'] = $phase->value;
        $data['year'] = $year->value;
        $data['semester'] = $semester->value;
        $data['approval'] = $approval;

    return response()->json($data);
    }
}
