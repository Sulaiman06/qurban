<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sacrificer;

class SacrificersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sacs = Sacrificer::all();
        return view('qurban.sacrificer.index', compact('sacs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('qurban.sacrificer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sac = Sacrificer::create([
            'nama' => $request->name,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak
        ]);
        return redirect()->route('sacrificers.index');
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
        $sac = Sacrificer::find($id);
        return view('qurban.sacrificer.edit', compact('sac'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sac = Sacrificer::where('id', $id)->update([
            'nama' => $request->name,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak
        ]);
        
        return redirect()->route('sacrificers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sac = Sacrificer::find($id);
        $sac->delete();

        return redirect()->route('sacrificers.index');
    }
}
