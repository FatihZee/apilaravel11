<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function index()
    {
        return Pembeli::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:pembelis',
            'password' => 'required',
            'telepon' => 'required',
        ]);

        $pembeli = Pembeli::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'telepon' => $request->telepon,
        ]);

        return response()->json($pembeli, 201);
    }

    public function show($id)
    {
        return Pembeli::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $pembeli = Pembeli::findOrFail($id);
        $pembeli->update($request->all());

        return response()->json($pembeli, 200);
    }

    public function destroy($id)
    {
        Pembeli::destroy($id);
        return response()->json(null, 204);
    }
}