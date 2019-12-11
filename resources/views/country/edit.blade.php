<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Country Edit</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Country Edit</h2>
            </div>
            <div class="card-body">
                <form action="/country/{{$country->id}}/edit" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" disabled type="text" class="form-control" name="name" value="{{$country->name}}">
                    </div>

                    <div class="form-group">
                        <label for="capital">Capital</label>
                        <input id="capital" type="text" class="form-control" name="capital" value="{{$country->capital}}">
                    </div>

                    <div class="form-group">
                        <label for="population">Population</label>
                        <input id="population" type="number" class="form-control" name="population" value="{{$country->population}}">
                    </div>

                    <div class="form-group">
                        <label for="currency">Currency</label>
                        <input id="currency" type="text" class="form-control" name="currency" value="{{$country->currency}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>