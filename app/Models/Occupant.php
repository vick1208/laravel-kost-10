<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occupant extends Model
{
    use HasFactory;
    protected $table = "occupants";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $incrementing = true;
}
