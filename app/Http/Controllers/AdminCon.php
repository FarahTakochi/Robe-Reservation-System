<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Reservation;

class AdminCon extends Controller
    {
        public function showAllData()
        {
            $data = Reservation::all();

            return view('admin.dashboard', ['reservation'=>$data]);
        }

        public function editStatus($id)
        {
            $rd = Reservation::find($id);

            return view('/admin/update', compact('rd'));
        }

        public function update(Request $request, $id)
        {
            $rd = Reservation::find($id);
            $rd -> status = $request->status;
            $rd -> update();

            return redirect('/admin/dashboard');
        }

        public function delete($id)
        {
            Reservation::find($id)->forceDelete();

            return redirect('/admin/dashboard');
        }

    }
