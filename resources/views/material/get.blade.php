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
            <h3>Material Get</h3>
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <div class="mb-1 col-lg-8">
                        <div class="alert alert-success" style="display:none"></div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card mt-5 col-lg-8">
                        <div class="card-header">
                            List Material
                        </div>
                        <div class="card-body">
                            <table id="records_table" class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Vendor</th>
                                        <th scope="col">Nama Vendor</th>
                                        <th scope="col">NIB</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Telepon</th>
                                        <th scope="col">Jenis Material</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mate as $material)
                                    <tr>
                                        <td>{{$material->id}}</td>    
                                        <td>{{$material->nama_vendor}}</td>    
                                        <td>{{$material->nib}}</td>    
                                        <td>{{$material->alamat}}</td>    
                                        <td>{{$material->telepon}}</td>    
                                        <td>{{$material->jenis_material}}</td>    
                                        <td>{{$material->jumlah}}</td>    
                                        <td>{{$material->harga}}</td>
                                        <td>
                                            <a href="{{route('material.edit',$material->id)}}" class="btn btn-sm btn-primary">Edit </a>
                                        </td>
                                        <td>
                                            <form action="{{route('material.delete',$material->id)}}" method="POST">
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