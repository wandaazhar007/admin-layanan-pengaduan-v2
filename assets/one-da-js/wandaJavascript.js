$(function () {
	$('#example1').DataTable()
	$('#example2').DataTable({
		'paging': true,
		'lengthChange': false,
		'searching': false,
		'ordering': true,
		'info': true,
		'autoWidth': false
	})
});

//~ Datatable serverside pelapor ~//
var save_method; //for save method string
var oTable;
$(document).ready(function () {
	oTable = $('#tabel_list_pelapor').DataTable({

		"processing": true,
		"serverSide": true,
		//"lengthChange": false,
		//"displayLength" : 20,
		"order": [],
		"autoWidth": false,
		"ajax": {
			"url": base_url + "/pelapor/getAllTablePelapor/",
			"type": "POST"
		},
		"aLengthMenu": [
			[10, 50, 100],
			[10, 50, 100]
		], // Combobox Limit
		"columnDefs": [{
				"targets": [0],
				"searchable": true,
				"sortable": true
			},
			{
				"targets": [1],
				"searchable": true,
				"sortable": true
			},
			{
				"targets": [2],
				"searchable": true,
				"sortable": true
			}
		],

	});
});

//~ Datatable serverside Update Dokter ~//
var save_method; //for save method string
var oTable;
$(document).ready(function () {
	oTable = $('#tabel_update_dokter').DataTable({

		"processing": true,
		"serverSide": true,
		//"lengthChange": false,
		//"displayLength" : 20,
		"order": [],
		"autoWidth": false,
		"ajax": {
			"url": base_url + "/update_dokter/getAllTable/",
			"type": "POST"
		},
		"aLengthMenu": [
			[10, 50, 100],
			[10, 50, 100]
		], // Combobox Limit
		"columnDefs": [{
				"targets": [0],
				"searchable": true,
				"sortable": true
			},
			{
				"targets": [1],
				"searchable": true,
				"sortable": true
			},
			{
				"targets": [2],
				"searchable": true,
				"sortable": true
			}
		],

	});
});


//~ Datatable serverside user admin ~//
var save_method; //for save method string
var oTable;
$(document).ready(function () {
	oTable = $('#tabel_list_user_admin').DataTable({

		"processing": true,
		"serverSide": true,
		//"lengthChange": false,
		//"displayLength" : 20,
		"order": [],
		"autoWidth": false,
		"ajax": {
			"url": base_url + "/user/getAllTable/",
			"type": "POST"
		},
		"aLengthMenu": [
			[10, 50, 100],
			[10, 50, 100]
		], // Combobox Limit
		"columnDefs": [{
				"targets": [0],
				"searchable": true,
				"sortable": true
			},
			{
				"targets": [1],
				"searchable": true,
				"sortable": true
			},
			{
				"targets": [2],
				"searchable": true,
				"sortable": true
			}
		],

	});
});

//~ Datatable serverside pesan belum dibalas dashboard ~//
var save_method; //for save method string
var oTable;
$(document).ready(function () {
	oTable = $('#tabel_pesan_belum_dibalas').DataTable({

		"processing": true,
		"serverSide": true,
		// "lengthChange": false,
		// "displayLength": 20,
		"order": [],
		"autoWidth": false,
		"ajax": {
			"url": base_url + "/dashboard/getAllDataBelumDiBalas/",
			"type": "POST"
		},
		"aLengthMenu": [
			[10, 50, 100],
			[10, 50, 100]
		], // Combobox Limit
		"columnDefs": [{
				"targets": [0],
				"searchable": true,
				"sortable": true
			},
			{
				"targets": [1],
				"searchable": true,
				"sortable": true
			},
			{
				"targets": [2],
				"searchable": true,
				"sortable": true
			}
		],

	});
});


