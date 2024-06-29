<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    function index(){
    
    $nama="Jangan menyerah";
    $pelajaran = ["Algoritma & Pemograman","Kalkulus","Pemograman Web"];
    return view ('biodata',['nama'=>$nama,'matkul' => $pelajaran]);
    }
}
