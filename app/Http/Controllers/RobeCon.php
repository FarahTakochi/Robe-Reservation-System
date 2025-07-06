<?php

namespace App\Http\Controllers;
use App\Models\Robesize;

use Illuminate\Http\Request;

class RobeCon extends Controller
{
    public function getList()
    {
      $data = Robesize::all();

      return view('reserverobe', ['reserved_robes'=>$data]);
    }
}
