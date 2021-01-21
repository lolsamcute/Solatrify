<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{

  /**
* The table associated with the model.
*
* @var string
*/
protected $table = 'post_category';


  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

   protected $fillable = array('title',);


}
