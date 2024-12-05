<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'voucher_no' => $this->faker->ean8,
            'total' => $this->faker->numberBetween(1,1000),
            'qty' => $this->faker->numberBetween(1,1000),
            'payment_slip' => $this->faker->imageUrl,
            'status' => rand(0,1),
            'note' => $this->faker->word,
            'item_id' => rand(1,10),
            'payment_id' => rand(1,10),
            'user_id' => rand(1,2)
        ];
    }
}
