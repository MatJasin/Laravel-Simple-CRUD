<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>
    <h1>Student</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>

    <div>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Matrics No.</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Year</td>
                <td>Course</td>
                <td>Email</td>
                <td>Action</td>
            </tr>
            @php
            $i = 1;
            @endphp
            @foreach($users as $user)
            @if ($user->student)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$user->matrics}}</td>
                <td>{{$user->student->firstName}} &nbsp;</td>
                <td>{{$user->student->lastName}}&nbsp;</td>
                <td>{{$user->student->year}}&nbsp;</td>
                <td>{{$user->student->course}}&nbsp;</td>
                <td>{{$user->email}}&nbsp;</td>
                <td> <center> <form method="get" action='{{route("student.edit", ["user" => $user->id])}}'>
                    @csrf
                    &nbsp; <button type="submit">Edit</button>&nbsp;</form><br>
                    <form method="post" action='{{route("student.destroy", ["user" => $user->id])}}'>
                    @csrf
                    @method('delete')
                    &nbsp;<button type="submit">Delete</button>&nbsp;</center>
        </form></td>
            </tr>
          @else
          @endif

            @endforeach
        </table>
    </div>
    <div>
        <form method="get" action='{{route("student.user")}}'>
            <input href="{{route('student.user')}}" type="submit" name="create" value="Add User"/>
        </form>
    </div>
    <div>
        <form method="get" action='{{route("student.create")}}'>
            <input href="{{route('student.create')}}" type="submit" name="create" value="Add Student"/>
        </form>
    </div>
    
</body>
</html>

