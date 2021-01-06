<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product as ResourcesProduct;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Models\Product;
use App\Models\Visitor;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function orderPlace(Request $request){
        $visitor = Visitor::where('api_token', $request->get('token'))->first();

        $invoice = new Invoice();
        $invoice->visitor_id = $visitor->id;
        $invoice->status = 'PENDING';
        $invoice->paid_by = 'Cash';
        $invoice->is_payment_done = false;
        $invoice->is_delete = false;
        $invoice->total = 50;
        if( $invoice->save() ){
            foreach( $request->get('id') as $key => $id ){
                $find_product = Product::find($id);
                $product = new ResourcesProduct($find_product);
                $invoice_product = new InvoiceProduct();
                $invoice_product->product_id = $product->id;
                $invoice_product->invoice_id = $invoice->id;
                $invoice_product->name = $product->name;
                $invoice_product->image = $product->image;
                $invoice_product->qty = $request->get('qty')[$key];
                $invoice_product->price = $product->offer_price ? $product->offer_price : $product->regular_price;
                $invoice_product->total = $request->get('qty')[$key] * $invoice_product->price;

                if( $invoice_product->save() ){
                    $invoice->total += $invoice_product->total;
                    $invoice->save();
                }
            }
            return response()->json(['success' => 'Order placed successfully'], 200);
        }
        
        
    }
}
