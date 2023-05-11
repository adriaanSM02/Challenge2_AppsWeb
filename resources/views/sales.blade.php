<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sales</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-vOzCc3we4hFv+g9p4zN1q0wXz9GvJll1wWJ2G6q7PNJkjOlyMShxHvYzZBpAzq8g1w5uGf1Brf7Ia2tF7W2ypg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    @include('layouts.navbar')
</head>
<body>

    <br/><br/>


<style>
   .btn-large {
  padding: 10px 20px;
  font-size: 13px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  margin-right: auto;

}

</style>

    <table id="miTabla">
  <thead>
    <tr>
      <th>Name or Company Name</th>
      <th>Customer Number</th>
      <th>Fiscal Data</th>
      <th>Date Time</th>
      <th>Delivery Address</th>
      <th>Notes</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Dato 1</td>
      <td>Dato 2</td>
      <td>Dato 3</td>
      <td>Dato 4</td>
      <td>Dato 5</td>
      <td>Dato 6</td>
    </tr>
    
  </tbody>
</table>
<br/>
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

<button id="prev"><</button>
<button id="next">></button>
<button id="cancel" class="btn-large" style="background-color: gray; ">Cancel</button>
<button id="update" class="btn-large"  style="background-color: #167CA5; color: white;">Update</button>

  </body>
</html>
