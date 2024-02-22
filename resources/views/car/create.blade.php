<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car</title>
</head>
<body>
    <h1>Add Car</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>


    <form method="post" action="{{route('car.store')}}">
        @csrf
        @method('post')
        <div>
        <label for="user_id">Owner:</label>
    <select name="user_id" required>
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->matrics }}</option>
        @endforeach
    </select></div>

    <div>
        <label>Brand</label>
        <input type="brand" name="brand" placeholder="Brand" />
        </div>
<div>
<div>
        <label>Model</label>
        <input type="model" name="model" placeholder="Model" />
        </div>
<div>
        <label>Plate Number</label>
        <input type="plate" name="plate" placeholder="Plate Number" />
        </div>

        <div>
            <input type="submit" value="Add a Car" />
        </div>       
    </form>

</body>
</html>