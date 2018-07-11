<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
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
        $user-> name='susan Porch';
        $user-> email='xx5721@njit.edu';
        $user-> password='susan';

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
        $user = User::find(20);


        $this->assertTrue($user->delete());

        //$this->assertTrue(true);

    }
}
