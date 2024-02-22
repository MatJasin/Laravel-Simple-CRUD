<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Cars</title>
</head>

<body>
    <div>
        <h2>List of Cars</h2>
        <table border='1'>
            <tr>
                <td>ID</td>
                <td>Matrics No.</td>
                <td>Owner</td>
                <td>Plate</td>
                <td>Brand</td>
                <td>Model</td>


                <td>Action</td>
            </tr>
            @php
            $i=1;
            @endphp
            @foreach($users as $user)
            @foreach ($user->cars as $car)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$user->matrics}}</td>
                <td>{{$user->student->firstName}} {{$user->student->lastName}}</td>

                <!-- Display the car's attributes -->
                <td>{{ $car->plate }}</td>
                <td>{{ $car->brand }}</td>
                <td>{{ $car->model }}</td>






                <td>
                    <center>
                        <form method="get" action='{{route("car.edit", ["car" => $car->id])}}'>
                            @csrf
                            &nbsp; <button type="submit">Edit</button>&nbsp;</form>
                        <br>
                        <form method="post" action='{{route("car.destroy", ["car" => $car->id])}}'>
                            @csrf
                            @method('delete')
                            &nbsp;<button type="submit">Delete</button>&nbsp;
                    </center>
                    </form>
                    </center>
                </td>

            </tr>

            @endforeach

            @endforeach
        </table>


        <div>
            <form method="get" action='{{route("car.create")}}'>
                <input href="{{route('car.create')}}" type="submit" name="create" value="Add Car" />
            </form>
        </div>
    </div>
</body>

</html>