<?php

namespace TronderData\Ocab\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class OcabController extends Controller
{
    // ---------------------------------------------------------------------------------------------------------------------------------------------------
    // FUNCTION INDEX
    // Shows the default page of the ocab module
    //
    // ---------------------------------------------------------------------------------------------------------------------------------------------------
    public function index(Request $request)
    {

        return view('ocab::index');
    }
}
