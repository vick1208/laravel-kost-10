<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Placement extends Model
{
    use HasFactory;
    protected $table = "placements";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $incrementing = true;
    public $timestamps = true;

    public function room() : BelongsTo {
        return $this->belongsTo(Room::class);
    }
    public function occupant() : BelongsTo {
        return $this->belongsTo(Occupant::class);
    }
}
