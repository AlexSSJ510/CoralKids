<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservar extends Model
{
    protected $table = 'reservas';
    use HasFactory;
    public $timestamps=false;
}
