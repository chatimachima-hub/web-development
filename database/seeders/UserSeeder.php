<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->name = 'admin';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('password');
        $user->email_verified_at = now();
        $user->save();
    }
}
