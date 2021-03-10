<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Test_controller extends Controller
{
    function t1(){
        $sum = DB::table('cautruc')->sum('Soluong')->where('IDMH','2');
        var_dump($sum);die;
    }
}
