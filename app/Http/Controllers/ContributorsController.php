<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contributor;

class ContributorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $conts = Contributor::all();
        return view('qurban.contributor.index', compact('conts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('qurban.contributor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Contributor::create([
            'nama' => $request->name,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak
        ]);
        return redirect()->route('contributors.index');
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
        $cont = Contributor::find($id);
        return view('qurban.contributor.edit', compact('cont'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Contributor::where('id', $id)->update([
            'nama' => $request->name,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak
        ]);
        
        return redirect()->route('contributors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contributor::find($id)->delete();
        return redirect()->route('contributors.index');
    }
}
