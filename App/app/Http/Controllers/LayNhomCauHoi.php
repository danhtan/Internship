<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LayNhomCauHoi extends Controller
{
    function laynhomcauhoi(Request $request){
     $ID = $request->get('ID');
     $json=array();
     if($request->session()->has('quyen') && $request->session()->get('quyen')=="admin" ) {
         $data = DB::table('cautruc')->select('NhomCH')->distinct()->where('IDMH' , $ID)->get();
         $total = DB::table('cautruc')->select('NhomCH')->distinct()->where('IDMH' , $ID)->get()->count();
         if($total > 0){
         foreach($data as $row){
             $NhomCH = $row->NhomCH;
             array_push($json,array("Nhom" => $NhomCH));
             }    
            }
        }
    
        echo json_encode($json);
                  
    }
}
