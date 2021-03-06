<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StudentRecordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('eduversal')->table('student_records')->insert([
            [
                'studentID' => '4304373',
                'surname' => 'Thomas Chew',
                'givenName' => 'Jason',
                'courseCode' => 'I047',
                'year' => 2016,
                'term' => 'Semester 1',
                'paymentStatus' => 'paid',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'studentID' => '4318595',
                'surname' => 'Bin Khalid',
                'givenName' => 'Mohamad Yuzrie',
                'courseCode' => 'I047',
                'year' => 2016,
                'term' => 'Semester 1',
                'paymentStatus' => 'paid',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'studentID' => '4315405',
                'surname' => 'Haque',
                'givenName' => 'Sariful',
                'courseCode' => 'I047',
                'year' => 2016,
                'term' => 'Semester 1',
                'paymentStatus' => 'paid',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'studentID' => 'student',
                'surname' => 'name',
                'givenName' => 'student',
                'courseCode' => 'I047',
                'year' => 2016,
                'term' => 'Semester 1',
                'paymentStatus' => 'paid',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'studentID' => 'articulate',
                'surname' => 'student',
                'givenName' => 'articulating',
                'courseCode' => 'FICT',
                'year' => 2016,
                'term' => 'Semester 1',
                'paymentStatus' => 'paid',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'studentID' => 'articulatefail',
                'surname' => 'fail',
                'givenName' => 'articulate',
                'courseCode' => 'FICT',
                'year' => 2016,
                'term' => 'Semester 1',
                'paymentStatus' => 'paid',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
