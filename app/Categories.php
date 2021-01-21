<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

        
  /**
* The table associated with the model.
*
* @var string 
*/
protected $table = 'category';

    protected $fillable=['name', 'file',];

    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
