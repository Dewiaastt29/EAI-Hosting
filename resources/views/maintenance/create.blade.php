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
            <h3>Maintenance Create</h3>
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <div class="card mt-5 col-lg-8">
                        <div class="card-header">
                            Maintenance
                        </div>
                        <div class="card-body">
                            <div class="alert alert-success" style="display:none"></div>
                            <form action="{{route('mt.store')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="dieshop_tm" class="form-label">Dieshop TM</label>
                                    <input type="text" class="form-control" id="dieshop_tm" name="dieshop_tm">
                                </div>
                                <div class="mb-3">
                                    <label for="tgl_maintenance" class="form-label">Tanggal Maintenance</label>
                                    <input type="date" class="form-control" id="tgl_maintenance" name="tgl_maintenance">
                                </div>
                                <div class="mb-3">
                                    <label for="keadaan_dieshop" class="form-label">Keadaan Dieshop</label>
                                    <input type="text" class="form-control" id="keadaan_dieshop" name="keadaan_dieshop">
                                </div>
                                <div class="mb-3">
                                    <label for="keperluan" class="form-label">Keperluan</label>
                                    <input type="text" class="form-control" id="keperluan" name="keperluan">
                                </div>
                                <div class="mb-3">
                                    <label for="jumlah_anggaran" class="form-label">Jumlah Anggaran</label>
                                    <input type="text" class="form-control" id="jumlah_anggaran" name="jumlah_anggaran">
                                </div>
                                <div class="mb-3">
                                    <label for="hasil_pemeliharaan" class="form-label">Hasil Pemeliharaan</label>
                                    <input type="text" class="form-control" id="hasil_pemeliharaan" name="hasil_pemeliharaan">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>