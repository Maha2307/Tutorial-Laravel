<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $taken = $request->session()->get('taken', []);

        return view('taken.index', ['taken' => $taken]);
    }

    public function store(Request $request)
    {
        $nieuweTaak = $request->input('taak');

        $taken = $request->session()->get('taken', []);

        $taken[] = $nieuweTaak;

        $request->session()->put('taken', $taken);

      return redirect('/taken');
    }
}
