<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $methods = [
            ['name' => 'Housing'],
            ['name' => 'Transportation'],
            ['name' => 'Food'],
            ['name' => 'Entertainment'],
            ['name' => 'Health'],
            ['name' => 'Credit Card'],
            ['name' => 'Utility'],
            ['name' => 'Salary'],
            ['name' => 'Education'],
            ['name' => 'Other'],
        ];

        DB::table('transaction_categories')->insert($methods);
    }
}
