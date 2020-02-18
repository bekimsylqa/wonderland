<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
