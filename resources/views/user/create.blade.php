<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Create New User</h3>
            </div>
            <div class="card-body">
                <form action="/user/create" method="POST">
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
                        <label for="pic">Picture</label>
                        <input id="pic" type="text" class="form-control" name="pic">
                    </div>

                    <div class="form-group">
                        <label for="country">Country</label>
                        <input id="country" type="text" class="form-control" name="country">
                    </div>

                    <button type="submit" class="btn btn-primary">Save User</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>