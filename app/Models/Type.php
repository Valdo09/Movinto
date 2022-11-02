<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bien;

class Type extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description'
    ];
    public function biens()
    {
        return $this-hasMany(Bien::class);
    }
}
