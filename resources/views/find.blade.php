@extends('layout.welcome')
@extends('layout.navbar')
@extends('layout.header')
@extends('layout.footer')

@section('header')
	@parent
<link rel="stylesheet" type="text/css" href="search.css">
<script src="{{ asset('/js/jquery.min.js') }}"></script>
@endsection

@section('main')
<main>
<div>
	
	<p class="menu4">Cari Nama Kabupaten :</p>
		<input id="kabupaten" class="searchbar" type="text" name="search" placeholder="Nama Kabupaten">
	<br>
	<button class="btn-search" type="button">SEARCH</button>
	<br>
	
	<div class="show">
	<table  id="customers">
		<thead>
		<tr>
		<th>Kelompok Umur</th>
		<th>0</th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		<th>5</th>
		<th>6</th>
		<th>7</th>
		<th>8</th>
		<th>9</th>
		<th>10+</th>
		</tr>
		</thead>
	<tbody id="list-tbody1">
	</tbody>
	</table>
	
	<table id="customers">
		<thead>
		<tr>
		<th>Kecamatan</th>
		<th>Tidak atau Belum Pernah Sekolah</th>
		<th>Tidak Atau Belum Tamas SD</th>
		<th>SD/MI Sederajat</th>
		<th>SMP/MTS Sederajat</th>
		<th>SMA/MA Sederajat</th>
		<th>SMK</th>
		<th>Diploma I/II</th>
		<th>Diploma III</th>
		<th>Diploma IV/Universitas</th>
		<th>S2/S3</th>
		<th>Tidak Terjawab</th>
		<th>Jumlah</th>
		</tr>
		</thead>
		<tbody id="list-tbody2">
		</tbody>
	</table>

	</table>
		<table id="customers">
		<thead>
			<tr>
			<th rowspan="2">Kecamatan</th>
			<th colspan="3">Perkotaan</th>
			<th colspan="3">Perdesaan</th>
			<th colspan="3">Perkotaan + Perdesaan</th>
			</tr>
			<th>Laki - Laki</th>
			<th>Perempuan</th>
			<th>Laki - Laki + Perempuan</th>
			<th>Laki - Laki</th>
			<th>Perempuan</th>
			<th>Laki - Laki + Perempuan</th>
			<th>Laki - Laki</th>
			<th>Perempuan</th>
			<th>Laki - Laki + Perempuan</th>
		</thead>
		<tbody id="list-tbody3">
		</tbody>
	</table>

	</table>
		<table id="customers">
		<thead>	
			<tr>
			<th>Pendidikan Tertinggi yang Ditamatkan</th>
			<th>Pertanian Tanaman Padi dan Palawijaya</th>
			<th>Hotikultura</th>
			<th>Perkebunan</th>
			<th>Perikanan</th>
			<th>Peternakan</th>
			<th>Kehutanan</th>
			<th>Pertambangan dan Penggalian</th>
			<th>Industri Pengolahan</th>
			<th>Listrik dan Gas</th>
			<th>Konstruksi</th>
			<th>Perdagangan</th>
			<th>Hotel dan Rumah Makan</th>
			<th>Transportasi dan Pergudangan</th>
			<th>Informasi dan Komunikasi</th>
			<th>Keuangan dan Asuransi</th>
			<th>Jasa Pendidikan</th>
			<th>Jasa Kesehatan</th>
			<th>Jasa Kemasyarakatan</th>
			<th>Lainnya</th>
			<th>Jumlah</th>
		</tr>
		</thead>
		<tbody id="list-tbody4">
		</tbody>
	</table>
	</div>
</main>
@endsection
	
	
@section('footer')
	@parent
<script type="text/javascript" src="script.js">
</script>
@endsection