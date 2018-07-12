<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
use App\User;


class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testAddUser()
    {
        $user = new User();
        $user-> name='Jorge Cats';
        $user-> email='xx5743@njit.edu';
        $user-> password='naremmyvvxx';

        $this->assertTrue($user->save());

        //$this->assertTrue(true);

    }

    public function testModUser()
    {
        $user = User::find(7);

        $user-> name='Steve Smith';
        //$user-> email='bc123@njit.com';
        //dd($user);
        $this->assertTrue($user->save());

        //$this->assertTrue(true);

    }
    public function testDelUser()
    {
        $user = User::find(18);


        $this->assertTrue($user->delete());

        //$this->assertTrue(true);

    }

    public function testCountUser()
    {
        $users = User::all();
        echo 'Rows in the Users database: '.$users -> count()."\n";
        $recordCount = $users->count();
        $this->assertInternalType(IsType::TYPE_INT,$recordCount );
        //$this->assertTrue(true);
    }
}
