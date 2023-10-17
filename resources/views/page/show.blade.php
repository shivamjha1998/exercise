<x-layout>
    <x-slot:title>{{ $page->title }}</x-slot>
    
    <h1>{{ $page->title }}</h1>

    {!! $page->content !!}

    @isset($products)
        <div class="product-grid">
            @foreach($products as $product)
                <x-product-grid-item :product="$product" />
            @endforeach
        </div>
    @endisset
</x-layout>