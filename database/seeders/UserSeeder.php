<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Matt',
            'last_name' => 'Noye',
            'email' => 'matt@mwn-digital.uk',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password')
        ])->assignRole(['super admin', 'admin']);
    }
}
