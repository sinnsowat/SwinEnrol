<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EnrolmentUnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('enrolment_units')->insert([
            [
                'studentID' => '4318595',
                'unitCode' => 'HIT3158',
                'year' => 2016,
                'term' => 'Semester 1',
                'status' => 'pending',
                'result' => 0.00,
                'grade' => 'ungraded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'studentID' => '4318595',
                'unitCode' => 'MGT10001',
                'year' => 2016,
                'term' => 'Semester 2',
                'status' => 'confirmed',
                'result' => 0.00,
                'grade' => 'ungraded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'studentID' => '4318595',
                'unitCode' => 'ACC10007',
                'year' => 2016,
                'term' => 'Semester 2',
                'status' => 'confirmed',
                'result' => 0.00,
                'grade' => 'ungraded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'studentID' => '4315405',
                'unitCode' => 'MGT10001',
                'year' => 2016,
                'term' => 'Semester 1',
                'status' => 'pending',
                'result' => 0.00,
                'grade' => 'ungraded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'studentID' => '4315405',
                'unitCode' => 'HIT3158',
                'year' => 2016,
                'term' => 'Semester 2',
                'status' => 'pending',
                'result' => 0.00,
                'grade' => 'ungraded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'studentID' => '4315405',
                'unitCode' => 'MGT10001',
                'year' => 2016,
                'term' => 'Semester 2',
                'status' => 'confirmed',
                'result' => 0.00,
                'grade' => 'ungraded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'studentID' => '4315405',
                'unitCode' => 'ACC10007',
                'year' => 2016,
                'term' => 'Semester 2',
                'status' => 'confirmed',
                'result' => 0.00,
                'grade' => 'ungraded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // ********** Unit Approval Testing **********
            [
                'studentID' => '4304373',
                'unitCode' => 'HIT1234',
                'year' => 2015,
                'term' => 'Semester 1',
                'status' => 'confirmed',
                'result' => 65.00,
                'grade' => 'pass',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'studentID' => '4304373',
                'unitCode' => 'HIT3315',
                'year' => 2015,
                'term' => 'Semester 1',
                'status' => 'confirmed',
                'result' => 65.00,
                'grade' => 'pass',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'studentID' => '4304373',
                'unitCode' => 'ACC10007',
                'year' => 2015,
                'term' => 'Semester 1',
                'status' => 'dropped',
                'result' => 0.00,
                'grade' => 'fail',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // success scenario
            [
                'studentID' => '4304373',
                'unitCode' => 'MGT10001',
                'year' => 2016,
                'term' => 'Semester 1',
                'status' => 'pending',
                'result' => 0.00,
                'grade' => 'ungraded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'studentID' => '4304373',
                'unitCode' => 'UNI2',
                'year' => 2016,
                'term' => 'Semester 1',
                'status' => 'pending',
                'result' => 0.00,
                'grade' => 'ungraded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'studentID' => '4304373',
                'unitCode' => 'HIT3158',
                'year' => 2016,
                'term' => 'Semester 1',
                'status' => 'pending',
                'result' => 0.00,
                'grade' => 'ungraded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // already completed
            [
                'studentID' => '4304373',
                'unitCode' => 'HIT1234',
                'year' => 2016,
                'term' => 'Semester 1',
                'status' => 'pending',
                'result' => 0.00,
                'grade' => 'ungraded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // prerequisite
            [
                'studentID' => '4304373',
                'unitCode' => 'ACC10008',
                'year' => 2016,
                'term' => 'Semester 1',
                'status' => 'pending',
                'result' => 0.00,
                'grade' => 'ungraded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // antirequisite
            [
                'studentID' => '4304373',
                'unitCode' => 'HIT1235',
                'year' => 2016,
                'term' => 'Semester 1',
                'status' => 'pending',
                'result' => 0.00,
                'grade' => 'ungraded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // minimumCompletedUnits
            [
                'studentID' => '4304373',
                'unitCode' => 'UNI20',
                'year' => 2016,
                'term' => 'Semester 1',
                'status' => 'pending',
                'result' => 0.00,
                'grade' => 'ungraded',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
