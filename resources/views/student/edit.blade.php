<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>

<body>
    <h1>Edit Student</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>


    <form method="post" action="{{route('student.update', ['user' => $user->id])}}">
        @csrf
        @method('put')
        <div>
            <label>Student ID</label>
            <input type="name" name="matrics" value="{{$user->matrics}}" disabled />
        </div>
        <div>
            <label></label>
            <input type="name" name="user_id" value="{{$user->id}}" hidden />
        </div>
        <div>
            <label>First Name</label>
            <input type="name" name="firstName" placeholder="firstName" value="{{$student->firstName}}" />
        </div>
        <div>
            <label>Last Name</label>
            <input type="name" name="lastName" placeholder="lastName" value="{{$student->lastName}}" />
        </div>
        <div>
            <label>Year</label>
            <input type="number" name="year" placeholder="year" value="{{$student->year}}" />
        </div>
        <div>
            <label>Course</label>
            <input type="text" name="course" placeholder="course" value="{{$student->course}}" />
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>

</body>

</html>