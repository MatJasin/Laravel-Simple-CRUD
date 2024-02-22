<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>

<body>
    <h1>Create User</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>


    <form method="post" action="{{route('user.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Student ID</label>
            <input type="name" name="matrics" placeholder="matrics" value="B000" />
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" placeholder="email" />
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" placeholder="**********" />
        </div>
        <div>
            <input type="submit" value="Add a User" />
        </div>
    </form>

</body>

</html>