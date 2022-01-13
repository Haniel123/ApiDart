<?php

namespace App\Http\Controllers;

use App\Models\DiaDanh;
use App\Models\HinhAnhDiaDanh;
use App\Http\Requests\StoreDiaDanhRequest;
use App\Http\Requests\UpdateDiaDanhRequest;
use Illuminate\Http\Request;

class DiaDanhController extends Controller
{
  public function LayDiaDanh()
  {
      $dd=DiaDanh::all();
      return response()->json($dd, 200);
  }

  public function TimKiem (Request $req)
  {

     $dd= DiaDanh::where('TenDiaDanh',"like",'%'.$req->name.'%')->first()->HinhAnhDiaDanh;
    dd($dd);
    //  dd($dd->HinhAnhDiaDanh);
    //return response()->json($dd, 200);
  }
  public function LayHinhAnhTheoDiaDanh(Request $req)
  {
    $dd=DiaDanh::find($req->id)->layHinhAnhTheoDiaDanh;
    if(!empty($dd))
      return response()->json($dd, 200);
      return response()->json($dd, 404);
  }
  
}
