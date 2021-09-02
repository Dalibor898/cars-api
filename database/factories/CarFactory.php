<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    private $engine_type = [
        'diesel',
        'petrol',
        'hybrid',
        'electro',
    ];

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand' => $this->faker->word(1),
            'model'=> $this->faker->word(1),
            'year' => $this->faker->year(),
            'maxSpeed' => $this->faker->numberBetween(20, 300),
            'isAutomatic' => $this->faker->boolean(),
            'engine' => $this->faker->randomElement($this->engine_type),
            'numberOfDoors' => $this->faker->numberBetween(2, 5),
        ];
    }
}
