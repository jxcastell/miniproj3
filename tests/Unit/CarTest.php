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
        $car-> year=2018;

        $this->assertTrue($car->save());
       // $this->assertTrue(true);
    }
    public function testModCar()
    {


        $car = Car::find(10);

        $car-> year='2000';

        $this->assertTrue($car->save());
    }
    public function testDelCar()
    {
        $car = Car::find(14);

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
    public function testYearCar()
    {
        $car = Car::find(20);
        $year = $car->year;
        echo "Year is: ".$year."\n";
        //dd($car);
        //$this->assertInstanceOf('int', $year);
        // $this->assertTrue(is_int(50));
        // $car->assertInstanceOf('int', year);
        // I had to go with a string test, faker dates returns strings.
        $this->assertTrue(is_string($year));

    }

    public function testModelCar()
    {
        $car = Car::find(20);
        $make = $car->make;
        echo "Make is: ".$make."\n";
        $this->assertContains($make, ['Ford', 'Honda', 'Toyota']);
    }
    public function testModelStringCar()
    {
        $car = Car::find(20);
        $model = $car->model;
        $this->assertTrue(is_string($model));
    }

}
