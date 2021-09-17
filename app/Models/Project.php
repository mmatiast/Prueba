<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'city_id',
        'company_id',
        'user_id',
        'presupuesto',
        'name',
        'fecha_ejecucion'

    ];
}
