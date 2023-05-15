@include('shared.head')
@include('shared.navwelcome')
<body>
<div class="container py-4">
    <div class="row">
        <div class="col">
            <h1 class="text-center mb-3">{{ $page_title }}</h1>

            <table class="table text-end" id="datatable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Subtotal</th>
                        <th>Tax</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>${{ number_format($order->subtotal, 2) }}</td>
                            <td>${{ number_format($order->tax, 2) }}</td>
                            <td>${{ number_format($order->total, 2) }}</td>
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
                        </tr>
                    @empty
                        <tr>
                            <td>There're no orders.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
