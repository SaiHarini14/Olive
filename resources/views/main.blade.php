<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/38bb4c4693.js" crossorigin="anonymous"></script>

    <title>Olive</title>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <div style="color:OLIVE;">
            <h1> WELCOME TO OLIVE!</h2>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Olive <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <br><br>

        <div class="modal" id="examplemodal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="examplemodal">Add Favourites</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form method="post" action="" accept-charset="UTF-8">
                            {{ csrf_field() }}

                            <label for="name">Enter Name</label>
                            <input type="text" name="Name"><br>
                            <label for="link">Enter Link</label>
                            <input type="text" name="link"><br>
                            <label for="type">Select Type</label>
                            <select name="type_dropdown" class="favourite" style="max-height: 25px; margin-left:50px;">
                                @foreach ($types as $type)
                                    <option value={{ $type->id }}>{{ $type->name }}</option>
                                @endforeach
                            </select><br><br>

                            <label for="category">Select Category</label>
                            <select name="category" class="favourite" style="max-height: 25px; margin-left:50px;">
                                @foreach ($categories as $category)
                                    <option value={{ $category->id }}>{{ $category->name }}
                                    </option>
                                @endforeach
                            </select> <br /><br>
                            <button type="submit" class="btn btn-primary"
                                style="color: white; max-height: 25px; margin-left:120px;">Save Item</button>
                        </form>

                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Link</th>
                    <th scope="col">Type_id</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($favourites as $member)
                    <tr>
                        <th scope="row"></th>
                        <td>{{ $member['id'] }}</td>
                        <td>{{ $member['name'] }}</td>
                        <td>{{ $member['link'] }}</td>
                        <td>{{ $member['types_id'] }}</td>
                        <td style="display:flex">
                            <div>
                                <a href={{ 'update/' . $member['id'] }} class="text-white btn btn-success m1-2 pt-2">
                                    <i class="fa sharp fa-solid fa-pen-to-square"></i> Edit</a>
                            </div>
                            <form action="{{ url('/delete/' . $member->id) }}" method="post">
                                @method('delete')
                                {{ csrf_field() }}
                                <button class="text-white btn btn-danger m1-2 pt-2" class="fa fa-trash"> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <button data-loading-text="loading....." class="btn btn-warning" type="Button" data-toggle="modal"
            data-target="#examplemodal"> Add Favourites</button>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
</body>

</html>
