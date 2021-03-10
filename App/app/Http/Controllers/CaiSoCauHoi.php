<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CaiSoCauHoi extends Controller
{
    function caisocauhoi(Request $request){
        $IDMH = $request->get('IDMH');
        $soLuong = $request->get('SL');
        DB::table('monhoc')
            ->where('ID', $IDMH)
            ->update(['SoCauTrongDe' => $soLuong]);
             echo "Cập nhật thành công";


    }
}
