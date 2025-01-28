<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    protected $fillable = [
        "group_name",
        "password"
    ];

    public function participants(): HasMany {
        return $this->hasMany(Participant::class, 'id');
    }
}
