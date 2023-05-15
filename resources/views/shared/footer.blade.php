<script>
  $(document).ready(function() {
    var table = $('#miTabla').DataTable({
        "paging": true
    });
 
    $('#prev').on('click', function() {
        table.page('previous').draw('page');
    });
 
    $('#next').on('click', function() {
        table.page('next').draw('page');
    });
 
    $('#miTabla').on('page.dt', function() {
        var info = table.page.info();
        $('#pages').html('Página ' + (info.page + 1) + ' de ' + info.pages);
    });
  });
</script>
<br/>



  </body>
</html>