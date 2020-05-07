<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Nama: {{ $siswa->nama }}
NIS: {{ $siswa->nis }}
<form method="POST" action="/editsiswa/{{ $siswa->id }}">
        @csrf
        <div class="form-group">
                      <input type="number" name="nis" class="form-control form-control-user" value="{{$siswa->nis}}" required="">
                    </div>
                    <div class="form-group">
                      <input type="text" name="nama" class="form-control form-control-user" value="{{$siswa->nama}}" required="">
                    </div>
                    <div class="form-group">
                    <input type="text" name="orangTua" class="form-control form-control-user" value="{{$siswa->orangTua}}" required="">
                    </div>
                    <div class="form-group">
                    <input type="text" name="kelas" class="form-control form-control-user" value="{{$siswa->kelas}}" required="">
                    </div>
                    <div class="form-group">
                    <input type="text" name="alamat" class="form-control form-control-user" value="{{ $siswa->alamat }}" required="">
                    </div>
                    <button class="btn btn-user btn-block" style="background-color: #9800e1; color: white;" type="submit">Edit</button>
        </form>
</body>
</html>
