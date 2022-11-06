<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'map' => $this->faker->sentence() ,
            'city' =>$this->faker->city(),
            'arabic_city' => $this->faker->city(),
            'street' => $this->faker->streetAddress() ,
            'arabic_street' => $this->faker->streetAddress(),
            'mobile' => $this->faker->phoneNumber() ,
            'phone' => $this->faker->phoneNumber() ,
            'email' => $this->faker->email() ,
        ];
    }
}
