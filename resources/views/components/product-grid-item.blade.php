<a href="{{ route('product.show', $product) }}">
    <img src="{{ asset('images/product/' . $product->image) }}" alt="{{ $product->name }}">
    {{ $product->name }}
</a>