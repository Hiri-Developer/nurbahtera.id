<!-- Copyright &copy; My Notes Code -->
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        Page rendered in <b>{elapsed_time}</b>s
    </div>
    <strong>Copyright &copy; 2020 <a href="http://website.io">Website.com</a>.</strong> All rights
    reserved.
</footer>
<!-- jQuery -->
<script src="<?= base_url('assets/plugins/jquery/jquery.js') ?>"></script>

<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/dist/js/adminlte.js') ?>"></script>
<script src="<?= base_url('assets/dist/js/demo.js') ?>"></script>
<script>
$(function () {
    $("#example1").DataTable();
$('#example2').DataTable({
  "paging": true,
  "lengthChange": false,
  "searching": false,
  "ordering": true,
  "info": true,
  "autoWidth": false,
});
});		
</script>
</body>

</html>