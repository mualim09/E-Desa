<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KinerjaController extends Controller
{
    public function index(){
      session()->put('aktif','kinerja');

      return view('kinerja.index');
    }
}