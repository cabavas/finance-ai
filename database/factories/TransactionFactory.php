<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\TransactionType;
use App\Models\TransactionCategory;
use App\Models\PaymentMethod;;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type_id' => TransactionType::inRandomOrder()->value('id'),
            'name' => fake()->words(2, true),
            'amount' => fake()->randomFloat(2, 10, 5000),
            'category_id' => TransactionCategory::inRandomOrder()->value('id'),
            'date' => fake()->dateTimeBetween('-1 year', 'now'),
            'user_id' => User::inRandomOrder()->value('id'),
            'payment_method_id' => PaymentMethod::inRandomOrder()->value('id'),
            'created_at' => fake()->dateTime(),
            'updated_at' => now(),
        ];
    }
}
