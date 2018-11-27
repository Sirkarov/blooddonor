<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BloodAction extends Model
{
    public $table = 'blood_actions';

    public function city()
    {
        return $this->belongsTo(City::class,"city_id");
    }
}
