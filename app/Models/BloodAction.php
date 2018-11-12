<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BloodAction extends Model
{
    public $table = 'blood_actions';

    public function users()
    {
        return $this->hasMany(User::class,"blood_action_id","id");
    }
    public function bloodActions()
    {
        return $this->belongsToMany(BloodAction::class,"");
    }
}
