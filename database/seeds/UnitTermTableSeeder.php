<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UnitTermTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // *************** Study Planner ***************
        DB::table('unit_term')->insert([
			[
				'unitType' => 'study_planner',
				'unitCode' => 'ACC10007',
				'year' => 2016,
				'term' => 'Semester 1',
				'enrolmentTerm' => '0',
                'courseCode' => 'I047',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
            [
				'unitType' => 'study_planner',
				'unitCode' => 'HIT3158',
				'year' => 2016,
				'term' => 'Semester 1',
				'enrolmentTerm' => '1',
                'courseCode' => 'I047',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
            [
				'unitType' => 'study_planner',
				'unitCode' => 'HIT3310',
				'year' => 2016,
				'term' => 'Semester 1',
				'enrolmentTerm' => '2',
                'courseCode' => 'I047',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
            [
				'unitType' => 'study_planner',
				'unitCode' => 'HIT3315',
				'year' => 2016,
				'term' => 'Semester 1',
				'enrolmentTerm' => '3',
                'courseCode' => 'I047',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
            [
				'unitType' => 'study_planner',
				'unitCode' => 'MGT10001',
				'year' => 2016,
				'term' => 'Semester 1',
				'enrolmentTerm' => '4',
                'courseCode' => 'I047',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
            [
				'unitType' => 'study_planner',
				'unitCode' => 'HIT3158',
				'year' => 2016,
				'term' => 'Semester 1',
				'enrolmentTerm' => '4',
                'courseCode' => 'I047',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
            [
				'unitType' => 'study_planner',
				'unitCode' => 'HIT3310',
				'year' => 2016,
				'term' => 'Semester 1',
				'enrolmentTerm' => '5',
                'courseCode' => 'I047',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
            [
				'unitType' => 'study_planner',
				'unitCode' => 'HIT3310',
				'year' => 2016,
				'term' => 'Semester 1',
				'enrolmentTerm' => '8',
                'courseCode' => 'I047',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
            [
				'unitType' => 'study_planner',
				'unitCode' => 'HIT3158',
				'year' => 2016,
				'term' => 'Semester 2',
				'enrolmentTerm' => '0',
                'courseCode' => 'I047',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
            [
				'unitType' => 'study_planner',
				'unitCode' => 'MGT10001',
				'year' => 2016,
				'term' => 'Semester 2',
				'enrolmentTerm' => '0',
                'courseCode' => 'I047',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
            [
				'unitType' => 'study_planner',
				'unitCode' => 'HIT3315',
				'year' => 2016,
				'term' => 'Semester 2',
				'enrolmentTerm' => '0',
                'courseCode' => 'I047',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
            // *************** Foundation Units ***************
            [
				'unitType' => 'study_planner',
				'unitCode' => 'FO1',
				'year' => 2016,
				'term' => 'Semester 1',
				'enrolmentTerm' => '0',
                'courseCode' => 'FICT',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
            [
				'unitType' => 'study_planner',
				'unitCode' => 'FO2',
				'year' => 2016,
				'term' => 'Semester 1',
				'enrolmentTerm' => '0',
                'courseCode' => 'FICT',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
            // *************** Unit Listing ***************
            [
				'unitType' => 'unit_listing',
				'unitCode' => 'HIT3315',
				'year' => 2016,
				'term' => 'Semester 1',
				'enrolmentTerm' => 'long',
                'courseCode' => 'I047',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
            [
				'unitType' => 'unit_listing',
				'unitCode' => 'HIT3158',
				'year' => 2016,
				'term' => 'Semester 1',
				'enrolmentTerm' => 'long',
                'courseCode' => 'I047',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
            [
				'unitType' => 'unit_listing',
				'unitCode' => 'MGT10001',
				'year' => 2016,
				'term' => 'Semester 1',
				'enrolmentTerm' => 'long',
                'courseCode' => 'I047',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
            [
				'unitType' => 'unit_listing',
				'unitCode' => 'HIT3158',
				'year' => 2016,
				'term' => 'Semester 1',
				'enrolmentTerm' => 'short',
                'courseCode' => 'I047',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
            [
				'unitType' => 'unit_listing',
				'unitCode' => 'ACC10007',
				'year' => 2016,
				'term' => 'Semester 2',
				'enrolmentTerm' => 'long',
                'courseCode' => 'I047',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
            [
				'unitType' => 'unit_listing',
				'unitCode' => 'ACC10007',
				'year' => 2016,
				'term' => 'Semester 2',
				'enrolmentTerm' => 'short',
                'courseCode' => 'I047',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
            // *************** Foundation Units ***************
            [
				'unitType' => 'unit_listing',
				'unitCode' => 'FO1',
				'year' => 2016,
				'term' => 'Semester 1',
				'enrolmentTerm' => 'long',
                'courseCode' => 'FICT',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			],
            [
				'unitType' => 'unit_listing',
				'unitCode' => 'FO2',
				'year' => 2016,
				'term' => 'Semester 1',
				'enrolmentTerm' => 'long',
                'courseCode' => 'FICT',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			]
		]);
    }
}
