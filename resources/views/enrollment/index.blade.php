<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class details</title>
</head>

<body>
    <h2>Class Details</h2>

    <table border='1'>
        <tr>
            <td>Student</td>
            <td>Subject Code</td>
            <td>Subject Name</td>
            <td>Lecturer Name</td>
        </tr>
        @foreach ($enrollments as $enrollment)

        <tr>
            <td>{{$enrollment->student_matrics}}</td>
            <td>{{$enrollment->subject_code}}</td>
            <td>{{$enrollment->subject_subject}}</td>
            <td>{{$enrollment->subject_lecturer}}</td>
        </tr>
        @endforeach
    </table>




</body>

</html>