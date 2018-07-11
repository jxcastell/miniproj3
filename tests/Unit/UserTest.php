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
        $user-> name='Marge Hilton';
        $user-> email='xx5712@njit.edu';
        $user-> password='ironBoard';

        $this->assertTrue($user->save());

        //$this->assertTrue(true);

    }
    public function testModUser()
    {
        $user = User::find(1);

        $user-> name='Steve Smith';
        //$user-> email='bc123@njit.com';
        //dd($user);
        $this->assertTrue($user->save());
        
        //$this->assertTrue(true);

    }
}
