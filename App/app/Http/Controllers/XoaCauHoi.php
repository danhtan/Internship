<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class XoaCauHoi extends Controller
{
  function xoacauhoi(Request $request){

    $id = $request->get('ID');
    DB::table('dapan')->where('IDCH', $id)->delete();
    DB::table('cauhoi')->where('ID', $id)->delete();
    echo "Xóa thành công";
  }   


}
