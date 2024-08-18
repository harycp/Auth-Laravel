<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Soebardjo Rahardjo',
            'email' => 'fKw2H@example.com',
            'username' => 'soebardjo',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Hary Capri',
            'email' => 'omegahary@gmail.com',
            'username' => 'haryc',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        User::factory(2)->create();
    }
}


// $table->string('name');
//             $table->string('email')->unique();
//             $table->string('username')->unique();
//             $table->boolean('is_admin')->default(false);
//             $table->timestamp('email_verified_at')->nullable();
//             $table->string('password');