<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'unit_measure',
        'barcode',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
