<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGallery extends Model
{
    // protected $table = 'products';

    use SoftDeletes;

    protected $fillable = [
        'products_id','photo','is_default'
    ];

    protected $hidden = [
        
    ];

    public function product()
    {
        return $this->belongsTo(Product::class,'products_id','id');
    }

    public function getFirstNameAttribute($value)
    {
        return url('storage/',$value);
    }
}
