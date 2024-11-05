<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PaymentMethodFactory extends Factory
{
    protected $model = \App\Models\PaymentMethod::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Cash',
                'Credit Card',
                'Debit Card',
                'Bank Transfer',
                'Bank Slip',
                'Pix',
                'Other'
            ])
        ];
    }
}
