<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/students', [StudentController::class, 'index']);
Route::get('/students', [StudentController::class, 'index'])->name('students.index'); // list students
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create'); // show create form
Route::post('/students', [StudentController::class, 'store'])->name('students.store'); // handle form submission
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
