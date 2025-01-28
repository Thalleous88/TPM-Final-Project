<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Participant extends Model
{
    protected $table = 'participants';

    protected $fillable = [
        "name",
        "email",
        "password",
        "group_name",
        "status",
        "wa_number",
        "line_id",
        "github_id",
        "birth_place",
        "birth_date",
        "binusian_flazz_card",
        "cv",
        "non_binusian_card",
        "is_leader"
    ];

    public function group(): BelongsTo {
        return $this->belongsTo(Group::class, 'category_id');
    }
}
