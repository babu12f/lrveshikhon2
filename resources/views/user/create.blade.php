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
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                        <label for="country">Country</label>
                        <select name="country_id" id="country" class="form-control">
                            <option value="">Select Your Country</option>
                            @foreach ($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>

    </div>
</body>
</html>