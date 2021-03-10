<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LayThoiGianThi extends Controller
{
    function laythoigianthi(Request $request){
        $IDMH = $request->get('IDMH');
        $sql = DB::table('thoigian')->where('IDMH', $IDMH)->get();
      $total = DB::table('thoigian')->where('IDMH', $IDMH)->get()->count();
         $json =array();
        if($total > 0){
            foreach($sql as $row){
                $start = $row->thoigianbatdau;
                $end = $row->thoigianketthuc;
                $id = $row->ID;
                array_push($json,array("start"=>$start,"end"=>$end,"ID"=>$id));
            }
        }
        echo json_encode($json);
    }
}
