<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;


class QrcodeCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $this
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'qrcode_id' => $this->qrcode_id,
            'amount' => $this->amount,
            'quantity' => $this->quantity,
            'sku' => $this->sku,
            'name' => $this->name,
            'link' => [
                'qrcode_link' => route('qrcodes.show', $this->id),
            ]
        ];
     
        
    }
}
