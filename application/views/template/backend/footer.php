  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      id.sharp
    </div>
    Copyright &copy; 2021 All rights reserved.
  </footer>

</div>
<!-- ./wrapper -->
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

<script>
  $(function () {
    $('#tabledashboard').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      dom: 'Bfrtip',
        buttons: [
            'excel'
        ]
    });

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'DD-MM-YYYY'
    });

    $('#start').datetimepicker({
      format: 'HH:mm:ss'
    });

    $('#end').datetimepicker({
      format: 'HH:mm:ss'
    });

    $('#duration').datetimepicker({
      format: 'HH:mm:ss'
    });

  });

  

</script>


</body>
</html>