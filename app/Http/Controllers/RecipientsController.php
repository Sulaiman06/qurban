<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipient;

class RecipientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recs = Recipient::all();
        return view('qurban.recipient.index', compact('recs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('qurban.recipient.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Recipient::create([
            'nama' => $request->name,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak
        ]);
        return redirect()->route('recipients.index');
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
        $rec = Recipient::find($id);
        return view('qurban.recipient.edit', compact('rec'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Recipient::where('id', $id)->update([
            'nama' => $request->name,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak
        ]);
        
        return redirect()->route('recipients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Recipient::find($id)->delete();
        return redirect()->route('recipients.index');
    }
}
