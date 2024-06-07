<?php

namespace App\Http\Controllers;

use App\Models\item;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class itemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = item::all();
        return view('item.item', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('item.item-entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        item::create([
            'nama_item' => $request->nama,
            'harga_item' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect('/item');
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
    public function edit(string $id_item)
    {
        $item = item::find($id_item);
        return view('item.item-edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_item)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        $item = item::find($id_item);
        $item->update([
            'nama_item' => $request->nama,
            'harga_item' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect('/item');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id_item)
    {
        $item = item::find($id_item);
        return view('item.item-delete', compact('item'));
    }

    public function destroy(string $id_item)
    {
        $item = item::find($id_item);
        $item->delete();
        return redirect('/item');
    }
    public function cetak()
    {
        $item = item::all();
        $pdf = Pdf::loadview('item.item-cetak', compact('item'));
        return $pdf->download('laporan-item.pdf');
    }
}
