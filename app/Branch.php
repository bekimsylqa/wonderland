<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function children()
    {
        return $this->hasMany(Children::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function activity()
    {
        return $this->hasMany(Activity::class);
    }
}
