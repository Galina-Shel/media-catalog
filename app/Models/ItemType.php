<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ItemType extends Model
{
    //добро на массовое заполнение
    protected $fillable = [
        'name',
        'key',
        'created_by',
    ];

    //связь 1:М
    public function items(): HasMany{
        return $this->hasMany(Item::class, 'item_type_id');
    }
}
