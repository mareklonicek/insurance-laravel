<?php

namespace App\Models;

use App\Models\Insuree;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Provider extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function insurees()
    {
        return $this->hasMany(Insuree::class);
    }
}
