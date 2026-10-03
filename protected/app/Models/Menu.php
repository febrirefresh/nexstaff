<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function submenus()
    {
        return $this->hasMany(Submenu::class)->where('is_active', true)->orderBy('id', 'asc');
    }
}
