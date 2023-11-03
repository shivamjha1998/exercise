<x-layout>
    <h1>{{ $product->name }}</h1>

    <div class="product-page">
        <div class="product-images">
            <button id="prevBtn" onclick="changeImage(-1)">❮</button>
            
            <!-- Display the original image first -->
            <img src="{{ asset('images/product/' . $product->image) }}" alt="{{ $product->name }}" class="slider-image" data-id="0">

            @php $count = 1; @endphp
            @foreach($product->images as $image)
                <img src="{{ asset('images/product/' . $image->filename) }}" alt="Product Image" class="slider-image" data-id="{{ $count++ }}">
            @endforeach

            <button id="nextBtn" onclick="changeImage(1)">❯</button>
        </div>

        <div class="product-details">
            {!! $product->description !!}
            <p>&pound;{{ $product->price }}</p>
        </div>
    </div>

    <div class="enquiry-section">
        <form action="{{ route('product.enquiry', $product->id) }}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Enquiry</button>
        </form>

    </div>

    <script>
        let currentImage = 0;
        const images = document.querySelectorAll('.slider-image');

        function changeImage(direction) {
            images[currentImage].style.display = 'none';
            currentImage += direction;
            if (currentImage < 0) currentImage = images.length - 1;
            if (currentImage >= images.length) currentImage = 0;
            images[currentImage].style.display = 'block';
        }

        changeImage(0);
    </script>

<style>
        .product-page {
            display: flex;
            gap: 50px;
        }

        .product-images {
            flex: 1; 
            position: relative;
            max-width: 50%; 
            overflow: hidden;
        }

        .slider-image {
            display: none;
            max-width: 100%;
        }
        
        .product-details {
            flex: 2; 
            max-width: 40%; 
            padding-left: 10px;
        }

        #prevBtn, #nextBtn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.3);
            color: white;
            border: none;
            padding: 10px;
            font-size: 24px;
            z-index: 10;
            opacity: 0.8;
        }

        #prevBtn:hover, #nextBtn:hover {
            opacity: 1;
        }

        #prevBtn {
            left: 0;
            border-top-right-radius: 6px;
            border-bottom-right-radius: 6px;
        }

        #nextBtn {
            right: 0;
            border-top-left-radius: 6px;
            border-bottom-left-radius: 6px;
        }

        .enquiry-section {
            padding: 20px;
            background-color: #f9f9f9; 
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1); 
            max-width: 600px; 
            margin: 40px auto; 
        }

        .enquiry-section form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

    </style>
</x-layout>
