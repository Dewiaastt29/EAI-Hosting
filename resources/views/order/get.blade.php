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
            <h3>Order Get</h3>
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <div class="mb-1 col-lg-8">
                        <div class="alert alert-success" style="display:none"></div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card mt-5 col-lg-8">
                        <div class="card-header">
                            List Order
                        </div>
                        <div class="card-body">
                            <table id="records_table" class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Order</th>
                                        <th scope="col">Jenis Order</th>
                                        <th scope="col">Jumlah Produk</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Material</th>
                                        <th scope="col">Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order as $ord)
                                        <tr>
                                            <td>{{$ord->id}}</td>
                                            <td>{{$ord->jenis_order}}</td>
                                            <td>{{$ord->jumlah_produk}}</td>
                                            <td>{{$ord->nama_produk}}</td>
                                            <td>{{$ord->materials}}</td>
                                            <td>{{$ord->total_harga}}</td>
                                            <td>
                                                <a href="{{route('order.edit',$ord->id)}}" class="btn btn-sm btn-primary">Edit </a>
                                            </td>
                                            <td>
                                                <form action="{{route('order.delete',$ord->id)}}" method="POST">
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

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    < src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></>
    < src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></>
    -->
</body>

</html>