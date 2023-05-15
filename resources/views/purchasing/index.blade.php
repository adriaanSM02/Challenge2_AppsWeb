@include('shared.head')

<body>

    @include('shared.navgeneral')
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

   
    @include('shared.footer')
</body>
</html>
