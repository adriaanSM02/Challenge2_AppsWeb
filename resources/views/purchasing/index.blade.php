@extends('layouts.app')

@section('content')
    <h1>{{ $page_title }}</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product ID</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($requests as $request)
                <tr>
                    <td>{{ $request->id }}</td>
                    <td>{{ $request->product_id }}</td>
                    <td>{{ $request->quantity }}</td>
                    <td>{{ $request->status }}</td>
                    <td>{{ $request->created_at }}</td>
                    <td>{{ $request->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