//~ Datatable serverside profile dokter ~//
var save_method; //for save method string
var oTable;
$(document).ready(function () {
	oTable = $('#table_dokter').DataTable({

		"processing": true,
		"serverSide": true,
		//"lengthChange": false,
		//"displayLength" : 20,
		"order": [],
		"autoWidth": false,
		"ajax": {
			"url": base_url + "/profile_dokter/getAllDataDokter/",
			"type": "POST"
		},
		"aLengthMenu": [
			[10, 50, 100],
			[10, 50, 100]
		], // Combobox Limit
		"columnDefs": [{
				"targets": [0],
				"searchable": true,
				"sortable": true
			},
			{
				"targets": [1],
				"searchable": true,
				"sortable": true
			},
			{
				"targets": [2],
				"searchable": true,
				"sortable": true
			}
		],

	});
});

/* Note: Function untuk modal formForward | Author: wandaazhar@gmail.com */
$(document).ready(function () {
	$('#data').on('click', '.view_data', function () {
		var idPesan = $(this).attr('id');
		$.ajax({
			url: base_url + "inbox/getFormForward",
			method: "POST",
			data: {
				idPesan: idPesan
			},
			success: function (data) {
				console.log('yes');
				$('#result').html(data);
				$('#modal_forward').modal('show');
			}
		}); //end ajax
	});
});

/* Note: Function untuk modal history pesan | Author: wandaazhar@gmail.com */
$(document).ready(function () {
	$('#data').on('click', '.view_history_pesan', function () {
		var idPesan = $(this).attr('id');
		$.ajax({
			url: base_url + "inbox/getHistoryForward",
			method: "POST",
			data: {
				idPesan: idPesan
			},
			success: function (data) {
				$('#result_history_forward').html(data);
				$('#modal_history_forward').modal('show');
			}
		}); //end ajax
	});
});

/* Note: Function untuk modal hostory pelapor | Author: wandaazhar@gmail.com */
$(document).ready(function () {
	$('#tabel_list_pelapor').on('click', '.view_history_pelapor', function () {
		var id_user = $(this).attr('id');
		$.ajax({
			url: base_url + "pelapor/getDetailPelaporResult",
			method: "POST",
			data: {
				id_user: id_user
			},
			success: function (data) {
				console.log(id_user);
				$('#pelapor_result').html(data);
				$('#modal_history_pelapor').modal('show');
			}
		}); //end ajax
	});
});

/* Note: Function untuk modal pesan belum dibalas di dashboard | Author: wandaazhar@gmail.com */
$(document).ready(function () {
	$('#pesan_belum_dibalas').on('click', '.view_pesan_belum_dibalas', function () {
		var status_proses = $(this).attr('id');
		$.ajax({
			url: base_url + "dashboard/getAllPesanBelumDibalas",
			method: "POST",
			data: {
				status_proses: status_proses
			},
			success: function (data) {
				$('#pesan_belum_dibalas_result').html(data);
				$('#modal_pesan_belum_dibalas').modal('show');
			}
		}); //end ajax
	});
});


/* Note: Function untuk modal pesan sedang diproses di dashboard | Author: wandaazhar@gmail.com */
$(document).ready(function () {
	$('#pesan_sedang_diproses').on('click', '.view_pesan_sedang_diproses', function () {
		var status_proses = $(this).attr('id');
		$.ajax({
			url: base_url + "dashboard/getAllPesanSedangDiproses",
			method: "POST",
			data: {
				status_proses: status_proses
			},
			success: function (data) {
				$('#pesan_sedang_diproses_result').html(data);
				$('#modal_pesan_sedang_diproses').modal('show');
			}
		}); //end ajax
	});
});

/* Note: Function untuk modal pesan sudah selesai di dashboard | Author: wandaazhar@gmail.com */
$(document).ready(function () {
	$('#pesan_sudah_selesai').on('click', '.view_pesan_sudah_selesai', function () {
		var status_proses = $(this).attr('id');
		$.ajax({
			url: base_url + "dashboard/getAllPesanSudahSelesai",
			method: "POST",
			data: {
				status_proses: status_proses
			},
			success: function (data) {
				$('#pesan_sudah_selesai_result').html(data);
				$('#modal_pesan_sudah_selesai').modal('show');
			}
		}); //end ajax
	});
});


