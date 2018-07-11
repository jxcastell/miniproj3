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
        $car = new Car();
        $car-> make='Ford';
        $car-> model='Escape';
        $car-> year='2018';

        $this->assertTrue($car->save());
       // $this->assertTrue(true);
    }
    public function testModCar()
    {


        $car = Car::find(7);

        $car-> year='2000';

        $this->assertTrue($car->save());
    }


}
