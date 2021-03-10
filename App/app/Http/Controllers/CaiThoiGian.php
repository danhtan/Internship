<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CaiThoiGian extends Controller
{
    function caithoigian(Request $request){
        $start = $request->get('batDau');
        $end = $request->get('ketThuc');
        $IDMH = $request->get('IDMH');
        $sql = 0;
        $sql1 = 0;
         $sql = DB::table('thoigian')->where('IDMH' , $IDMH)->where('thoigianbatdau', '<=', $start )->where('thoigianketthuc', '>=' , $start)->get()->count();
         $sql1 = DB::table('thoigian')->where('IDMH' , $IDMH)->where('thoigianbatdau', '<=', $end )->where('thoigianketthuc', '>=' , $end)->get()->count();
        if($sql != 0 || $sql1 != 0){
            echo "Trùng lịch thi";
        }
       else{
        DB::table('thoigian')->insert(
            ['ID' => null,'IDMH' => $IDMH,'thoigianbatdau'=>$start,'thoigianketthuc'=>$end]
        );
        echo "Thêm lịch thi thành công";
       }
    }
}
