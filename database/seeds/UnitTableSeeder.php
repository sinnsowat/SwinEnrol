<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('unit')->insert([
            [
                'unitCode' => 'HIT3315',
                'unitName' => 'Languages in Software Development',
                'prerequisite' => NULL,
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '0',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '[{\"convenor\":\"Brian Sim\"},{\"maxStudents\":\"10\"},{\"lectureDuration\":\"1.5\",\"lectureGroups\":\"1\",\"lecturers\":[\"Brian Sim\"],\"lecturers_count\":1},{\"tutorialDuration\":\"1.5\",\"tutorialGroups\":\"1\",\"tutors\":[\"Fish\"],\"tutors_count\":1}]',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'HIT3158',
                'unitName' => 'Software Engineering Project A',
                'prerequisite' => 'HIT3315',
                'corequisite' => 'MGT10001',
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '0',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '[{\"convenor\":\"Brian Sim\"},{\"maxStudents\":\"20\"},{\"lectureDuration\":\"1.5\",\"lectureGroups\":\"1\",\"lecturers\":[\"Brian Sim\"],\"lecturers_count\":1},{\"tutorialDuration\":\"1.5\",\"tutorialGroups\":\"1\",\"tutors\":[\"Fish\"],\"tutors_count\":1}]',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'HIT3310',
                'unitName' => 'Software Architecture and Design',
                'prerequisite' => NULL,
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '0',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '[{\"convenor\":\"Brian Sim\"},{\"maxStudents\":\"30\"},{\"lectureDuration\":\"1.5\",\"lectureGroups\":\"1\",\"lecturers\":[\"Brian Sim\"],\"lecturers_count\":1},{\"tutorialDuration\":\"1.5\",\"tutorialGroups\":\"2\",\"tutors\":[\"Fish\"],\"tutors_count\":1}]',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'HIT1234',
                'unitName' => 'Internet Technologies',
                'prerequisite' => NULL,
                'corequisite' => NULL,
                'antirequisite' => 'HIT1235',
                'minimumCompletedUnits' => '0',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '[{\"convenor\":\"Brian Sim\"},{\"maxStudents\":\"40\"},{\"lectureDuration\":\"1.5\",\"lectureGroups\":\"2\",\"lecturers\":[\"Brian Sim\"],\"lecturers_count\":1},{\"tutorialDuration\":\"1.5\",\"tutorialGroups\":\"3\",\"tutors\":[\"Fish\"],\"tutors_count\":1}]',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'HIT1235',
                'unitName' => 'Web Programming',
                'prerequisite' => NULL,
                'corequisite' => NULL,
                'antirequisite' => 'HIT1234',
                'minimumCompletedUnits' => '0',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '[{\"convenor\":\"Brian Sim\"},{\"maxStudents\":\"50\"},{\"lectureDuration\":\"1.5\",\"lectureGroups\":\"2\",\"lecturers\":[\"Brian Sim\"],\"lecturers_count\":1},{\"tutorialDuration\":\"1.5\",\"tutorialGroups\":\"4\",\"tutors\":[\"Fish\"],\"tutors_count\":1}]',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'MGT10001',
                'unitName' => 'Introduction to Management',
                'prerequisite' => NULL,
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '0',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '[{\"convenor\":\"Brian Sim\"},{\"maxStudents\":\"60\"},{\"lectureDuration\":\"1.5\",\"lectureGroups\":\"3\",\"lecturers\":[\"Brian Sim\"],\"lecturers_count\":1},{\"tutorialDuration\":\"1.5\",\"tutorialGroups\":\"4\",\"tutors\":[\"Fish\"],\"tutors_count\":1}]',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'ACC10007',
                'unitName' => 'Management Accounting',
                'prerequisite' => NULL,
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '0',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '[{\"convenor\":\"Brian Sim\"},{\"maxStudents\":\"70\"},{\"lectureDuration\":\"1.5\",\"lectureGroups\":\"3\",\"lecturers\":[\"Brian Sim\"],\"lecturers_count\":1},{\"tutorialDuration\":\"1.5\",\"tutorialGroups\":\"4\",\"tutors\":[\"Fish\"],\"tutors_count\":1}]',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'ACC10008',
                'unitName' => 'Management Accounting B',
                'prerequisite' => 'ACC10007',
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '0',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '[{\"convenor\":\"Brian Sim\"},{\"maxStudents\":\"80\"},{\"lectureDuration\":\"1.5\",\"lectureGroups\":\"4\",\"lecturers\":[\"Brian Sim\"],\"lecturers_count\":1},{\"tutorialDuration\":\"1.5\",\"tutorialGroups\":\"5\",\"tutors\":[\"Fish\"],\"tutors_count\":1}]',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'UNI20',
                'unitName' => 'A Unit With Many MinimumCompletedUnits',
                'prerequisite' => NULL,
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '20',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '[{\"convenor\":\"Brian Sim\"},{\"maxStudents\":\"90\"},{\"lectureDuration\":\"1.5\",\"lectureGroups\":\"4\",\"lecturers\":[\"Brian Sim\"],\"lecturers_count\":1},{\"tutorialDuration\":\"1.5\",\"tutorialGroups\":\"9\",\"tutors\":[\"Fish\"],\"tutors_count\":1}]',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'UNI2',
                'unitName' => 'A Unit With Few MinimumCompletedUnits',
                'prerequisite' => NULL,
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '2',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '[{\"convenor\":\"Brian Sim\"},{\"maxStudents\":\"100\"},{\"lectureDuration\":\"1.5\",\"lectureGroups\":\"4\",\"lecturers\":[\"Brian Sim\"],\"lecturers_count\":1},{\"tutorialDuration\":\"1.5\",\"tutorialGroups\":\"10\",\"tutors\":[\"Fish\"],\"tutors_count\":1}]',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'INFO',
                'unitName' => 'A Unit With Information',
                'unitCode' => 'COR30',
                'unitName' => 'A Unit With Corequisite',
                'prerequisite' => NULL,
                'corequisite' => 'COR01',
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '2',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '[{\"convenor\":\"Brian Sim\"},{\"maxStudents\":\"100\"},{\"lectureDuration\":\"1.5\",\"lectureGroups\":\"4\",\"lecturers\":[\"Brian Sim\"],\"lecturers_count\":1},{\"tutorialDuration\":\"1.5\",\"tutorialGroups\":\"10\",\"tutors\":[\"Fish\"],\"tutors_count\":1}]',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'COR01',
                'unitName' => 'Unit Taken With Corequisite',
                'prerequisite' => NULL,
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '2',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '[{\"convenor\":\"Brian Sim\"},{\"maxStudents\":\"100\"},{\"lectureDuration\":\"1.5\",\"lectureGroups\":\"4\",\"lecturers\":[\"Brian Sim\"],\"lecturers_count\":1},{\"tutorialDuration\":\"1.5\",\"tutorialGroups\":\"10\",\"tutors\":[\"Fish\"],\"tutors_count\":1}]',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'SHO27',
                'unitName' => 'Short Semester Unit',
                'prerequisite' => NULL,
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '0',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '[{\"convenor\":\"Brian Sim\"},{\"maxStudents\":\"100\"},{\"lectureDuration\":\"1.5\",\"lectureGroups\":\"4\",\"lecturers\":[\"Brian Sim\"],\"lecturers_count\":1},{\"tutorialDuration\":\"1.5\",\"tutorialGroups\":\"10\",\"tutors\":[\"Fish\"],\"tutors_count\":1}]',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'FO1',
                'unitName' => 'Foundation Unit 1',
                'prerequisite' => NULL,
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '0',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '[{\"convenor\":\"Brian Sim\"},{\"maxStudents\":\"100\"},{\"lectureDuration\":\"1.5\",\"lectureGroups\":\"4\",\"lecturers\":[\"Brian Sim\"],\"lecturers_count\":1},{\"tutorialDuration\":\"1.5\",\"tutorialGroups\":\"10\",\"tutors\":[\"Fish\"],\"tutors_count\":1}]',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'FO2',
                'unitName' => 'Foundation Unit 2',
                'prerequisite' => NULL,
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '0',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '[{\"convenor\":\"Brian Sim\"},{\"maxStudents\":\"100\"},{\"lectureDuration\":\"1.5\",\"lectureGroups\":\"4\",\"lecturers\":[\"Brian Sim\"],\"lecturers_count\":1},{\"tutorialDuration\":\"1.5\",\"tutorialGroups\":\"10\",\"tutors\":[\"Fish\"],\"tutors_count\":1}]',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'HIT1312',
                'unitName' => 'Computer and Logic Essentials',
                'prerequisite' => NULL,
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '2',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'HIT2080',
                'unitName' => 'Introduction to Programming',
                'prerequisite' => NULL,
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '2',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'HIT2120',
                'unitName' => 'Data Communications and Security',
                'prerequisite' => 'HIT3181',
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '2',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'HIT3181',
                'unitName' => 'Technical Software Development',
                'prerequisite' => 'HIT2080',
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '2',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'HIT1402',
                'unitName' => 'Database Analysis and Design',
                'prerequisite' => NULL,
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '2',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'HIT3172',
                'unitName' => 'Object-Oriented Programming in C++',
                'prerequisite' => 'HIT3181',
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '2',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'HIT3309',
                'unitName' => 'Software Project Practices and Management',
                'prerequisite' => 'HIT3181',
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '2',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'HIT2312',
                'unitName' => 'Computer Systems',
                'prerequisite' => 'HIT1312',
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '2',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'HIT2308',
                'unitName' => 'Software Development Practices',
                'prerequisite' => 'HIT3181',
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '2',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'HIT2316',
                'unitName' => 'Usability',
                'prerequisite' => NULL,
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '2',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'HIT3044',
                'unitName' => 'Professional Issues in IT',
                'prerequisite' => NULL,
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '12',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'HIT3311',
                'unitName' => 'Software Deployment and Evolution',
                'prerequisite' => 'HIT3309',
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '2',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'HIT3258',
                'unitName' => 'Software Engineering Project B',
                'prerequisite' => 'HIT3158',
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '2',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'HIT3002',
                'unitName' => 'Introduction to Artificial Intelligence',
                'prerequisite' => 'HIT3172',
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '2',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'HIT3037',
                'unitName' => 'Programming in Java',
                'prerequisite' => 'HIT3172',
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '2',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'COS20007',
                'unitName' => 'OBJECT-ORIENTED PROGRAMMING',
                'prerequisite' => NULL,
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '2',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'unitCode' => 'HIT1401',
                'unitName' => 'Introduction to Business Information Systems',
                'prerequisite' => NULL,
                'corequisite' => NULL,
                'antirequisite' => NULL,
                'minimumCompletedUnits' => '2',
                'maxStudentCount' => 100,
                'lectureGroupCount' => 10,
                'lectureDuration' => '2h',
                'tutorialGroupCount' => 10,
                'tutorialDuration' => '2h',
                'unitInfo' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
