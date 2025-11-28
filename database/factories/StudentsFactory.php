<?php

namespace Database\Factories;
use App\Models\Students;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "name"=>$this->faker->name(),
            "lastName"=>$this->faker->lastName(),
            "score"=>$this->faker->numberBetween(5,100),
            "age"=>$this->faker->numberBetween(10,80),
           "gender"=>$this->faker->randomElement(["m","f"]),


        ];
    }
}