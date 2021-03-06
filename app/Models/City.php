<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $table = "cities";

    public function users()
    {
        return $this->hasMany(User::class,"city_id","id");
    }

}
