<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;

class ProductImagesSeeder extends Seeder
{
    public function run()
    {
        // Variations/colors for your images
        $variations = ['black','white', 'blue','darkblue','orange', 'red', 'grey'];

        $products = Product::all();

        foreach ($products as $product) {
            foreach ($variations as $color) {
                $imageName = "example-product-{$product->id}-{$color}.jpg";

                if (file_exists(public_path("images/product/{$imageName}"))) {
                    ProductImage::create([
                        'product_id' => $product->id,
                        'filename'   => $imageName
                    ]);
                }
            }
        }
    }
}
