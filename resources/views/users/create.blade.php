<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Users</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
                <a class="navbar-brand h1" href={{ route('users.index') }}>CRUDUsers</a>
                <div class="justify-end ">
                    <div class="col ">
                        <a class="btn btn-sm btn-success" href={{ route('users.create') }}>Add User</a>
                    </div>
                </div>
            </div>
        </nav>
        
        <div class="container h-100 mt-5">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6">
                    <h3>Add a User</h3>
                    <form action="{{ route('users.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">pasword</label>
                            <input type="text" class="form-control" id="password" name="password" required>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Create User</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
