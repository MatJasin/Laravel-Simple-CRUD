<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment</title>
</head>

<body>
    <h1>Enrollment</h1>
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
        <form method="post" action="{{route('enrollment.store')}}">
            @csrf
            @method('post')
            <table>
        <tr>
            <td><label for="assign_user">Assign Student:</label></td>
            <td>
                <select name="user_id" id="user_id">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->matrics }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="selected_subjects">Select Subjects:</label></td>
            <td>
                @foreach ($subjects as $subject)
                    <tr>
                        <td><input type="checkbox" name="selected_subjects[]" value="{{ $subject->id }}">{{ $subject->subject }}</td>
                    </tr>
                @endforeach
            </td>
        </tr>
    </table>

    <button type="submit">Create Class</button>

    </form>

</body>

</html>