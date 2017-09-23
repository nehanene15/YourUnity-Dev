<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    protected $fillable = [
        'firedb_id',
        'name',
        'avatar'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
