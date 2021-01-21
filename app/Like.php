<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
  /**
* The table associated with the model.
*
* @var string
*/
protected $table = 'likes';


    protected $fillable=['user_id','post_id','email',];

}
