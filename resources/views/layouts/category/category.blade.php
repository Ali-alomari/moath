<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Tiny Dashboard - A Bootstrap Dashboard Template</title>

    @include('layouts.partial.style')
    @yield('PageStyle')


</head>

<body class="vertical  dark {{ App::isLocale('ar') ? 'rtl' : '' }} ">
    <div class="wrapper">

        @include('layouts.partial.nav')

        @include('layouts.partial.sidebar')


        <main role="main" class="main-content">



            <div class="card shadow">
                <div class="card-body">
                    <div class="toolbar row mb-3">
                        <div class="col">
                            <form class="form-inline">
                                <div class="form-row">
                                    <div class="form-group col-auto">
                                        <label for="search" class="sr-only">Search</label>
                                        <input type="text" class="form-control" id="search" value=""
                                            placeholder="Search">
                                    </div>

                                    @if ($errors->any())
                                        <div class="alert text-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            </form>
                        </div>
                        <div class="col ml-auto">
                            <div class="dropdown float-right">
                                <button type="button" class="btn mb-2 btn-secondary" data-toggle="modal"
                                    data-target=".modal-add">Add Category</button>

                                <button class="btn btn-secondary dropdown-toggle" type="button" id="actionMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
                                <div class="dropdown-menu" aria-labelledby="actionMenuButton">
                                    <a class="dropdown-item" href="#">Export</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- table -->
                    <table class="table table-bordered">
                        <thead>

                            <tr role="row">

                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $Cat)
                                <tr>
                                    <td>{{ $Cat->id }}</td>
                                    <td>{{ $Cat->name }}</td>
                                    <td>{{ $Cat->description }}</td>
                                    <td> <a href="#EditModal-{{ $Cat->id }}" class="btn btn-outline-success"
                                            data-toggle="modal" data-target=".modal-edit-{{ $Cat->id }}"><i
                                                class="fe fe-edit"></i></a>

                                        <a href="#deletemodel-{{ $Cat->id }}"
                                            class="btn btn-danger" data-toggle="modal" data-target=".modal-delete-{{ $Cat->id }}"><i
                                            class="fe fe-trash"></i></a>


                                    </td>

                                </tr>
                                @include('layouts.category.DeleteModal')

                                @include('layouts.category.editModal')
                            @endforeach

                        </tbody>
                    </table>
                    <nav aria-label="Table Paging" class="mb-0 text-muted">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </main> <!-- main -->

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        @include('layouts.category.addModal')

    </div> <!-- .wrapper -->
    @include('layouts.partial.js')
    @yield('PageScripts')

</body>

</html>
