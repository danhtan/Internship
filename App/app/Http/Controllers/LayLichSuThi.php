<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LayLichSuThi extends Controller
{
    function laylichsuthi(Request $request){
        $IDMH = $request->post('ID');
        $idtk = $request->session()->get('ID');
        $data = DB::table('quatrinhthi')->select('IDCH','IDDA')->where('IDMH' ,$IDMH)->where('IDTK',$idtk)->get();
        $total = DB::table('quatrinhthi')->select('IDCH','IDDA')->where('IDMH' ,$IDMH)->where('IDTK',$idtk)->get()->count();
        $json =array();
        if($total > 0){
            foreach($data as $row){
                $cauhoi =     DB::table('cauhoi')->select('NoiDung')->where('ID' ,$row->IDCH)->get();
                $dapandung =  DB::table('dapan')->select('NoiDung')->where('IDCH' ,$row->IDCH)->where('DapAn',1)->get();
                $dapanchon =  DB::table('dapan')->select('NoiDung')->where('ID' ,$row->IDDA)->get();
                array_push($json,array("CauHoi"=>$cauhoi,"Dung"=>$dapandung,"Chon"=>$dapanchon));
            }
        }
            echo json_encode($json);
        
    }
}


