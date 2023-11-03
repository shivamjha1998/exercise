<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Product;
use App\Mail\ProductEnquiry;

class ProductController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function sendEnquiry(Request $request, Product $product)
    {
        $details = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Mail::to('recipient@example.com')->send(new ProductEnquiry($product, $details));

        return redirect()->back()->with('message', 'Enquiry sent!');
    }
}
