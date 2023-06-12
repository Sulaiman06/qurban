<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Congregant;

class CongregantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $congs = Congregant::all();
        return view('qurban.congregant.index', compact('congs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('qurban.congregant.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Congregant::create([
            'nama' => $request->name,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak
        ]);
        return redirect()->route('congregants.index');
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
        $cong = Congregant::find($id);
        return view('qurban.congregant.edit', compact('cong'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Congregant::where('id', $id)->update([
            'nama' => $request->name,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak
        ]);
        
        return redirect()->route('congregants.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Congregant::find($id)->delete();
        return redirect()->route('congregants.index');
    }
}
