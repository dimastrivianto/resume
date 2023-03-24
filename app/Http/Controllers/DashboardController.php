<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
      // if($option == 1){
      //   return view('pages.home');
      // }elseif($option == 2){
      //
      // }
      return view('pages.home');
    }
}
