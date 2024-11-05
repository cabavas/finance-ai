<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $methods = [
            ['name' => 'Cash'],
            ['name' => 'Credit Card'],
            ['name' => 'Debit Card'],
            ['name' => 'Bank Transfer'],
            ['name' => 'Bank Slip'],
            ['name' => 'Pix'],
            ['name' => 'Other']
        ];

        DB::table('payment_methods')->insert($methods);
    }
}
