<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    public function getBodyAttribute($value){
      return ucfirst($value);

    }
}
