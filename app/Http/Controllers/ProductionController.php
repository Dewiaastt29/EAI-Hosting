<?php

namespace App\Http\Controllers;

use App\Models\Production;
use Illuminate\Http\Request;

class ProductionController extends Controller
{
      
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod = Production::get();
        $response = [
            'message' => 'Show Data',
            'data' => $prod
        ];
        return response()->json($response , 201);
    }
    public function indexui()
    {
        $prod = Production::get();
        $response = [
            'message' => 'Show Data',
            'data' => $prod
        ];
        return view('production.get',compact('prod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('production.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prod = Production::create([
            'hasil_produk' => $request->hasil_produk,
            'materials' => $request->materials,
            'jumlah_produksi' => $request->jumlah_produksi,
            'lama_produksi' => $request->lama_produksi,
            'tanggal_produksi' => $request->tanggal_produksi,
            'engineer' => $request->engineer,
        ]);
        $response = [
            'message' => 'Pendataan Production berhasil disimpan!',
            'data' => $prod
        ];
        return redirect()->route('prod.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Production::findorFail($id);
        return view('production.update',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prod = Production::findorFail($id);
        $prod->update([
            'hasil_produk' => $request->hasil_produk,
            'materials' => $request->materials,
            'jumlah_produksi' => $request->jumlah_produksi,
            'lama_produksi' => $request->lama_produksi,
            'tanggal_produksi' => $request->tanggal_produksi,
            'engineer' => $request->engineer,
        ]);
        $response = [
            'message' => 'Production berhasil diperbarui!',
            'data' => $prod
        ];
        return redirect()->route('prod.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteprod = Production::findorFail($id);
        $deleteprod->delete();

        return redirect()->route('prod.index');
    }
}
