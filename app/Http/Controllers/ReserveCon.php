<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;

class ReserveCon extends Controller
{

  public function check() {
      $email = Auth::user()->email;

      if (Reservation::where('email', $email)->exists()) {
        return view('disabledform');
      }
      else {
        return view('reservation');
      }

  }

  public function submit(Request $request)
  {

    $res = new Reservation();
    $res -> email = Auth::user()->email;
    $res -> matric_no = $request->matric_no;
    $res -> name = $request->name;
    $res -> programme = $request->programme;
    $res -> level = $request->level;
    $res -> size = $request->size;
    $res -> proof = $request->proof;
    $res -> status = $request->status;
    $res -> save();

    return $this->check();

  }

  public function showData()
  {
    $email = Auth::user()->email;
    $data = Reservation::where('email', $email)->get();

    return view('showdata', ['reservation'=>$data]);
  }

  public function edit($id)
  {
    $rd = Reservation::find($id);

    return view('edit', compact('rd'));
  }

  public function update(Request $request, $id)
  {
    $rd = Reservation::find($id);
    $rd -> size = $request -> size;
    $rd -> update();

    return redirect('/dashboard/reservation/details');
  }
}