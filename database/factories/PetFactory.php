<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'species'=>$this->faker->sentence(),
            'birth-date'=>$this->faker->date(),
            'death-date'=>$this->faker->date(),
            'note'=>$this->faker->sentence()
        ];
    }
}
