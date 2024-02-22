<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
</head>
<body>
    <h2>Edit the Course</h2>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif

    <div>
        <form method="post" action="{{route('subject.update', ['subject' => $subject])}}">
            @csrf
            @method('put')
            <table>
                <tr>
                    <td><label>Code</label></td>
                    <td><input type="name" name="code" placeholder="code" value="{{$subject->code}}" /></td>
                </tr>
                <tr>
                    <td><label>Course</label></td>
                    <td><input type="text" name="subject" placeholder="subject" value="{{$subject->subject}}" /></td>
                </tr>
                <tr>
                   <td><label>Lecturer</label></td>
                   <td><input type="text" name="lecturer" placeholder="lecturer" value="{{$subject->lecturer}}" /></td>
                </tr>
                <tr>
                    <td><label>Description</label></td>
                    <td><input type="text" name="description" placeholder="description" value="{{$subject->description}}" /></td>
                </tr>
            </table>
            <input type='submit' value='Update Subject' />
        </form>
    </div>
    
</body>
</html>