<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;

    protected $table = "rooms";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $incrementing = true;
    public $timestamps = false;

    public $fillable = [
        "location_id",
        "code",
        "capacity",
    ];
    public function location() : BelongsTo {
        return $this->belongsTo(Location::class);
    }
    public function placements() : HasMany {
        return $this->hasMany(Placement::class);
    }
}
