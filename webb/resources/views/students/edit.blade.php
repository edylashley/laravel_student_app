<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>
    <form method="POST" action="{{ route('students.update', $student->id) }}">
        @csrf
        @method('PUT')

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ $student->name }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $student->email }}"><br><br>

        <label>Age:</label><br>
        <input type="number" name="age" value="{{ $student->age }}"><br><br>

        <label>Course:</label><br>
        <input type="text" name="course" value="{{ $student->course }}"><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
