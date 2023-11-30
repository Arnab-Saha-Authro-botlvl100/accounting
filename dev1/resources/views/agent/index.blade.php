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
        <h1 class="mb-4">Add Agent</h1>

        <div class="addagent">
            <form action="/addagent" method="post">
                @csrf <!-- Add this line to include CSRF protection in Laravel -->
                <div class="row">
                    <div class="form-group col">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>
    
                    <div class="form-group col">
                        <label for="phone">Phone:</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
                    </div>
                </div>
    
                <div class="row">
                    <div class="form-group col">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Enter a description" required></textarea>
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
                        <th scope="col">Phone</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($agents as $index => $agent)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $agent->name }}</td>
                            <td>{{ $agent->phone }}</td>
                            <td>{{ $agent->description }}</td>
                            <td>
                                <a href="{{ route('agent.edit', ['id' => encrypt($agent->id)]) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('agent.delete', ['id' => $agent->id]) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>

    </div>
</body>
</html>