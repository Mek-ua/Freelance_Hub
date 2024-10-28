<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment_methods;
use App\Models\User;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::whereHas('role', function($query) {
            $query->where('type', 1);
          })->first()['id'];

        $payment_methods = [
            
            [
                "name"=>"CBE Birr",
                'api_address' => 'cbe.et/pay',
                'token' => 'askdfjsdjfekcvkcjfkjasdjfksdjf'
            ],
            [
                "name"=>"M-Birr",
                'api_address' => 'mbirr.et/pay',
                'token' => 'askdfjsdjfekcvkcjfkjasdjfksdjf'
            ],
            [
                "name"=>"HelloCash",
                'api_address' => 'hellocash.et/pay',
                'token' => 'askdfjsdjfekcvkcjfkjasdjfksdjf'
            ],
            [
                "name"=>"telebirr",
                'api_address' => 'telebirr.et/pay',
                'token' => 'askdfjsdjfekcvkcjfkjasdjfksdjf'
            ],

        ];
        $new = [];
        foreach($payment_methods as $skill) {
          $skill['user_id'] = $user;
          $new[] = $skill;
        }
        Payment_methods::insert($new);
    }
}
