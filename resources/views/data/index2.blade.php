<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat Pencarian Pada Laravel - www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
 
	<div class="container">
		<div class="card">
			<div class="card-body">
				
 
				<h2 class="text-center"><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
 
				<h3>Data Pegawai</h3>
 
				<p>Cari Data Pegawai :</p>
 
				<div class="form-group">
					
				</div>
				<form action="/pegawai/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>
 
				<br/>
 
				<table class="table table-bordered">
					<tr>
						<th>Nama</th>
						<th>Jabatan</th>
						<th>Umur</th>
						<th>Alamat</th>
						<th>Opsi</th>
					</tr>
					@foreach($data as $d)
					<tr>
                        <td>{{$d->kdData}}</td>
                        <td>{{$d->data1}}</td>
                        <td>{{$d->Ket}}</td>
                        <td>{{$d->data2}}</td>
                        <td>{{$d->frekuensi}}</td>
						<td>
							<a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $d->pegawai_id }}">Edit</a>
							<a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $d->pegawai_id }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>
 
				<br/>
				Halaman : {{ $data->currentPage() }} <br/>
				Jumlah Data : {{ $data->total() }} <br/>
				Data Per Halaman : {{ $data->perPage() }} <br/>
				<br/>
 
				{{ $data->links() }}
			</div>
		</div>
	</div>
 
 
</body>
</html>