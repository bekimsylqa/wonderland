<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function children()
    {
        return $this->belongsTo(Children::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
