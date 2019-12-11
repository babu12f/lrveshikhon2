<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Country Create</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Country List</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Capital</th>
                            <th>Population</th>
                            <th>Currency</th>
                            <th>Create At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cl as $c)
                            <tr>
                                <td>{{ $c->id }}</td>
                                <td>{{ $c->name }}</td>
                                <td>{{ $c->capital }}</td>
                                <td>{{ $c->population }}</td>
                                <td>{{ $c->currency }}</td>
                                <td>{{ $c->created_at }}</td>
                                <td>
                                    <a href="/country/{{$c->id}}/edit" class="btn btn-sm btn-info">Edit</a> | 
                                    <form action="/country/{{$c->id}}/delete" method="POST" style="display:inline">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form> | 
                                    <a href="/country/{{$c->id}}/show" class="btn btn-sm btn-info">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</body>
</html>