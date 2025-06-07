<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Student;

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
    }
}

