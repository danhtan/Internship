<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class XoaMonHoc extends Controller
{
    function xoamonhoc(Request $request)
    {
    $mang = array();
    $id = $request->get('id');
    DB::table('cauhoi')->where('IDMH', $id)->delete();
    DB::table('diem')->where('IDMH', $id)->delete();
    DB::table('cautruc')->where('IDMH', $id)->delete();
    DB::table('monhoc')->where('ID', $id)->delete();
    echo "Xóa thành công";
    }

}
