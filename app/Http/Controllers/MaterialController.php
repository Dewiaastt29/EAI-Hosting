<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        $mate = Material::get();
        $response = [
            'message' => 'Show Data',
            'data' => $mate
        ];
        return response()->json($response , 201);
    }
    public function indexui()
    {
        $mate = Material::get();
        $response = [
            'message' => 'Show Data',
            'data' => $mate
        ];
        return view('material.get',compact('mate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('material.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mate = Material::create([
            'nama_vendor' => $request->nama_vendor,
            'nib' => $request->nib,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'jenis_material' => $request->jenis_material,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
        ]);
        $response = [
            'message' => 'Pendataan Material berhasil disimpan!',
            'data' => $mate
        ];
        return redirect()->route('material.index');
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
        $edit = Material::findorFail($id);
        return view('material.update',compact('edit'));
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
        $mt = Material::findorFail($id);
        $mt->update([
            'nama_vendor' => $request->nama_vendor,
            'nib' => $request->nib,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'jenis_material' => $request->jenis_material,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
        ]);
        $response = [
            'message' => 'Pendataan Maintenance berhasil diperbarui!',
            'data' => $mt
        ];
        return redirect()->route('material.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletemt = Material::findorFail($id);
        $deletemt->delete();

        return redirect()->route('material.index');
    }
}
