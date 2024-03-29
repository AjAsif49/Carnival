<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu',
        'link',
    ];

    public function subMenus(): HasMany
    {
        return $this->hasMany(SubMenu::class);
    }
}
