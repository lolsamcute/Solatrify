<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Qrcode
 * @package App\Models
 * @version June 6, 2018, 1:24 pm UTC
 *
 * @property integer user_id
 * @property string website
 * @property string company_name
 * @property string product_name
 * @property string product_url
 * @property string callback_url
 * @property string qrcode_path
 * @property float amount
 * @property boolean status
 */
class Qrcode extends Model
{
    use SoftDeletes;

    public $table = 'qrcodes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'qrcode_id',
        'youtube_url',
        'category_id',
        'manufacture_id',
        'slug',
        'p_description',
        'quantity',
        'sku',
        'name',
        'qrcode_path',
        'amount', 
        'oldAmount',
        'status',
        'product_url',
        'callback_url',
        'qrcode_path',
        'image',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'qrcode_id' => 'integer',
        'image' => 'string',
        'youtube_url' => 'string',
        'category_id' => 'integer',
        'manufacture_id' => 'integer',
        'slug' => 'string',
        'p_description' => 'string',
        'quantity' => 'string',
        'sku' => 'string',
        'name' => 'string',
        'quantity' => 'string',
        'amount' => 'float',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

      /**
     * Get the transactions for the qrcode.
     */
    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction');
    }

    public function photos(){

        return $this->hasMany('App\Photo');
    
      }
    
    
}
