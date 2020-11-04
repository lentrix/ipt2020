<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merchandise;

class MerchandisesController extends Controller
{
    public function index() {
        $merchandises = Merchandise::orderBy('product_name')->limit(15)->get();
        return view('merchandises.index', ['merchandises'=>$merchandises]);
    }
}
