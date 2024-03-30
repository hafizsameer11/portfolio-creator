<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempimageController extends Controller
{
    public function create(Request $request) {
        dd($request->all());
    }
}
