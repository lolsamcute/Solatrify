<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

  /**
* The table associated with the model.
*
* @var string
*/
protected $table = 'comments';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $fillable = array('user_id', 'post_id', 'message',);


}
