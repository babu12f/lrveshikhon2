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
                <h2>Country Detail</h2>
            </div>
            <div class="card-body">
                <p>Country Name: {{$country->name}}</p>
                <p>Country Capital: {{$country->capital}}</p>
                <p>Country Population: {{$country->population}}</p>
                <p>Country Currency: {{$country->currency}}</p>
            </div>
        </div>
        
    </div>
</body>
</html>