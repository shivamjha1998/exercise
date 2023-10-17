<x-layout>
    <h1>{{ $product->name }}</h1>

    <div class="product-page">
        <div>
            <img src="{{ asset('images/product/' . $product->image) }}" alt="{{ $product->name }}">
        </div>

        <div>
            {!! $product->description !!}

            <p>&pound;{{ $product->price }}</p>
        </div>
    </div>
</x-layout>