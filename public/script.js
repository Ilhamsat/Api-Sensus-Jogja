// When the DOM is ready, attach the event handler
$(document).ready(function () {
    // key enter
    $(".searchbar").keydown(function(event){
		if ( event.which === 13 ) {
			showAll(); 
		}});
    // click button
	$(".btn-search").click(function(event){
		showAll();
		});
});
var table1 = $("#list-tbody1");
var table2 = $("#list-tbody2");
var table3 = $("#list-tbody3");
var table4 = $("#list-tbody4");

function slideShow() {
	$(".show").slideToggle("slow");
}

function showKelahiran (){
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
}

function showPendidikan (){
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
			table2.append("<tr><td>"+
				value['kecamatan']+"</td>"+
				"<td>" +value['tidak_atau_belum_pernah_sekolah']+ "</td>" +
				"<td>" +value['tidak_atau_belum_tamat_sd']+ "</td>" +
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
}

function showJumlah (){
	event.preventDefault();
        $.ajax({
        url: 'http://localhost:8000/api/jumlahPenduduks',
        type: 'get',
        dataType : 'json',
        data: {
                "kabupaten": $('#kabupaten').val()
            },
        success: function (data) {
            console.info(data);
            table3.empty();
            $.each(data, function(key, value){
			table3.append("<tr><td>"+value['kecamatan']+"</td>"+
				"<td>" +value['kota_lakilaki']+ "</td>" +
				"<td>" +value['kota_perempuan']+ "</td>" +
				"<td>" +value['kota_lakilaki_dan_perempuan']+ "</td>" +
				"<td>" +value['desa_lakilaki']+ "</td>" +
				"<td>" +value['desa_perempuan']+ "</td>" +
				"<td>" +value['desa_lakilaki_dan_perempuan']+ "</td>" +
				"<td>" +value['total_lakilaki']+ "</td>" +
				"<td>" +value['total_perempuan']+ "</td>" +
				"<td>" +value['total_lakilaki_dan_perempuan']+ "</td></tr>");
          })
	    }
	});
}

function showKetenagakerjaan (){
	event.preventDefault();
        $.ajax({
        url: 'http://localhost:8000/api/ketenagakerjaans',
        type: 'get',
        dataType : 'json',
        data: {
                "kabupaten": $('#kabupaten').val()
            },
        success: function (data) {
            console.info(data);
            table4.empty();
            $.each(data, function(key, value){
			table4.append("<tr><td>" +value['pendidikan_tertinggi_yang_ditamatkan']+ "</td>" +
				"<td>" +value['pertanian_tanaman_padi_dan_palawijaya']+ "</td>" +
				"<td>" +value['hortikultura']+ "</td>" +
				"<td>" +value['perkebunan']+ "</td>" +
				"<td>" +value['perikanan']+ "</td>" +
				"<td>" +value['peternakan']+ "</td>" +
				"<td>" +value['kehutanan']+ "</td>" +
				"<td>" +value['pertambangan_dan_penggalian']+ "</td>" +
				"<td>" +value['industri_pengolahan']+ "</td>" +
				"<td>" +value['listrik_dan_gas']+ "</td>" +
				"<td>" +value['konstruksi']+ "</td>" +
				"<td>" +value['perdagangan']+ "</td>" +
				"<td>" +value['hotel_dan_rumah_makan']+ "</td>" +
				"<td>" +value['transportasi_dan_pergudangan']+ "</td>" +
				"<td>" +value['informasi_dan_komunikasi']+ "</td>" +
				"<td>" +value['keuangan_dan_asuransi']+ "</td>" +
				"<td>" +value['jasa_pendidikan']+ "</td>" +
				"<td>" +value['jasa_kesehatan']+ "</td>" +
				"<td>" +value['jasa_kemasyarakatan']+ "</td>" +
				"<td>" +value['lainnya']+ "</td>" +
				"<td>" +value['jumlah']+ "</td></tr>");
          })
	    }
	});
}

function showAll(){
	showKelahiran();
	showPendidikan();
	showJumlah();
	showKetenagakerjaan();
	// for smoother experience for user
	window.setTimeout(slideShow,1000);
}
		
