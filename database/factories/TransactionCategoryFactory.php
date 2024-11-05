<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TransactionCategoryFactory extends Factory
{
    protected $model = \App\Models\TransactionCategory::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Housing', 'Transportation', 'Food', 
                'Entertainment', 'Health', 'Credit Card',
                'Utility', 'Salary', 'Education', 'Other'
            ])
        ];
    }
}
