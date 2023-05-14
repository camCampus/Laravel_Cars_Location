<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'license_id',
        'vehicle_id',
        'location_start',
        'location_end',
        'estimate_km',
        'estimate_price',
        'actual_km',
        'acompte',
    ];
}
