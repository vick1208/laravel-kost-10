<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Placement extends Model
{
    use HasFactory;
    protected $table = "locations";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $incrementing = true;
}
