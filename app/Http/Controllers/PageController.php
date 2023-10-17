<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Product;

class PageController extends Controller
{
    /**
     * Display the specified resource (homepage).
     */
    public function home()
    {
        $page = Page::find(1);

        $products = Product::all();

        return view('page.show', compact('page', 'products'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        return view('page.show', compact('page'));
    }
}
