<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DanhSachCauHoi extends Controller
{
    function danhsachcauhoi(Request $request) {

     $json=array();
     if($request->session()->has('quyen') && $request->session()->get('quyen')=="user") {
         $SoCau = 30;
         $ID_MH = 0;
         $ten = "";
         $ten = $request->post('tenmh'); 
         $sessionDataKey = 'danglambaithi_'.md5($ten);
         if( $request->session()->has($sessionDataKey) && 
         $sessionData = $request->session()->get($sessionDataKey) ){
            goto _inketqua;
         }

         $laysocau = DB::table('monhoc')->select('SoCauTrongDe')->where('TenMonHoc' ,$ten)->get();

         $result = DB::table('monhoc')->select('SoCauTrongDe')->where('TenMonHoc' ,$ten)->get()->count();
         if($result > 0){
            foreach($laysocau as $row){
                $SoCau = $row->SoCauTrongDe;
                } 
            }
               if($ten == "Tiếng Anh"){
                $IDMH = DB::table('monhoc')->select('ID')->where('TenMonHoc' ,$ten)->get();
                        foreach($IDMH as $row){
                            $ID_MH= $row->ID;
                            } 
                                $cautruc = DB::table('cautruc')->where('IDMH' , $ID_MH)->get();
                                $totalcautruc = DB::table('cautruc')->where('IDMH' , $ID_MH)->get()->count();
                                if($totalcautruc > 0){
                                foreach($cautruc as $row){
                                $sql = DB::table('cauhoi')->where('IDMH' ,$ID_MH)->where('dokho' ,$row->DoKho)->where('nhomch' ,$row->NhomCH) ->inRandomOrder() ->limit($row->Soluong)->get();
                                $total = DB::table('cauhoi')->where('IDMH' ,$ID_MH)->where('dokho' ,$row->DoKho)->where('nhomch' ,$row->NhomCH) ->inRandomOrder() ->limit($row->Soluong)->get()->count();
                                if($total > 0){
                                foreach($sql as $row){
                                $ID= $row->ID;
                                $NoiDung = $row->NoiDung;
                                $DoKho = $row->DoKho;
                                $IDMH = $row->IDMH;
                                $DapAn = array();
                                $sql2 = DB::table('DapAn')->where('IDCH' ,$ID)->get();
                                $total2 = DB::table('DapAn')->where('IDCH' ,$ID)->get()->count();
                                if($total2 > 0){
                                    foreach($sql2 as $row){
                                            $IDDA = $row->ID;
                                            $IDCH = $ID;
                                            $NoiDungDA = $row->NoiDung;
                                            array_push($DapAn,array("ID"=>$IDDA, "IDCH"=>$IDCH, "NoiDung"=>$NoiDungDA));
                                    }
                                }
                                shuffle($DapAn);
                                array_push($json,array("ID"=>$ID, "NoiDung"=>$NoiDung, "DoKho"=>$DoKho, "IDMH"=>$IDMH, "DapAn"=>$DapAn));
                             }
                              
                           }

                     }

                 }

            }
                 else{
                        $IDMH = DB::table('monhoc')->select('ID')->where('TenMonHoc' ,$ten)->get();
                        foreach($IDMH as $row){
                            $ID_MH= $row->ID;
                            } 
                                $cautruc = DB::table('cautruc')->where('IDMH' , $ID_MH)->get();
                                $totalcautruc = DB::table('cautruc')->where('IDMH' , $ID_MH)->get()->count();
                                if($totalcautruc > 0){
                                foreach($cautruc as $row){
                                $sql = DB::table('cauhoi')->where('IDMH' ,$ID_MH)->where('dokho' ,$row->DoKho)->where('nhomch' ,$row->NhomCH) ->inRandomOrder() ->limit($row->Soluong)->get();
                                $total = DB::table('cauhoi')->where('IDMH' ,$ID_MH)->where('dokho' ,$row->DoKho)->where('nhomch' ,$row->NhomCH) ->inRandomOrder() ->limit($row->Soluong)->get()->count();
                                if($total > 0){
                                foreach($sql as $row){
                                $ID= $row->ID;
                                $NoiDung = $row->NoiDung;
                                $DoKho = $row->DoKho;
                                $IDMH = $row->IDMH;
                                $DapAn = array();
                                $sql2 = DB::table('DapAn')->where('IDCH' ,$ID)->get();
                                $total2 = DB::table('DapAn')->where('IDCH' ,$ID)->get()->count();
                                if($total2 > 0){
                                    foreach($sql2 as $row){
                                            $IDDA = $row->ID;
                                            $IDCH = $ID;
                                            $NoiDungDA = $row->NoiDung;
                                            array_push($DapAn,array("ID"=>$IDDA, "IDCH"=>$IDCH, "NoiDung"=>$NoiDungDA));
                                    }
                                }
                                shuffle($DapAn);
                                array_push($json,array("ID"=>$ID, "NoiDung"=>$NoiDung, "DoKho"=>$DoKho, "IDMH"=>$IDMH, "DapAn"=>$DapAn));
                            }
                               shuffle($json);
                        }

                    }

                }    
              
            }
        
        }
     
                    $sessionData = json_encode(array_slice($json,0,$SoCau));
                    $request->session()->put('danglambaithi_'.md5($ten), $sessionData );

                    _inketqua:
                    echo $sessionData;
}
}
 





