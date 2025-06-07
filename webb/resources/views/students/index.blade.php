<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 80%;
            margin: 30px auto 10px auto;
        }
        h1 {
            margin: 0;
        }
        .add-button {
            padding: 8px 12px;
            background-color: #3490dc;
            color: white;
            border: none;
            border-radius: 4px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="header-container">
        <h1>Student List</h1>
        <a href="{{ route('students.create') }}" class="add-button">Add New Student</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Course</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->course }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
