<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
</head>

<body>
    <h2>Add A Course</h2>
    <div>
        <form method='post' action='{{route("subject.store")}}'>
            @csrf
            @method('post')
            <table>
                <tr>
                    <td><label>Code</label></td>
                    <td><input type="name" name="code" placeholder="Subject Code" /></td>
                </tr>
                <tr>
                    <td><label>Course</label></td>
                    <td><input type="text" name="subject" placeholder="Subject Name" /></td>
                </tr>
                <tr>
                    <td><label>Lecturer</label></td>
                    <td><input type="text" name="lecturer" placeholder="Lecturer Name" /></td>
                </tr>
                <tr>
                    <td><label>Description</label></td>
                    <td><input type="text" name="description" placeholder="Compulsory/Elective" /></td>
                </tr>
            </table>
            <input type='submit' value='Add Subject' />
        </form>
    </div>

</body>

</html>