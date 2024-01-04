<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'khalidmk8@gmail.com',
            'name' => 'Khalid Mehmood Khan',
            'password' => bcrypt('Mkhalid1858'),
        ]);
    }
}
