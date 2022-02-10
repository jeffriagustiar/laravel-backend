<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionApiController extends Controller
{
    public function get(Request $request, $id)
    {
        $p = Transaction::with('details.product')->find($id);

        if($p)
            return ResponseFormatter::success($p,'Data transaksi berhasil diambil');
        else
            return ResponseFormatter::error(null,'Data transaksi tidak ada',404);
    }
}
