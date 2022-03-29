<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasiln</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

    <div class="container" style="color: white">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body" style="background-color:rgb(46, 16, 82)">
                        <h3>Formulir Pendaftaran PKM TC</h3>
                        <h3 class="my-4">Data Yang Di Input : </h3>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Dokter</td>
                                <td>{{ $data->dokter }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Nama</td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Sex</td>
                                <td>{{ $data->sex }}</td>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td>{{ $data->nik }}</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>{{ $data->pekerjaan }}</td>
                            </tr>
                            <tr>
                                <td>Nama Penanggung Jawab</td>
                                <td>{{ $data->penanggungjawab }}</td>
                            </tr>
                            <tr>
                                <td>Keluhan Penyakit</td>
                                <td>{{ $data->keluhan }}</td>
                            </tr>
                            <tr>
                                <td style="width:200px">Resep</td>
                                <td><img src="{{ $data->resep }}" alt="Foto resep" width="200px"></td>
                            </tr>
                            
                        </table>

                        <a href="/form" class="btn btn-primary">Kembali</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
@include('sweetalert::alert')
</html> 