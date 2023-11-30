<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts.head')
    <title>Document</title>
</head>
<body>
   
    <div class="container">
        {{-- @php
            dd($agent->description);
        @endphp --}}
        <form action="{{ route('type.update', ['id' => $type->id]) }}" method="post">
            @csrf <!-- Add this line to include CSRF protection in Laravel -->
            <div class="row">
                <div class="form-group col">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="{{$type->name}}" required>
                </div>

            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>