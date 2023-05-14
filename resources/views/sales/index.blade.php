@include('layouts.navbar')
<a href="{{ route('sales.create') }}">Create a Order</a>

<body>
    <div style="text-align: center;">

    <h1>{{ $page_title }}</h1>
</div>

<br/>
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
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->client_id }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ $order->subtotal }}</td>
                    <td>{{ $order->tax }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->notes }}</td>
                    <td>{{ $order->dateNtime }}</td>
                    <td>{{ $order->photo1 }}</td>
                    <td>{{ $order->active }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            $('#miTabla').DataTable();
        });
    </script>
</body>
</html>