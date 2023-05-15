@include('shared.head')
<body>
    @if(Auth::user()->role == 0) <!-- Verifica si el rol es de administrador -->
    @include('layouts.navbar') <!-- Incluye el navbar para el administrador -->
  <div>
  @else
    @include('shared.navgeneral')
    @endif
    <h1 class="text-center p-3">{{ $page_title }}</h1>
    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <a class="btn btn-primary" href="{{ route('warehouse.create') }}">Warehouse Department
                </a>
            </div>
        </div>
    </div>
    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <table class="table text-center"  id="datatable">
                    <thead style="font-weight: bold;">
                        <th>ID</th>
                        <th>Client ID</th>
                        <th>Status</th>
                        <th>Subtotal</th>
                        <th>Tax</th>
                        <th>Total</th>
                        <th>Notes</th>
                        <th>Date And Time</th>
                        <th>Photo</th>
                    </thead>
                    <tbody>
                        @forelse($orders as $order)
                        <tr>
                            <td><a href="{{ route('warehouse.show', $order->id) }}">{{$order->id}}</a></td>
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
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
    @include('shared.footer')
</body>
</html>