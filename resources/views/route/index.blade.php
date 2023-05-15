@include('shared.head')
@include('shared.navgeneral')
<a href="{{ route('route.edit') }}">Edit Status</a>

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
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->client_id }}</td>
                    <td>
                    @switch($order->status)
                                    @case(0)
                                        Processing
                                        @break
                                    @case(1)
                                        Ready to be delivered
                                        @break
                                    @case(2)
                                        In route
                                        @break
                                    @case(3)
                                        Delivered
                                        @break
                                    @case(4)
                                        Cancelled
                                        @break
                                    @default
                                        Processing
                                        @break
                                @endswitch
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
       
        $(document).ready(function() {
            $('#miTabla').DataTable();
        });
    </script>
</body>
</html>
