<h1>PDF Report for {{ $month }}</h1>

<table border="1" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th>Name</th>
            <th>QTY</th>
            <th>Price</th>
            <th>Total Price</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($expenses as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->amount }}</td>
                <td>{{ number_format($item->price, 2) }}</td>
                <td>{{ number_format($item->total_price, 2) }}</td>
                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>