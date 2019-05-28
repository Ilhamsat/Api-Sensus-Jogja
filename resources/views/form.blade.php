<!DOCTYPE html>
<html>
<head>
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<div>
	<p class="menu4">Cari Nama Kabupaten :</p>
		<input id="kabupaten" class="searchbar" type="text" name="search">
	<br>
	<button class="btn-search" type="button">SEARCH</button>
	<br>
	
	<div >
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
	</div>
</body>
<script type="text/javascript">
 var table1 = $("#list-tbody1");
 var table2 = $("#list-tbody2");
    $(document).on('click', '.btn-search', function(event){
            event.preventDefault();
            $.ajax({
            url: 'http://localhost:8000/api/jumlahKelahirans',
            type: 'get',
            dataType : 'json',
            data: {
                    "kabupaten": $('#kabupaten').val()
                },
            success: function (data) {
                console.info(data);
                table1.empty();
                $.each(data, function(key, value){
				table1.append("<tr><td>"+value['umur']+"</td>"+
                    "<td>" +value['anak_lahir_hidup_0']+ "</td>" +
                    "<td>" +value['anak_lahir_hidup_1']+ "</td>" +
                    "<td>" +value['anak_lahir_hidup_2']+ "</td>" +
                    "<td>" +value['anak_lahir_hidup_3']+ "</td>" +
                    "<td>" +value['anak_lahir_hidup_4']+ "</td>" +
                    "<td>" +value['anak_lahir_hidup_5']+ "</td>" +
                    "<td>" +value['anak_lahir_hidup_6']+ "</td>" +
					"<td>" +value['anak_lahir_hidup_7']+ "</td>" +
					"<td>" +value['anak_lahir_hidup_8']+ "</td>" +
                    "<td>" +value['anak_lahir_hidup_9']+ "</td>" +
                    "<td>" +value['anak_lahir_hidup_10keatas']+ "</td></tr>");
              })
            }
        });
		});
		$(document).on('click', '.btn-search', function(event){
            event.preventDefault();
            $.ajax({
            url: 'http://localhost:8000/api/pendidikans',
            type: 'get',
            dataType : 'json',
            data: {
                    "kabupaten": $('#kabupaten').val()
                },
            success: function (data) {
                console.info(data);
                table2.empty();
                $.each(data, function(key, value){
				table2.append("<tr><td>"+value['kecamatan']+"</td>"+
					"<td>" +value['tidak_atau_belum_pernah_sekolah']+ "</td>" +
					"<td>" +value['tidak_atau_tamat_sd']+ "</td>" +
					"<td>" +value['sd_mi_sederajat']+ "</td>" +
					"<td>" +value['smp_mts_sederajat']+ "</td>" +
					"<td>" +value['smp_mts_sederajat']+ "</td>" +
					"<td>" +value['sma_ma_sederajat']+ "</td>" +
					"<td>" +value['smk']+ "</td>" +
					"<td>" +value['diploma_1_2']+ "</td>" +
					"<td>" +value['diploma_3']+ "</td>" +
					"<td>" +value['s2_s3']+ "</td>" +
					"<td>" +value['tidak_terjawab']+ "</td>" +
					"<td>" +value['jumlah']+ "</td></tr>");
					
              })
            }
        });
        });
    </script>
</html>
