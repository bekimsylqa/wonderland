<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function branch()
    {
        return $this->belongsTo(Branch::class);
   }
}
