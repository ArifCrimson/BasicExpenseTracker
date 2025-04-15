<h1>Report for {{$month}}</h1>

<ul>
    @foreach ($expenses as $expense)
        <li>{{ $expense->name }} - MYR{{ $expense->total_price }}</li>
    @endforeach
</ul>