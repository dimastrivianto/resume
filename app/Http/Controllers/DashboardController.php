<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard($option){
      if($option == 1){
        return view();
      }elseif($option == 2){
        
      }
    }
}
