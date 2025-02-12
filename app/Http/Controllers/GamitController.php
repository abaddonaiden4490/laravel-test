<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamitController extends Controller {
    public function index() {
        return view('users.index');
    }
}
