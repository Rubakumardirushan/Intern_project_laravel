@if(isset($products))
    <ul>
        @foreach($products as $product)
            <li>
                <strong>{{ $product->product_name }}</strong><br>
                Category: {{ $product->category }}<br>
                Description: {{ $product->product_description }}
            </li>
        @endforeach
    </ul>
@endif
