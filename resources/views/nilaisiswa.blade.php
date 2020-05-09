Halaman Nilai Siswa

<a href="/tambahMatpel">Tambah Mata Pelajaran</a>

Kelas 7 Semester 1

@foreach($semester1 as $matpel)
Nama Mata Pelajaran: {{ $matpel->kode_matpel }}
H1: {{$matpel->h1}}
H2: {{$matpel->h2}}
H3: {{$matpel->h3}}
H4: {{$matpel->h4}}
H5: {{$matpel->h5}}
H6: {{$matpel->h6}}
H7: {{$matpel->h7}}
H8: {{$matpel->h8}}
HPH: {{$matpel->hph}}
HPTS: {{$matpel->hpts}}
HPAS: {{$matpel->hpas}}
HPA: {{$matpel->hpa}}
Predikat: {{$matpel->predikat}}
@endforeach


Semester 2
