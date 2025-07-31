<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\hasFactory;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use softDeletes, hasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id',
        'img',
        'is_active',
        'created_at',
        'updated_at',
    ];

    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'item_id');
    }
}
