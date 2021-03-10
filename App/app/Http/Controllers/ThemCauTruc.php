<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ThemCauTruc extends Controller
{
    function themcautruc(Request $request){
        $mucdo = $request->get('MucDo');
        $nhomch = $request->get('NhomCH');
        $soluong = (int) $request->get('SoLuong');
        $IDMH = $request->get('IDMH');
         $sql = DB::table('cautruc')->where('IDMH' , $IDMH)->where('DoKho', $mucdo )->where('NhomCH',$nhomch)->get();
         $total = DB::table('cautruc')->where('IDMH' , $IDMH)->where('DoKho', $mucdo )->where('NhomCH',$nhomch)->get()->count();
        if($total > 0){
            echo "Trùng cấu trúc thi";
        }
        else{
           $total1 = (int)DB::table('monhoc')->select('SoCauTrongDe')->where('ID',$IDMH)->first()->SoCauTrongDe;
           $sum =  (int)DB::table('cautruc')->where('IDMH',$IDMH)->sum('Soluong');
           $sum1 = $sum + $soluong;
           $check = $sum1 - $total1;
            if($check > 0){
                echo "Vượt quá tổng số câu trong đề";
            }
            else{
            DB::table('cautruc')->insert(
                ['DoKho' => $mucdo,'NhomCH' => $nhomch,'IDMH'=>$IDMH,'Soluong'=>$soluong]
            );
            echo "Thêm cấu trúc thành công";
         }
        }
        
    }
}
