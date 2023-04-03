<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TesModel;

class LabController extends Controller
{
    public function getData(){
      $data= TesModel::all();
      return response()->data($data);
    }
}
