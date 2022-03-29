<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rekam Medis</title>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body  style="background-color: currentColor">
        <div class="container" style="color: white">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5" style="font-size: 15pt; font-weight:bold">
                        <div class="card-body"  style="background-color:rgb(88, 188, 218)">
                            <h3 class="text-center">Formulir Rekam Medis</h3>
                              <!-- form validasi -->
                              <form action="/output" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="dokter" class="form-label">Dokter</label>
                                    <select id="dokter" class="form-select">
                                        <option>
                                            Dr. Tio Dwi
                                        </option>
                                        <option>
                                            Dr. Bro crrem
                                        </option>
                                        <option>
                                            Dr. nash affan
                                        </option>
                                    </select>
                                </div>
                                    <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input class="form-control" type="text" name="nama" value="{{ old('nama') }}" class="@error('nama') is-invalid @enderror">
                                            @error('nama')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="@error('sex') is-invalid @enderror" style="color:whitesmoke">Sex</label>
                                            @error('sex')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input class="custom-control-input" type="radio" value="male" id="male" name="sex">
                                                    <label class="custom-control-label" for="male" style="color:whitesmoke">Male</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input class="custom-control-input" type="radio" value="female" id="female" name="sex">
                                                    <label class="custom-control-label" for="female" style="color:whitesmoke">Female</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                               <label for="nik">NIK</label>
                                               <input class="form-control" type="text" name="nik" value="{{ old('nik') }}" class="@error('nik') is-invalid @enderror">
                                                @error('nik')
                                                         <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
        

                                        <div class="form-group"style="text-align:left">
                                            <label for="suhu" style="color:whitesmoke">Suhu Tubuh</label>
                                            <input class="form-control" type="text" name="suhu" value="{{ old('suhu') }}" class="@error('suhu') is-invalid @enderror">
                                            @error('suhu')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="penanggungjawab">Nama Penanggung Jawab</label>
                                            <input class="form-control" type="text" name="penanggungjawab" value="{{ old('penanggungjawab') }}" class="@error('penanggungjawab') is-invalid @enderror">
                                            @error('penanggungjawab')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="keluhan">Keluhan Penyakit</label>
                                            <input class="form-control" type="text" name="keluhan" value="{{ old('keluhan') }}" class="@error('keluhan') is-invalid @enderror">
                                            @error('keluhan')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="resep">Resep</label>
                                            <input type="file" class="form-control-file" id="resep" name="resep" value="{{ old('resep') }}" class="@error('resep') is-invalid @enderror">
                                            @error('resep')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    
                                         <div class="form-group">
                                               <input class="btn btn-primary" type="submit" value="Valid" style="padding: 10px 24px; font-size:14pt;">
                                         </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</body>
</html>
