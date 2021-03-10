<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SuaMonHoc extends Controller
{
    function suamonhoc(Request $request){   
         $id =  $request->get('ID');       
         $tenmon =  $request->get('tenMonHoc');
         DB::table('monhoc')
         ->where('ID', $id)
         ->update(['TenMonHoc' => $tenmon]);
         echo "Sửa thành công";
    }
}
