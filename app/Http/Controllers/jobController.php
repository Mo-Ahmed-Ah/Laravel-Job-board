<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jop;

class jobController extends Controller
{
    public function index()
    {
        $jops = Jop::all();
        return view('job/index', ['jops' => $jops]);
    }
}
