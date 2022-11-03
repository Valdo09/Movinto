<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Property;

class Room extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'isFurnished',
        'isPainted',
        'isTiled'



    ];
    public function property()
    {
        return $this->belongsTo(Property::class);

    }
}
