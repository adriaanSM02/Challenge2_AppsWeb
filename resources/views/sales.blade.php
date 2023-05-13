@extends('layouts.app')

@section('content')
    <h1>Create Order</h1>
    <form action="{{ route('sales.store') }}" method="get">
      @csrf
        <label for="client_id">Client:</label>
        <select name="client_id" id="client_id">
            @foreach ($clients as $client)
                <option value="{{ $client->id }}">{{ $client->name }}</option>
            @endforeach
        </select>

        <label for="products">Products:</label>
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>
                        <input type="number" name="quantities[]" value="1" min="1">
                        <input type="hidden" name="products[]" value="{{ $product->id }}">
                    </td>
                </tr>
            @endforeach
        </table>

        <button type="submit">Create Order</button>
    </form>
@endsection
