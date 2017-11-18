<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{   // accesser
    public function getBodyAttribute($value){
      return ucfirst($value);

    }
    public function getTitleAttribute($value){
      return ucfirst($value);

    }
     //mutators
    public function setBodyAttribute($value){
      return $this->attributes['body']=ucfirst($value);
    }

}
