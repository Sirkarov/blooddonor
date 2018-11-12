<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GenderType extends Model
{
    public $table = 'gender_types';

    public function users()
    {
        return $this->hasMany(User::class,"gender_type_id","id");
    }
}
