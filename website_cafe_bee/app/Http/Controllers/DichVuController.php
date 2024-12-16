<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class DichVuController extends Controller
{
    public function getdatatheoloaisp(Request $request)
    {
        $data = SanPham::where('tinh_trang', 0)
            ->where('id_san_pham', $request->id)
            ->get();

        if ($data) {
            return response()->json([
                'data'    => $data,
            ]);
        }
    }
}
