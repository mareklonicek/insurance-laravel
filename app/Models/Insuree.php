<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\Provider;
use App\Models\Insurancetype;
use App\Models\InsureeDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Insuree extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'extras' => 'array',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function insurancetype()
    {
        return $this->belongsTo(insurancetype::class);
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
    public function insureeDetail()
    {

        return $this->hasOne(InsureeDetail::class);
    }
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    // protected static function boot()
    // {
    //     parent::boot();

    //     // Listen for the creating event
    //     static::creating(function ($insuree) {
    //         // Create InsureeDetails along with the Insuree
    //         // Create InsureeDetails along with the Insuree
    //         $insureeDetail = $insuree->insureeDetail()->create();

    //         // Redirect to the create action in InsureeDetailController
    //         return redirect()->route('insureeDetails.create', ['insureeDetail' => $insureeDetail->id]);
  
    //     });
    // }
}
