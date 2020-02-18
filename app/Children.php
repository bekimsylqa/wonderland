<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
}
