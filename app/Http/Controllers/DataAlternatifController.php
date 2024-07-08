<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class DataAlternatifController extends Controller
{
    public function index()
    {
        $alternatifs = Alternatif::all();
        return view('alternatif.index', compact('alternatifs'));
    }

    public function create()
    {
        return view('alternatif.create');
    }

    public function store(Request $request)
    {
        $alternatif = new Alternatif();
        $alternatif->jenis_karir = $request->jenis_karir;
        $alternatif->c1 = $request->c1;
        $alternatif->c2 = $request->c2;
        $alternatif->c3 = $request->c3;
        $alternatif->c4 = $request->c4;
        $alternatif->c5 = $request->c5;
        $alternatif->save();

        return redirect()->route('alternatif.index');
    }

    public function edit($id)
    {
        $alternatif = Alternatif::findOrFail($id);
        return view('alternatif.edit', compact('alternatif'));
    }

    public function update(Request $request, $id)
    {
        $alternatif = Alternatif::findOrFail($id);
        $alternatif->jenis_karir = $request->jenis_karir;
        $alternatif->c1 = $request->c1;
        $alternatif->c2 = $request->c2;
        $alternatif->c3 = $request->c3;
        $alternatif->c4 = $request->c4;
        $alternatif->c5 = $request->c5;
        $alternatif->save();

        return redirect()->route('alternatif.index');
    }

    public function destroy($id)
    {
        $alternatif = Alternatif::findOrFail($id);
        $alternatif->delete();

        return redirect()->route('alternatif.index');
    }
}

