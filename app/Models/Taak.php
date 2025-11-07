<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taak extends Model
{
    protected $fillable = ['naam', 'voltooid', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
