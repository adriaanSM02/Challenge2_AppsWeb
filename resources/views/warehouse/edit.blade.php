@include('shared.head')
<body>
    <style>
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

    @if(Auth::user()->role == 0) <!-- Verifica si el rol es de administrador -->
    @include('layouts.navbar') <!-- Incluye el navbar para el administrador -->
    <ul>
        <li><a href="{{ route('warehouse.index') }}">Show Orders</a></li>
    </ul>
    <div>
    @else
        <nav>
            <img src="{{asset('img/halconLogo.png')}}">
  
            <ul>
                <li><a href="{{ route('warehouse.index') }}">Show Orders</a></li>
            </ul>
  
            <div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="logout-button">Cerrar sesión</button>
                </form>
            </div>
    @endif
    </nav>

    <div style="text-align: center;">
        <h1>{{ $page_title }}</h1>
    </div>
    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <table class="table text-center"  id="miTabla">
                    <thead style="font-weight: bold;">
                        <th>ID</th>
                        <th>Client ID</th>
                        <th>Status</th>
                        <th>Update</th>
                        <th>Subtotal</th>
                        <th>Tax</th>
                        <th>Total</th>
                        <th>Notes</th>
                        <th>Date And Time</th>
                        <th>Photo</th>
                    </thead>
                    <tbody>
                        @forelse($orders as $index => $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->client_id }}</td>
                            <td>
                                <form action="{{ route('actualizar-estado', ['id' => $order->id]) }}" method="POST">
                                @csrf  @method('PUT') <input type="text" name="status" value="{{ $order->status }}">
                                
                            </td>
                            <td><button type="submit">Update</button></form></td>
                            <td>{{ $order->subtotal }}</td>
                            <td>{{ $order->tax }}</td>
                            <td>{{ $order->total }}</td>
                            <td>{{ $order->notes }}</td>
                            <td>{{ $order->dateNtime }}</td>
                            <td><img width="100" src="{{ $order->photo1 }}"></td>
                        </tr>
                        @empty
                        <p>no</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    
    @include('shared.footer')
</body>
</html>