/* Note: Function untuk modal semua pesan di dashboard | Author: wandaazhar@gmail.com */
$(document).ready(function () {
	$('#all_pesan').on('click', '.view_all_pesan', function () {
		var status_proses = $(this).attr('id');
		$.ajax({
			url: base_url + "dashboard/getAllPesan",
			method: "POST",
			data: {
				status_proses: status_proses
			},
			success: function (data) {
				$('#all_pesan_result').html(data);
				$('#modal_all_pesan').modal('show');
			}
		}); //end ajax
	});
});


/* Note: Function untuk modal hak akses pesan yanmed di dashboard | Author: wandaazhar@gmail.com */
$(document).ready(function () {
	$('#pesan_bidang_yanmed').on('click', '.view_pesan_bidang_yanmed', function () {
		var id = $(this).attr('id');
		$.ajax({
			url: base_url + "dashboard/getAllInboxYanmed",
			method: "POST",
			data: {
				id: id
			},
			success: function (data) {
				$('#pesan_bidang_yanmed_result').html(data);
				$('#modal_pesan_bidang_yanmed').modal('show');
			}
		}); //end ajax
	});
});

/* Note: Function untuk modal hak akses pesan penunjang di dashboard | Author: wandaazhar@gmail.com */
$(document).ready(function () {
	$('#pesan_bidang_penunjang').on('click', '.view_pesan_bidang_penunjang', function () {
		var id = $(this).attr('id');
		$.ajax({
			url: base_url + "dashboard/getAllInboxPenunjang",
			method: "POST",
			data: {
				id: id
			},
			success: function (data) {
				$('#pesan_bidang_penunjang_result').html(data);
				$('#modal_pesan_bidang_penunjang').modal('show');
			}
		}); //end ajax
	});
});


/* Note: Function untuk modal hak akses pesan keperawatan di dashboard | Author: wandaazhar@gmail.com */
$(document).ready(function () {
	$('#pesan_bidang_keperawatan').on('click', '.view_pesan_bidang_keperawatan', function () {
		var id = $(this).attr('id');
		$.ajax({
			url: base_url + "dashboard/getAllInboxKeperawatan",
			method: "POST",
			data: {
				id: id
			},
			success: function (data) {
				$('#pesan_bidang_keperawatan_result').html(data);
				$('#modal_pesan_bidang_keperawatan').modal('show');
			}
		}); //end ajax
	});
});

/* Note: Function untuk modal hak akses pesan umum di dashboard | Author: wandaazhar@gmail.com */
$(document).ready(function () {
	$('#pesan_bidang_umum').on('click', '.view_pesan_bidang_umum', function () {
		var id = $(this).attr('id');
		$.ajax({
			url: base_url + "dashboard/getAllInboxUmum",
			method: "POST",
			data: {
				id: id
			},
			success: function (data) {
				$('#pesan_bidang_umum_result').html(data);
				$('#modal_pesan_bidang_umum').modal('show');
			}
		}); //end ajax
	});
});





/* Note: Function untuk modal history admin di dashboard | Author: wandaazhar@gmail.com */
$(document).ready(function () {
	$('#history_admin').on('click', '.view_history_admin', function () {
		var idAdmin = $(this).attr('id');
		$.ajax({
			url: base_url + "dashboard/getHistoryAdmin",
			method: "POST",
			data: {
				idAdmin: idAdmin
			},
			success: function (data) {
				$('#history_admin_result').html(data);
				$('#modal_history_admin').modal('show');
			}
		}); //end ajax
	});
});

/* Note: Function untuk modal foto | Author: wandaazhar@gmail.com */
$(function () {
	$(document).on('click', '[data-toggle="lightbox"]', function (event) {
		event.preventDefault();
		$(this).ekkoLightbox({
			alwaysShowClose: true
		});
	});
})
