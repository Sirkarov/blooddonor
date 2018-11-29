<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = "users";

    public $fillable = [
        'name',
        'surname',
        'email',
        'password',
        'years',
        'gender_type_id',
        'city_id',
        'blood_type_id',
        'birth',
        'donations',
        'phone',
        'image',
    ];
    protected $hidden = [
        'password', 'remember_token',
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
        return $this->belongsTo("App\Models\BloodType","blood_type_id");
    }
}
