<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anis = Animal::all();
        return view('qurban.animal.index', compact('anis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('qurban.animal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Animal::create([
            'jenis_hewan' => $request->name,
            'bobot' => $request->alamat,
            'usia_hewan' => $request->kontak
        ]);
        return redirect()->route('animals.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ani = Animal::find($id);
        return view('qurban.animal.edit', compact('ani'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Animal::where('id', $id)->update([
            'jenis_hewan' => $request->name,
            'bobot' => $request->alamat,
            'usia_hewan' => $request->kontak
        ]);
        
        return redirect()->route('animals.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Animal::find($id)->delete();
        return redirect()->route('animals.index');
    }
}
