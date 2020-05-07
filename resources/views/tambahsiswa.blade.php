<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- <link rel="stylesheet" href=""> -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">

    </head>
    <body>

        <div id="hello">Tambah Siswa</div>
        <form method="POST" action="{{ url('/tambah_siswa')}}">
        @csrf
        <div class="form-group">
                      <input type="number" name="nis" class="form-control form-control-user" placeholder="NIS" required="">
                    </div>
                    <div class="form-group">
                      <input type="text" name="nama" class="form-control form-control-user" placeholder="Nama" required="">
                    </div>
                    <div class="form-group">
                    <input type="text" name="orangTua" class="form-control form-control-user" placeholder="Orang Tua" required="">
                    </div>
                    <div class="form-group">
                    <input type="text" name="kelas" class="form-control form-control-user" placeholder="Kelas" required="">
                    </div>
                    <div class="form-group">
                    <input type="text" name="alamat" class="form-control form-control-user" placeholder="Alamat" required="">
                    </div>
                    <button class="btn btn-user btn-block" style="background-color: #9800e1; color: white;" type="submit">Tambah</button>
        </form>
    </body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
