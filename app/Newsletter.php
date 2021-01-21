<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
      /**
* The table associated with the model.
*
* @var string
*/
protected $table = 'newsletter';

protected $fillable=['full_name', 'email',];


}
