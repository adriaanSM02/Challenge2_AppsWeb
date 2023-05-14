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
  <nav>
 
  
  <img src="{{asset('img/halconLogo.png')}}">

    <ul>
        <a href="{{ route('sales.index') }}">Show All Orders</a>
        <a href="{{ route('sales.delete') }}">Delete Orders</a>
        <li><a href="{{ route('sales.edit') }}">Edit Order</a></li>

    </ul>

    <div>
      <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="logout-button">Cerrar sesión</button>
      </form>
  </div>
  
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
  </style>
  

  </nav>
<style>
    .formulario {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 300px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
    
    .formulario div {
        margin-bottom: 10px;
    }
    
    .formulario label {
        font-weight: bold;
        margin-right: 5px;
    }
    
    .formulario input[type="text"],
    .formulario input[type="number"],
    .formulario textarea,
    .formulario select {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
        width: 100%;
    }
    
    .formulario button[type="submit"] {
        padding: 10px;
        background-color: #167CA5;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    
    .formulario button[type="submit"]:hover {
        background-color: #051644;
    }
</style>

<form action="{{ route('sales.store') }}" method="POST" class="formulario">
    @csrf
    <div>
        <label for="client_id">Client ID:</label>
        <input type="number" name="client_id" id="client_id" required>
    </div>
    
    <div>
        <label for="status">Status:</label>
        <input type="number" name="status" id="status" required>
    </div>
    
    <div>
        <label for="subtotal">Subtotal:</label>
        <input type="number" step="0.01" name="subtotal" id="subtotal" required>
    </div>
    
    <div>
        <label for="tax">Tax:</label>
        <input type="number" step="0.01" name="tax" id="tax" required>
    </div>
    
    <div>
        <label for="total">Total:</label>
        <input type="number" step="0.01" name="total" id="total" required>
    </div>
    
    <div>
        <label for="notes">Notes:</label>
        <textarea name="notes" id="notes"></textarea>
    </div>
    
    <div>
        <label for="dateNtime">Date and Time:</label>
        <input type="datetime-local" name="dateNtime" id="dateNtime" required>
    </div>
    
    <div>
        <label for="photo1">Photo 1:</label>
        <input type="text" name="photo1" id="photo1">
    </div>
    
    <div>
        <label for="active">Active:</label>
        <input type="number" name="active" id="active" required>
    </div>
    
    <div>
        <label for="created_at">Created At:</label>
        <input type="datetime-local" name="created_at" id="created_at" required>
    </div>
    
    <div>
        <label for="updated_at">Updated At:</label>
        <input type="datetime-local" name="updated_at" id="updated_at" required>
    </div>
    
    <button type="submit" class="formulario-boton">Crear Orden</button>
</form>



