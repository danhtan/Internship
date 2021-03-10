<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class XoaCauTruc extends Controller
{
    function xoacautruc(Request $request){
        $id = $request->get('ID');
        $class = $request->get('NA');
        if($class == "Nhận biết")
        {
            $class = 1;
        }
        if($class == "Thông hiểu")
        {
            $class = 2;
        }
        if($class == "Vận dụng")
        {
            $class = 3;
        }
        if($class == "Vận dụng cao")
        {
            $class = 4;
        }
       // DB::table('cauhoi')->where('DoKho', $class)->where('NhomCH' , $id)->delete();
        DB::table('cautruc')->where('DoKho', $class)->where('NhomCH' , $id)->delete();
        echo "Xóa thành công";
    }
}
