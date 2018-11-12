<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = "users";

    public $fillable = [
        'gender_type_id',
        'city_id',
        'blood_type_id',
        'birth',
        'name',
        'surname',
        'email',
        'years',
        'donations',
        'phone',
        'password',
        'image',
    ];

    public function genderType()
    {
        return $this->belongsTo(GenderType::class,"gender_type_id");
    }

    public function city()
    {
        return $this->belongsTo(City::class,"city_id");
    }

    public function bloodType()
    {
        return $this->belongsTo(BloodType::class,"blood_type_id");
    }
}
