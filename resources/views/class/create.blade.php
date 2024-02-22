<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Class</title>
</head>

<body>
    <h1>Create Class</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <table>
        <form method="post" action="{{route('class.store')}}">
            @csrf
            @method('post')
            <div>
                <tr>
                    <td><label for="subject_id">Subject:</label></td>
                    <td><select name="subject_id" required>
                            @foreach ($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->code }}</option>
                            @endforeach
                        </select>
            </div>
            </td>
            </tr>

            <tr>
                <div>
                    <td><label for="user_id">Student:</label></td>
                    <td> <select name="user_id" required>
                            @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->matrics }}</option>
                            @endforeach
                </div>
                </td>
            </tr>
    </table>


    <div>
        <input type="submit" value="Add a Class" />
    </div>

    </form>

</body>

</html>