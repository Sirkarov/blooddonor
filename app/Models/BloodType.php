<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    public $table = 'blood_types';

    public function users()
    {
        return $this->hasMany(User::class,"blood_type_id","id");
    }
}
