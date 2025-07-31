<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use SoftDeletes;

    protected $fillable = [
    'cat_name',
    'description',
    'created_at',
    'updated_at'
    ];
    protected $dates = ['deleted_at'];

    public function item()
    {
        return $this->hasMany(item::class, 'category_id');
    }

}
