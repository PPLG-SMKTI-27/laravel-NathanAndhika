<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'nathan@admin.com'],
            [
                'name' => 'Nathan',
                'password' => Hash::make('nathan123'),
            ]
        );
    }
}
