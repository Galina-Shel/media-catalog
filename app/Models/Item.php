<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    //массовое заполнение разрешено
    protected $fillable = [
        'title',
        'item_type_id',
        'created_by',
        'is_approved',
    ];

    //Item - только одного типа
    public function type(): BelongsTo
    {
        return $this->belongsTo(ItemType::class, 'item_type_id');
    }

    //Создатель - один, явно прописанный ключ
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
