<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Qrcode extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'qrcode_id' => $this->qrcode_id,
            'sku' => $this->sku,
            'amount' => $this->amount,
            'quantity' => $this->quantity,
            'name' => $this->name,
            'created_at' => $this->created_at,
            'link' => [
                'payment_page_link' => route('qrcodes.show', $this->id),
                'qrcode_link' => asset($this->qrcode_path) 
            ]
        ];
    }
}
