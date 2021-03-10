<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LayCauTruc extends Controller
{
    
        function laycautruc(Request $request){
            $IDMH = $request->get('IDMH');
            $sql = DB::table('cautruc')->where('IDMH', $IDMH)->get();
            $total = DB::table('cautruc')->where('IDMH', $IDMH)->get()->count();
            $json =array();
            if($total > 0){
                foreach($sql as $row){
                    $md = $row->DoKho;
                    $nhom = $row->NhomCH;
                    $soluong = $row->Soluong;
                    if($md == 1){
                    array_push($json,array("mucdo"=>"Nhận biết","nhom"=>$nhom,"soluong"=>$soluong));
                    }
                   if($md == 2){
                    array_push($json,array("mucdo"=>"Thông hiểu","nhom"=>$nhom,"soluong"=>$soluong));
                   }
                   if($md == 3){
                    array_push($json,array("mucdo"=>"Vận Dụng","nhom"=>$nhom,"soluong"=>$soluong));
                   }
                   if($md == 4){
                    array_push($json,array("mucdo"=>"Vận Dụng Cao","nhom"=>$nhom,"soluong"=>$soluong));
                   }
                }
            }
            echo json_encode($json);
        }
        
    
}
