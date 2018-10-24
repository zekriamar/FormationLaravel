<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function user()//nom n'import
    {
        return $this->belongsToMany(User::class, 'user_role');//si les id ne sont pas noramlisé, troisième paramètre user_id
    }
}
