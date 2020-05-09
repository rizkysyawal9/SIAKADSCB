<h1>Seluruh Siswa</h1>
<ul>
@foreach($siswas as $siswa)
<li>
Nama: {{$siswa->nama}} <a href="/editsiswa/{{$siswa->id}}">Edit</a>
<a href="/shownilai/{{ $siswa->id }}">Nilai</a>
<a href="/deletesiswa/{{$siswa->id}}">Delete</a>
</li>
@endforeach
</ul>

<a href="/tambah_siswa">Tambah Siswa</a>
