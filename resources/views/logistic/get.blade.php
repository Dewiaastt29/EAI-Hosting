<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{csrf_token()}}" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Divops</title>
</head>

<body>
    @include('navbar')
    <div class="container">
        <div class="row">
            <h3>Logistic Get</h3>
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <div class="mb-1 col-lg-8">
                        <div class="alert alert-success" style="display:none"></div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card mt-5 col-lg-8">
                        <div class="card-header">
                            List Logistic
                        </div>
                        <div class="card-body">
                            <table id="records_table" class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Barang</th>
                                        <th scope="col">Tanggal Keluar</th>
                                        <th scope="col">Tanggal Masuk</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($logistic as $data)
                                    <tr>

                                        <td>
                                            {{$data->id}}
                                        </td>
                                        <td>
                                            {{$data->tanggal_keluar}}
                                        </td>
                                        <td>
                                            {{$data->tanggal_masuk}}
                                        </td>
                                        <td>
                                            {{$data->alamat}}
                                        </td>
                                        <td>
                                            <a href="{{route('logistic.edit',$data->id)}}" class="btn btn-sm btn-primary">Edit </a>
                                        </td>
                                        <td>
                                            <form action="{{route('logistic.delete',$data->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>