@include('layouts.navbar')

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
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    
    .formulario button[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
<a href="{{ route('sales.index') }}">Show All Orders</a>

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



