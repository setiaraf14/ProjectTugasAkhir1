<?php

namespace App\Http\Controllers;

use App\Karyawan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function dashboard(){
        return view('dashboard', [
            'total' => Karyawan::count()
        ]);  
    }
}
