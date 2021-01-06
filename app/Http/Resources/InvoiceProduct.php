<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceProduct extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'invoice_id' => $this->invoice_id,
            'name' => $this->name,
            'price' => $this->price,
            'qty' => $this->qty,
            'total' => $this->total,
            'product_id' => $this->product,
        ];
    }
}
