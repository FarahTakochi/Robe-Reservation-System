<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;

class HomeCon extends Controller
{
    public function index() {

        $role=Auth::user()->role;
        $data = Reservation::all();
        
        if ($role=='1') {
            return view('admin.dashboard', ['reservation'=>$data]);
        }
        else {
            return view('dashboard');
        }

    }
}
