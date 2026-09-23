<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    public function menus()
    {
        return $this->belongsTo(Menu::class);
    }
}
