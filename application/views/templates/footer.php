<!--   Core   -->
<script src="<?=base_url();?>bootstrap/argon-dashboard-master/assets/js/plugins/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url();?>bootstrap/argon-dashboard-master/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--   Optional JS   -->
<script src="<?=base_url();?>bootstrap/argon-dashboard-master/assets/js/plugins/chart.js/dist/Chart.min.js"></script>
<script src="<?=base_url();?>bootstrap/argon-dashboard-master/assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
<!--   Argon JS   -->
<script src="<?=base_url();?>bootstrap/argon-dashboard-master/assets/js/argon-dashboard.min.js?v=1.1.0"></script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<!-- SweetAlert2 -->
<script src="<?=base_url()?>bootstrap/sweetalert2-8.18.5/package/dist/sweetalert2.min.js"></script>
<!-- Flashdata -->
<script src="<?=base_url();?>bootstrap/myscript.js"></script>
<!-- datatables -->
<script src="<?=base_url()?>bootstrap/DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script>
<script src="<?=base_url()?>bootstrap/DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>bootstrap/DataTables/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url()?>bootstrap/DataTables/DataTables-1.10.20/FixedColumns-3.3.0/js/dataTables.fixedColumns.min.js"></script>
<script>
window.TrackJS &&
TrackJS.install({
	token: "ee6fab19c5a04ac1a32a645abde4613a",
	application: "argon-dashboard-free"
});
</script>

<script type="text/javascript">
$(document).ready(function () {
	$('.sidebar-menu').tree();
})

$(document).ready(function(){
	$('.data').DataTable({
		language: {
			sProcessing: 'Sedang Proses...',
			sLengthMenu: "Tampilan _MENU_ entri",
			sZeroRecords: "Tidak ditemukan data yang sesuai",
			sInfo: "Tampilan _START_ sampai _END_ dari _TOTAL_ entri",
			sInfoEmpty: "Tampilan 0 sampai 0 dari 0 entri",
			sInfoFiltered: "(disarin dari _MAX_ entri keseluruhan)",
			sInfoPosstFix: "",
			sSearch: "Cari:",
			sUrl: "",
			paginate: {
				next: '<i class="fas fa-chevron-right"></i>', // or '→'
				previous: '<i class="fas fa-chevron-left"></i>' // or '←'
			}
		}
	});

	$('#edit-data').on('show.bs.modal', function (event) {
		var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
		var modal          = $(this)

		// Isi nilai pada field
		modal.find('#id_p').attr("value",div.data('id_p'));
		modal.find('#kd_penyakit').attr("value",div.data('kd_penyakit'));
		modal.find('#nama').attr("value",div.data('nama'));
		modal.find('#keterangan').html(div.data('keterangan'));
	});

});


	// $(document).ready(function(){
	// 	$('#edit-data').on('show.bs.modal', function (event) {
	// 		var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
	// 		var modal          = $(this)
	//
	// 		// Isi nilai pada field
	// 		modal.find('#id_p').attr("value",div.data('id_p'));
	// 		modal.find('#kd_penyakit').attr("value",div.data('kd_penyakit'));
	// 		modal.find('#nama').attr("value",div.data('nama'));
	// 		modal.find('#keterangan').html(div.data('keterangan'));
	// 	});
	//
	// });

	// $("#simpan").click(function(){
	// 	Swal.fire(
	// 		'Good job!',
	// 		'You clicked the button!',
	// 		'success'
	// 	)
	// });



	$('.tombol').DataTable( {
		dom: 'Bfrtip',
		buttons: [
			'copy', 'excel', 'pdf', 'print'
		]
	} );
	$('.select2').select2()

	$(function () {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '20%' /* optional */
		});
	});
</script>

</body>
</html>
