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

                                </div>
                            </form>
                        </div>
                        <div class="col ml-auto">
                            <div class="dropdown float-right">
                                <button class="btn btn-primary float-right ml-3" type="button">Add more +</button>
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
                                <th>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="all">
                                        <label class="custom-control-label" for="all"></label>
                                    </div>
                                </th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="4574">
                                        <label class="custom-control-label" for="4574"></label>
                                    </div>
                                </td>
                                <td>1</td>
                                <td>Ali</td>
                                <td>Ali Store</td>

                                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted sr-only">Action</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                        <a class="dropdown-item" href="#">Assign</a>
                                    </div>
                                </td>
                            </tr>

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

    </div> <!-- .wrapper -->
    @include('layouts.partial.js')
    @yield('PageScripts')

</body>

</html>
