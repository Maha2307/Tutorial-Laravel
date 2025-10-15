<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taak;

class TodoController extends Controller
{
    public function index()
    {
        $taken = Taak::all();
        return view('taken.index', ['taken' => $taken]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'taak' => 'required|string|max:255',
        ]);

        Taak::create([
            'naam' => $request->taak,
        ]);

        return redirect('/taken');
    }

    public function destroy($id)
    {
        $taak = Taak::findOrFail($id);
        $taak->delete();

        return redirect('/taken');
    }

    
    public function edit($id)
    {
        $taak = Taak::findOrFail($id);
        return view('taken.edit', ['taak' => $taak]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'taak' => 'required|string|max:255',
        ]);

        $taak = Taak::findOrFail($id);
        $taak->naam = $request->taak;
        $taak->save();

        return redirect('/taken');
    }
}
