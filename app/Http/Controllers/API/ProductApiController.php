<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductApiController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit',6);
        $name = $request->input('name');
        $slug = $request->input('slug');
        $type = $request->input('type');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');

        if($id)
        {
            $p = Product::with('galleries')->find($id);

            if($p)
                return ResponseFormatter::success($p,'Data product berhasil diambil');
            else
                return ResponseFormatter::error($p,'Data product tidak ada', 404);
                
        }

        if($slug)
        {
            $p = Product::with('galleries')
                ->where('slug',$slug)
                ->first();

            if($p)
                return ResponseFormatter::success($p,'Data product berhasil diambil');
            else
                return ResponseFormatter::error($p,'Data product tidak ada', 404);
                
        }

        $p = Product::with('galleries');

        if($name)
            $p->where('nama','like','%'.$name.'%');
        if($type)
            $p->where('type','like','%'.$type.'%');

        if($price_from)
            $p->where('price_from','>=',$price_from);
        if($price_to)
            $p->where('price_to','<=',$price_to);

        return ResponseFormatter::success(
            $p->paginate($limit),
            'Data list product berhasil diambil'
        );
    }
}
