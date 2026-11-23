<?php

namespace App\Http\Controllers;

class PartieController extends Controller
{
    public function index()
    {
        $cases = array_fill(0, 9, '');

        return view('parties.show', compact('cases'));
    }
}