<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Http\Requests\API\CheckoutApiRequest;


class CheckoutApiController extends Controller
{
    public function checkout(CheckoutApiRequest $request)
    {
        $data = $request->except('transaction_details');

        $data['uuid'] = 'TRX' . mt_rand(10000,99999) . mt_rand(100,999);

        $t = Transaction::create($data);

        foreach ($request->transaction_details as $p) 
        {
            $details[] = new TransactionDetail([
                'transaction_id' => $t->id,
                'products_id' => $p,
            ]);

            Product::find($p)->decrement('quantity');
        }

        $t->details()->saveMany($details);

        return ResponseFormatter::success($t,'Data sukses ditambahkan');
    }
}
