<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAddCar()
    {
        $user = new Car();
        $user-> make='Ford';
        $user-> model='Escape';
        $user-> year='2018';

        $this->assertTrue($user->save());
       // $this->assertTrue(true);
    }
}
