<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllergeenController extends Controller
{
    public function index()
    {
        $data = DB::select('CALL spGetAllAllergenen()');
        return view('allergeen.index', compact('data'));
    }
}