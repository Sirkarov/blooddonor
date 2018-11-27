<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = "posts";

    public $fillable = [
        'description',
        'city_id',
        'blood_type_id'
    ];

    public function city()
    {
        return $this->belongsTo(City::class,"city_id");
    }

    public function bloodType()
    {
        return $this->belongsTo(BloodType::class,"blood_type_id");
    }


}
