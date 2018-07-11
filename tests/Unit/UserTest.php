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
        $user-> name='John Smith';
        $user-> email='xx577@njit.edu';
        $user-> password='catWalk';

        $this->assertTrue($user->save());

        //$this->assertTrue(true);

    }
}
