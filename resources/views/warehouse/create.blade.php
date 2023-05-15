@include('shared.head')
<body>
    @if(Auth::user()->role == 0) <!-- Verifica si el rol es de administrador -->
    @include('layouts.navbar') <!-- Incluye el navbar para el administrador -->
  <div>
  @else
    @include('shared.navgeneral')
    @endif

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

    h1{
        text-align: center;
    }
    </style>
    <h1>{{$page_title}}</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <a class="btn btn-primary" href="{{ route('warehouse.index') }}">Warehouse</a>

            </div>
        </div>
    </div>
    <div style="max-width: 400px; margin: 0 auto;">
        <form action="{{ route('warehouse.create') }}" method="POST" class="formulario"  style="margin-top: 20px;">
            @csrf

            <label for="product_id" style="display: block; margin-bottom: 5px;">Product ID:</label>
            <input type="text" name="product_id" id="product_id" required style="width: 100%; padding: 5px;">

            <label for="quantity" style="display: block; margin-bottom: 5px;">Quantity:</label>
            <input type="text" name="quantity" id="quantity" required style="width: 100%; padding: 5px;">

            <label for="status" style="display: block; margin-bottom: 5px;">Status:</label>
            <input type="text" name="status" id="status" required style="width: 100%; padding: 5px;">

            <button type="submit" style="display: block; margin-top: 10px; padding: 5px 10px;">Create Request</button>
        </form>
    </div>

    @include('shared.footer')
</body>
</html>
