<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ThemMonHoc extends Controller
{
        function themmonhoc(Request $request){
            if($request->session()->has('quyen') && $request->session()->get('quyen')=="admin" ){


                $name = $request->get('name');

                $sql = DB::table('monhoc')->where('TenMonHoc' , $name)->get();
                $total = DB::table('monhoc')->where('TenMonHoc' , $name)->get()->count();
                if($total > 0){
                    echo "Trùng tên môn học";
                }
                else{
                    DB::table('monhoc')->insert(
                        ['ID' => null,'TenMonHoc' => $name,'SoCauTrongDe'=> 30]
                    );
                    echo "Thêm thành công môn $name";

                }
            }
            else{
                 
                echo "Bạn không có quyền thêm môn học";

            }

        }

}
