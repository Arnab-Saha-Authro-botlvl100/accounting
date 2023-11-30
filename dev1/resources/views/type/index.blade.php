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
    <div class="container mt-5">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h1 class="mb-4">Add Type</h1>

        <div class="addagent">
            <form action="/addtype" method="post">
                @csrf <!-- Add this line to include CSRF protection in Laravel -->
                <div class="row">
                    <div class="form-group col">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                </div>
    
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="allagents">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">Name</th>
                        
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($types as $index => $type)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $type->name }}</td>
                            <td>
                                <a href="{{ route('type.edit', ['id' => encrypt($type->id)]) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('type.delete', ['id' => $type->id]) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>

    </div>
</body>
</html>