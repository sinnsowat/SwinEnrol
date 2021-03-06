<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ManageStudentForSuperTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
        Artisan::call('migrate');
        Artisan::call('db:seed');
    }

    public function tearDown()
    {
        Artisan::call('migrate:rollback');
    }

    /**
     * Page Test(Frontend)
     * A test to add Studen (button)
     *
     * @return void
     */
    public function addStudent()
    {
        $this->visit('/super/managestudent')
            ->press('addSt')
            ->see('Add Student')
            ->onPage('/super/managestudent/create');
    }

    /**
     * Page Test(Frontend)
     * A test to edit Studen (button)
     *
     * @return void
     */
    public function editStudent()
    {
        $this->visit('/super/managestudent')
            ->press('editSt')
            ->see('Add Student')
            ->onPage('/super/managestudent/$user->username/edit');
    }

    /**
     * Page Test
     * SUCCESS TEST
     * A test to add Student (Controller)
     * Condition: Student exists
     * @return void
     */
    public function addStudentSuccess()
    {
        $user = factory(App\User::class)->create([
            'permissionLevel' => '1',
            'password' => bcrypt('123456'),
        ]);
        Input::replace(
        $input =
        [
            'username'=>'student',
            'password'=>bcrypt('123456')
        ]);

        Session::start();
        $response = $this->call('POST', '/login', [
            'username' => 'student',
            'password' => bcrypt('123456'),
            '_token' => csrf_token()
        ]);

        Post::shouldReceive('store')->once();
        $this->call('POST','super/managestudent/create');
        $this->assertRedirectedToRoute('super/managestudent');
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('login', $response->original->name());
    }

    /**
     * Page Test
     * FAIL TEST
     * A test to add Student  (Controller)
     * Condition: Student exists or empty
     * @return void
     */
    public function addStudentFail()
    {
        $user = factory(App\User::class)->create([
            'permissionLevel' => '3',
            'password' => bcrypt('123456'),
        ]);

        Input::replace(
        $input =
        [
            'username'=>'student',
            'password'=>bcrypt('123456')
        ]);
        Post::shouldReceive('store')->once();
        $this->assertRedirectedToRoute('super/managestudent');
        $this->assertSessionHasErrors();
    }

    /**
     * Page Test
     * SUCCESS TEST
     * A test to edit Student  (Controller)
     * Condition: Student  not exists or empty
     * @return void
     */
    public function editStudentSuccess()
    {
        $user = factory(App\User::class)->create([
            'permissionLevel' => '3',
            'password' => bcrypt('123456'),
        ]);

        Input::replace(
        $input =
        [
            'username'=>'student',
            'password'=>bcrypt('123456')
        ]);

        Session::start();
        $response = $this->call('POST', '/login', [
            'username' => 'student',
            'password' => bcrypt('123456'),
            '_token' => csrf_token()
        ]);

        Post::shouldReceive('update')->once();
        $this->call('POST','super/managestudent/$user->username/edit');
        $this->assertRedirectedToRoute('super/managestudent');
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('login', $response->original->name());
    }

    /**
     * Page Test
     * FAIL TEST
     * A test to edit Student (Controller)
     * Condition: Student exists or empty
     * @return void
     */
    public function editStudentFail()
    {
        $user = factory(App\User::class)->create([
            'permissionLevel' => '1',
            'password' => bcrypt('123456'),
        ]);

        Input::replace(
        $input =
        [
            'username'=>'',
            'password'=>''
        ]);
        Post::shouldReceive('update')->once();
        $this->assertRedirectedToRoute('super/managestudent');
        $this->assertSessionHasErrors();
    }


    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
