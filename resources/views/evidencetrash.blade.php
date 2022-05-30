@extends('layouts.app')
@section('content')
 
	<div class="container">
 
		<div class="card mt-5">
			<div class="card-header text-center">
				Data Guru | <a href="https://www.malasngoding.com/laravel">www.malasngoding.com</a>
			</div>
			<div class="card-body">
 
				<a href="/evidence">Data Guru</a>
				|
				<a href="/evidencetrash" class="btn btn-sm btn-primary">Tong Sampah</a>
 
				<br/>
				<br/>
 
				<a href="/evidence/kembalikan_semua">Kembalikan Semua</a>
				|
				<a href="/evidence/hapus_permanen_semua">Hapus Permanen Semua</a>
				<br/>
				<br/>
 
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Nama</th>
							<th>Umur</th>
							<th width="30%">OPSI</th>
						</tr>
					</thead>
					<tbody>
						@foreach($evidence as $e)
						<tr>
							<td>{{ $e->code }}</td>
							<td>{{ $e->name }}</td>
							<td>
								<a href="/evidence/kembalikan/{{ $e->id }}" class="btn btn-success btn-sm">Restore</a>
								<a href="/evidence/hapus_permanen/{{ $e->id }}" class="btn btn-danger btn-sm">Hapus Permanen</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
    @endsection