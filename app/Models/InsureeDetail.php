<?php

namespace App\Models;

use App\Models\Insuree;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InsureeDetail extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $table = 'insureeDetails';
    public function insuree(){

        return $this->belongsTo(Insuree::class);
    }
}
