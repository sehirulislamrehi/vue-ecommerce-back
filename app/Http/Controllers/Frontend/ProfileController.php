<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Resources\Invoice;
use App\Http\Resources\InvoiceProduct;
use App\Http\Resources\Product;
use App\Models\Visitor;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($token){
        $visitor = Visitor::where('api_token',$token)->first();

        foreach( $visitor->invoice as $single_invoice ){
            foreach( $single_invoice->invoice_products as $single_invoice_product ){
                return new Product($single_invoice_product->product);
            }
        }
    }
}
