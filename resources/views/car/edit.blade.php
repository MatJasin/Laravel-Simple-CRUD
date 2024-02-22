<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Car</title>
</head>
<body>
    <h1>Edit Car</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>


    <form method="post" action="{{route('car.update', ['car' => $car->id])}}">
        @csrf
        @method('put')
        <div>
        <input type="name" name="id" value="{{$car->id}}" hidden />
        </div>

        <div>
        <label>Student ID</label>
        <input type="name" name="matrics" value="{{$car->user->matrics}}" disabled />
        </div>
      
        <div>
        <label>Plate Number</label>
        <input type="name" name="plate" placeholder="{{$car->plate}}" value="{{$car->plate}}" />
        </div>
        <div>
        <label>Brand</label>
        <input type="name" name="brand" placeholder="{{$car->brand}}" value="{{$car->brand}}" />
        </div>
<div>
        <label>Model</label>
        <input type="name" name="model" placeholder="{{$car->model}}" value="{{$car->model}}" />
        </div>
        

        <div>
            <input type="submit" value="Update" />
        </div>       
    </form>

</body>
</html>