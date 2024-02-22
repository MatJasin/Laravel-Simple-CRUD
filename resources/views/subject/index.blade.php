<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject</title>
</head>
<body>
    <h2>Subject details</h2>
    <div>
        <table border='1'>
            <tr>
                <td>ID</td>
                <td>Code</td>
                <td>Subject</td>
                <td>Lecturer</td>
                <td>Description</td>
                <td>Action</td>

            </tr>
            @php
            $i = 1;
            @endphp
            @foreach($subject as $subjects)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$subjects->code}}</td>
                <td>{{$subjects->subject}}</td>
                <td>{{$subjects->lecturer}}</td>
                <td>{{$subjects->description}}</td>
                <td>
                    <form method="get" action="{{route('subject.edit', ['subject' => $subjects])}}">
                        <input type="submit" value="Edit" />
                    </form>
                
                    <form method="post" action="{{route('subject.destroy', ['subject' => $subjects])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" />
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div>
        <form method='get' action='{{route("subject.create")}}'>
            <input href='{{route("subject.create")}}' type='submit' value='Add Subject' />
        </form>
    </div>

    
</body>
</html>