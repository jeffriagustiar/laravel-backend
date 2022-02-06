<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    // protected $table = 'products';

    use SoftDeletes;

    protected $fillable = [
        'products_id','transactions_id'
    ];

    protected $hidden = [
        
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class,'transactions_id','id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'products_id','id');
    }
}
