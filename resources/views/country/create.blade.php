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
                <h2>Country Create Form</h2>
            </div>
            <div class="card-body">
                <form action="/country/create" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <label for="capital">Capital</label>
                        <input id="capital" type="text" class="form-control" name="capital">
                    </div>

                    <div class="form-group">
                        <label for="population">Population</label>
                        <input id="population" type="number" class="form-control" name="population">
                    </div>

                    <div class="form-group">
                        <label for="currency">Currency</label>
                        <input id="currency" type="text" class="form-control" name="currency">
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>