<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Qrcode;

class CreateQrcodeRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            // 'qrcode_id' => 'required',
            'image' => 'required',
            'quantity' => 'required',
            'sku' => 'required',
            'slug' => 'required',
            'p_description' => 'required',
            'amount' => 'required',
        ];
    }
}
