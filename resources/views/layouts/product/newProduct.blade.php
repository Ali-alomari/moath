@extends('layouts.master.master')
@section('PageContent')
    <style>
        textarea {
            width: 100%;
            height: 150px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            color: white;
            border-radius: 4px;
            background-color: #343a40;
            font-size: 16px;
            resize: none;
        }
    </style>

    <body class="vertical  dark  ">
        <div class="wrapper">


            <main role="main" class="main-content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h2 class="page-title">Form Layout</h2>
                            <p class="text-muted">Demo for form control styles, layout options, and custom components for
                                creating a wide variety of forms.</p>
                            <div class="card-deck">
                                <div class="card shadow mb-4">
                                    <div class="card-header">
                                        <strong class="card-title">Basic form</strong>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('product.store') }}">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Name AR</label>
                                                    <input type="text" name="ProductnameAR" class="form-control"
                                                        id="nameProductAR" placeholder="name AR">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">name EN</label>
                                                    <input type="text" name="ProductnameEN" class="form-control"
                                                        id="nameProductEN" placeholder="name EN">
                                                </div>
                                            </div>
                                            <div class="form-row col-md-12">
                                                <div class="form-group col-md-6">
                                                    <label for="inputAddress">Descripton Arabic</label>

                                                    <textarea name="productdescAR" placeholder="اي شيء" cols="20" rows="10"></textarea>

                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputAddress2">Descripton English</label>

                                                    <textarea name="productdescEN" placeholder="any thing" cols="20" rows="10"></textarea>

                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                                        <label class="form-check-label" for="gridCheck"> Check me out
                                                        </label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </body>
@endsection
