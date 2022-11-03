<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;
use App\Models\Room;

class Property extends Model
{
    protected $fillable=[
        'superficie',
        'intitule',
        'adresse',
        'loyer',
        'details',
        'image',
        'status',
        'description',
        'image',
        'visite_virtuelle',
        'type_id',
        'room_id',
        'home_id',
        'land_id',
        'owner_id'

    ];
    public function type()
    {
        return $this->hasOne(Type::class);
    }
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
    use HasFactory;
}
