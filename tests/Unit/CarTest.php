<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
use PHPUnit\Framework\Constraint\IsType;

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
    public function testDelCar()
    {
        $car = Car::find(34);

        $this->assertTrue($car->delete());
    }
    public function testCountCar()
    {
        $cars = Car::all();
        echo 'Rows in the Cars database: '.$cars -> count()."\n";
        $recordCount = $cars->count();
        $this->assertInternalType(IsType::TYPE_INT,$recordCount );
        //$this->assertTrue(true);
    }

}
