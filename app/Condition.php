<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Corpse;
class Condition extends Model
{
    public function corpse()
    {
        return $this->hasMany('App\Corpse');
    }


}
