<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class XoaThoiGianThi extends Controller
{
    function xoathoigianthi(Request $request){
        $id = $request->get('ID');
        DB::table('thoigian')->where('ID', $id)->delete();
        echo "Xóa thành công";
    }
}
