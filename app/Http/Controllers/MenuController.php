<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return Menu::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
        ]);

        $menu = Menu::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);

        return response()->json($menu, 201);
    }

    public function show($id)
    {
        return Menu::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->update($request->all());

        return response()->json($menu, 200);
    }

    public function destroy($id)
    {
        Menu::destroy($id);
        return response()->json(null, 204);
    }
}