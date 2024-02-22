<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    <h1>Create Student</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>


    <form method="post" action="{{route('student.store')}}">
        @csrf
        @method('post')
        <div>
        <label for="user_id">User:</label>
    <select name="user_id" required>
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->matrics }}</option>
        @endforeach
    </select></div>

    <div>
        <label>First Name</label>
        <input type="firstName" name="firstName" placeholder="First Name" />
        </div>
<div>
<div>
        <label>Last Name</label>
        <input type="lastName" name="lastName" placeholder="Last Name" />
        </div>
<div>
        <label>Year</label>
        <input type="number" name="year" placeholder="year" />
        </div>
<div>
        <label>Class</label>
        <input type="course" name="course" placeholder="Course" />
        </div>
        <div>
            <input type="submit" value="Add a student" />
        </div>       
    </form>

</body>
</html>