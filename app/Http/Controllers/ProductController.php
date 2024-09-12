<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listofproducts () {
        $data = DB::table('products')->get();
        return view('products.list',['products'=>$data]);
    }

    public function listbyCode (Request $req) {
        $data = DB::table('products')->where('productCode', $req->pcode)->get();
        return view('products.details',['product'=>$data]);
    }
}
