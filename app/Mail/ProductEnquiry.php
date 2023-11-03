<?php

namespace App\Mail;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProductEnquiry extends Mailable
{
    use Queueable, SerializesModels;

    public $product;
    public $details;

    public function __construct(Product $product, $details)
    {
        $this->product = $product;
        $this->details = $details;
    }

    public function build()
    {
        return $this->view('emails.productenquiry');
    }
}

