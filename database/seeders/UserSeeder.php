<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use  App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('roles')->truncate();
        $user = User::whereHas('role', function($query) {
            $query->where('type', 1);
        })->exists();
        $roleId = Role::where('type', 1)->first()['id'];
        $countryId = Country::first()['id'];
        if(!$user) {

            User::insert(
                [
                    'full_name' => 'Mekides Marie',
                    'email' => 'admin@Freelance_Hub.com',
                    'password' => Hash::make('12345678'),
                    'phone_number' => '0939382289',
                    'address' => 'DebreBrhan',
                    'role_id' => $roleId,
                    'country_id' => $countryId,
                ]
            );
        }

    }
}
