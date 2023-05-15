<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-vOzCc3we4hFv+g9p4zN1q0wXz9GvJll1wWJ2G6q7PNJkjOlyMShxHvYzZBpAzq8g1w5uGf1Brf7Ia2tF7W2ypg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    /* Estilos para la barra de navegación */

    body{
      margin:0;
    }
    nav {
  
      background-color: #051644;
      overflow: hidden;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px;
    }
    nav img {
      height: 50px;
      margin-left: 10px;
    }
    nav ul {
      display: flex;
      list-style-type: none;
      margin: 0;
      padding: 0;
    }
    nav li {
      margin-right: 10px;
    }
    nav a {
      color: white;
      text-decoration: none;
      padding: 10px;
    }
    
    /* Estilos para el buscador */
    #search {
      margin-right: 10px;
    }
    #search input[type="text"] {
      border-radius: 4px;
      padding: 6px;
      border: none;
      width: 200px;
    }
    #search button {
      background-color: #167CA5;
      color: white;
      border-radius: 4px;
      border: none;
      padding: 6px 10px;
      cursor: pointer;
    }
    #search button:hover {
      background-color: darkblue;
    }
    #logout {
background-color: #167CA5;
}
  </style>
</head>
<body>
 
  @if(Auth::user()->role == 0) <!-- Verifica si el rol es de administrador -->
    @include('layouts.navbar') <!-- Incluye el navbar para el administrador -->
    <style>
      h1 {
       text-align: center;
   }
     .btn-create {
         background-color: green; /* Cambia este valor al color deseado para el botón "Create a Order" */
         color: white;
     }
  
     .btn-delete {
         background-color: red; /* Cambia este valor al color deseado para el botón "Delete Order" */
         color: white;
     }
  
     .btn-edit {
         background-color: blue; /* Cambia este valor al color deseado para el botón "Edit Order" */
         color: white;
     }
  </style>
  <h1>{{ $page_title }}</h1>
  
    <ul>
      <a href="{{ route('sales.create') }}"><button class="btn-create">Create a Orde</button></a>
        <a href="{{ route('sales.index') }}"><button class="btn-delete">Show All</button></a>
        <a href="{{ route('sales.edit') }}"><button class="btn-edit">Edit Order</button></a>
  </ul>

  <div>
  @else

  <nav>
 
  <img src="{{asset('img/halconLogo.png')}}">

    <ul>
        <li><a href="{{ route('sales.create') }}">Create a Order</a></li>
        <li><a href="{{ route('sales.index') }}">Show All</a></li>
        <li><a href="{{ route('sales.delete') }}">Delete Order</a></li>

    </ul>

    <div>
      <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="logout-button">Cerrar sesión</button>
      </form>
  </div>
</nav>
<h1>{{ $page_title }}</h1>
  @endif

  <style>
      .logout-button {
          background-color: #167CA5;
          color: white;
          border: none;
          padding: 8px 12px;
          border-radius: 4px;
          transition: background-color 0.3s;
      }
      
      .logout-button:hover {
          background-color: red;
      }

    .table-container {
        max-height: 700px; 
        overflow-y: auto;
    }
    h1{
      text-align: center;
    }
  </style>
  

 

<body>
    <div style="text-align: center;">
    </div>

    <br/>
    <div class="table-container">

    <table id="miTabla">
        <thead>
            <tr>
                <th>ID</th>
                <th>Client ID</th>
                <th>Status</th>
                <th>Subtotal</th>
                <th>Tax</th>
                <th>Total</th>
                <th>Notes</th>
                <th>Date and Time</th>
                <th>Photo 1</th>
                <th>Active</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Updated</th>
            </tr>
        </thead>
    @foreach ($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->client_id }}</td>
            <td><form action="{{ route('update-status', ['id' => $order->id]) }}" method="POST"> @csrf  @method('PUT') <input type="text" name="status" value="{{ $order->status }}"></td>
            <td><input type="text" name="subtotal" value="{{ $order->subtotal }}"></td>
            <td><input type="text" name="tax" value="{{ $order->tax }}"></td>
            <td><input type="text" name="total" value="{{ $order->total }}"></td>
            <td><input type="text" name="notes" value="{{ $order->notes }}"></td>
            <td>{{ $order->dateNtime }}</td>
            <td><img width="100" src="{{ $order->photo1 }}"></td>
            <td><input type="text" name="active" value="{{ $order->active }}"></td>
            <td>{{ $order->created_at }}</td>
            <td>{{ $order->updated_at }}</td>

            <td><button type="submit">Actualizar</button></form></td>
            
            <td></td>
        </tr>
    @endforeach
        </tbody>
    </table>
</div>

    <script>
     
        $(document).ready(function() {
            $('#miTabla').DataTable({
                "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true
            }
                
        );
        });
    </script>
</body>
</html>
