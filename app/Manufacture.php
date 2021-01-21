<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{


    
  /**
* The table associated with the model.
*
* @var string
*/
protected $table = 'manufacture';

    protected $fillable=['file', 'name',];

    public function products()
    {
        return $this->belongsTo(Products::class);
    }
}
