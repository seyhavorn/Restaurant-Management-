<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $table = 'provinces';
    protected $fillable = ['id', 'province', 'image'];

    public function restaurants()
    {
        return $this->hasMany(Restaurant::class);
    }
}