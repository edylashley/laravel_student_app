<!DOCTYPE html>
<html>
<head>
    <title>Add New Student</title>
</head>
<body>
    <h1>Add New Student</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('students.store') }}">
        @csrf
        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br><br>

        <label>Age:</label><br>
        <input type="number" name="age" value="{{ old('age') }}"><br><br>

        <label>Course:</label><br>
        <input type="text" name="course" value="{{ old('course') }}"><br><br>

        <button type="submit">Add Student</button>
    </form>

    <p><a href="{{ route('students.index') }}">Back to Student List</a></p>
</body>
</html>
