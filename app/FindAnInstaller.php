<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FindAnInstaller extends Model
{
      /**
* The table associated with the model.
*
* @var string
*/
protected $table = 'find_an_installer';

protected $fillable=['first_name', 'last_name', 'email', 'company', 'address', 'contactNumber', 'areaInstallerNeeded',];


}
