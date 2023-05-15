@include('shared.head')
@include('shared.navgeneral')
<a href="{{ route('route.index') }}">Show All</a>

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
                    <td>
                        <input type="text" name="status" value="{{ $order->status }}" data-order="{{ $order->id }}">
                        <button onclick="guardar({{ $order->id }})">Save</button>
                    </td>
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
        function guardar(orderId) {
            var status = document.querySelector(`input[name="status"][data-order="${orderId}"]`).value;
            var url = "{{ route('update-status') }}";

            $.ajax({
                url: url,
                method: "POST",
                data: {
                    orderId: orderId,
                    status: status,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    alert("The status has been successfully updated!");
                },
                error: function(xhr, status, error) {
                    alert("An error occurred while updating the status.");
                }
            });
        }

        $(document).ready(function() {
            $('#miTabla').DataTable();
        });
    </script>
</body>
</html>
