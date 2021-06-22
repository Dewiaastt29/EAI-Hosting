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
                            List Maintenance
                        </div>
                        <div class="card-body">
                            <table id="records_table" class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID TM</th>
                                        <th scope="col">Dieshop TM</th>
                                        <th scope="col">Tanggal Maintenance</th>
                                        <th scope="col">Keadaan Dieshop</th>
                                        <th scope="col">Keperluan</th>
                                        <th scope="col">Jumlah Anggaran</th>
                                        <th scope="col">Hasil Pemeliharaan</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mt as $main)
                                    <tr>
                                        <td>{{$main->id}}</td>
                                        <td>{{$main->dieshop_tm}}</td>
                                        <td>{{$main->tgl_maintenance}}</td>
                                        <td>{{$main->keadaan_dieshop}}</td>
                                        <td>{{$main->keperluan}}</td>
                                        <td>{{$main->jumlah_anggaran}}</td>
                                        <td>{{$main->hasil_pemeliharaan}}</td>
                                        <td>
                                            <a href="{{route('mt.edit',$main->id)}}" class="btn btn-sm btn-primary">Edit </a>
                                        </td>
                                        <td>
                                            <form action="{{route('mt.delete',$main->id)}}" method="POST">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>