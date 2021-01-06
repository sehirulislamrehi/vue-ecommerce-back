<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Invoice extends JsonResource
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
            'visitor_id' => $this->visitor->id,
            'status' => $this->status,
            'paid_by' => $this->paid_by,
            'is_payment_done' => $this->is_payment_done,
            'is_delete' => $this->is_delete,
            'total' => $this->total,
            'product' => $this->invoice_products->product,
        ];
    }
}
