<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Show all students (you probably already have this)
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // Show the form to create a new student
    public function create()
    {
        return view('students.create');
    }

    // Store the new student in the database
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'age' => 'required|integer|min:1',
            'course' => 'required|string|max:255',
        ]);

        // Create student record
        Student::create($request->all());

        // Redirect back to students list with success message
        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }

    // Show the form to edit a student
public function edit($id)
{
    $student = Student::findOrFail($id);
    return view('students.edit', compact('student'));
}

// Handle the update request
public function update(Request $request, $id)
{
    $student = Student::findOrFail($id);
    $student->update($request->all());
    return redirect()->route('students.index');
}

// Delete the student
public function destroy($id)
{
    $student = Student::findOrFail($id);
    $student->delete();
    return redirect()->route('students.index');
}

}
