<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class StudentSeeder extends Seeder
{
    public function run()
    {
        Student::create([
            'name' => 'Edyl Catapusan',
            'email' => 'edyl@example.com',
            'age' => 20,
            'course' => 'Information Technology',
        ]);

        Student::create([
            'name' => 'Gibb Lasola',
            'email' => 'gibb@example.com',
            'age' => 22,
            'course' => 'Information Technology',
        ]);

        Student::create([
            'name' => 'Joshua Bulay',
            'email' => 'joshua@example.com',
            'age' => 21,
            'course' => 'Information Technology',
        ]);

        User::create([
    'name' => 'Test User',
    'email' => 'test@example.com',
    'password' => Hash::make('password123'),
]);
        
    }
}

