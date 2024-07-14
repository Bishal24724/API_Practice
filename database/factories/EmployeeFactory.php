<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employees;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Employee::class;
    public function definition(): array
    {
        return [
            //
            "name"=> $this->faker->name,
            "age"=>$this->faker->numberBetween(20,50),
            "city"=>$this->faker->city,
            "gender"=>$this->faker->randomElement(['male','female']),


        ];
    }
}
