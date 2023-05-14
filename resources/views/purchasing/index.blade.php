@include('layouts.navbar')

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
                <td>{{ $request->status }}</td>
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
