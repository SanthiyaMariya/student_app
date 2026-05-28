<!DOCTYPE html>
<html>
<head>
    <title>Create master</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background:#f4f6f9;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .container{
            width:400px;
            background:white;
            padding:30px;
            border-radius:15px;
            box-shadow:0px 5px 15px rgba(0,0,0,0.1);
        }

        .title{
            text-align:center;
            margin-bottom:25px;
            color:#333;
        }

        .input-group{
            margin-bottom:20px;
        }

        .input-group label{
            display:block;
            margin-bottom:8px;
            color:#555;
            font-weight:bold;
        }

        .input-group input{
            width:100%;
            padding:12px;
            border:1px solid #ccc;
            border-radius:8px;
            outline:none;
            transition:0.3s;
        }

        .input-group input:focus{
            border-color:#4f46e5;
            box-shadow:0px 0px 5px rgba(79,70,229,0.3);
        }

        .btn{
            width:100%;
            padding:12px;
            border:none;
            background:#4f46e5;
            color:white;
            font-size:16px;
            border-radius:8px;
            cursor:pointer;
            transition:0.3s;
        }

        .btn:hover{
            background:#4338ca;
        }

    </style>
</head>
<body>

    <div class="container">

        <h2 class="title">Add Student</h2>

        <form action="/students/store" method="POST">

            @csrf

            <div class="input-group">
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter Name">
            </div>

            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter Email">
            </div>

            <div class="input-group">
                <label>Course</label>
                <input type="text" name="course" placeholder="Enter Course">
            </div>

            <button type="submit" class="btn">
                Save Student
            </button>

        </form>

    </div>
<h1>All Teachers</h1>
<a href="{{ route('teachers.create') }}">Add New Teacher</a>
<br><br>
<a href="{{ route('students.index') }}">Go back to Students</a>

<table border="1">
    <tr>
        <th>Name</th> <th>Email</th> <th>Subject</th> <th>Actions</th>
    </tr>
    @foreach ($teachers as $teacher)
    <tr>
        <td>{{ $teacher->name }}</td>
        <td>{{ $teacher->email }}</td>
        <td>{{ $teacher->subject }}</td>
        <td>
            <a href="{{ route('teachers.edit', $teacher->id) }}">Edit</a>
            <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
</body>
</html>
