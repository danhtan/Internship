<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LaySoCauHoi extends Controller
{
    function laysocauhoi(Request $request){
        $IDMH = $request->get('IDMH');
        $sql = DB::table('monhoc')->select('SoCauTrongDe')->where('ID' , $IDMH)->get();
        $total = DB::table('monhoc')->select('SoCauTrongDe')->where('ID' , $IDMH)->get()->count();
        if($total > 0){
            foreach($sql as $row){
                echo $row->SoCauTrongDe;
            }
        }else{
            echo 10;
        }
       
    }
}
