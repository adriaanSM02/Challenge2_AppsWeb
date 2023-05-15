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

@if(Auth::user()->role == 0) <!-- Verifica si el rol es de administrador -->
    @include('layouts.navbar') <!-- Incluye el navbar para el administrador -->
    <ul>
      <li><a href="{{ route('purchasing.edit') }}">Edit Status</a></li>

  </ul>

  <div>
  @else

  <nav>
 
  
    <img src="{{asset('img/halconLogo.png')}}">
  
      <ul>
        <li><a href="{{ route('purchasing.edit') }}">Edit Status</a></li>

  
      </ul>
  
      <div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-button">Cerrar sesión</button>
        </form>
    </div>
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
          max-height: 600px; /* ajusta este valor según tus necesidades */
          overflow-y: auto;
      }
    </style>
    
  
    </nav>

<body>

    <div style="text-align: center;">
        <h1>{{$page_title}}</h1>
    </div>
    <br/>
    <table id="miTabla">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product ID</th>
                <th>Quantity</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($requests as $request)
            <tr>
                <td>{{ $request->id }}</td>
                <td>{{ $request->product_id }}</td>
                <td>{{ $request->quantity }}</td>
                <td>
                @switch($request->status)
                                    @case(0)
                                        No Stock
                                        @break
                                    @case(1)
                                        Almost No Stock
                                        @break
                                    @case(2)
                                        In Process
                                        @break
                                    @case(3)
                                        In Track
                                        @break
                                    @case(4)
                                        Purchased
                                        @break
                                    @default
                                        Processing
                                        @break
                            @endswitch
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

   
    @include('shared.footer')
</body>
</html>
