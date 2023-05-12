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

  h3 {
    text-align: center;
  
  }

</style>
<h3>Results For:</h3><br/>
    <table id="miTabla">
     
  <thead>
    <tr>
      <th>ID</th>
      <th>CN</th>
      <th>IN</th>
      <th>Image</th>
      <th>Product</th>
      <th>Status</th>
      <th>Delivery</th>
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
      <td>Dato 7</td>
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



  </body>
</html>
