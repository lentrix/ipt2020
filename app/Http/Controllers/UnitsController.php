<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;

class UnitsController extends Controller
{
    public function index() {

        $units = Unit::get();
        return view('units.index', ['units'=>$units]);
    }
}
