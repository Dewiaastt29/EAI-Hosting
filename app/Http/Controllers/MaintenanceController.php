<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mt = Maintenance::get();
        $response = [
            'message' => 'Show Data',
            'data' => $mt
        ];
        return response()->json($response , 201);
    }
    public function indexui()
    {
        $mt = Maintenance::get();
        $response = [
            'message' => 'Show Data',
            'data' => $mt
        ];
        return view('maintenance.get',compact('mt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maintenance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mt = Maintenance::create([
            'dieshop_tm' => $request->dieshop_tm,
            'tgl_maintenance' => $request->tgl_maintenance,
            'keadaan_dieshop' => $request->keadaan_dieshop,
            'keperluan' => $request->keperluan,
            'jumlah_anggaran' => $request->jumlah_anggaran,
            'hasil_pemeliharaan' => $request->hasil_pemeliharaan,
        ]);
        $response = [
            'message' => 'Pendataan Maintenance berhasil disimpan!',
            'data' => $mt
        ];
        return redirect()->route('mt.index');
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
        $edit = Maintenance::findorFail($id);
        return view('maintenance.update',compact('edit'));
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
        $mt = Maintenance::findorFail($id);
        $mt->update([
            'dieshop_tm' => $request->dieshop_tm,
            'tgl_maintenance' => $request->tgl_maintenance,
            'keadaan_dieshop' => $request->keadaan_dieshop,
            'keperluan' => $request->keperluan,
            'jumlah_anggaran' => $request->jumlah_anggaran,
            'hasil_pemeliharaan' => $request->hasil_pemeliharaan,
        ]);
        $response = [
            'message' => 'Pendataan Maintenance berhasil diperbarui!',
            'data' => $mt
        ];
        return redirect()->route('mt.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletemt = Maintenance::findorFail($id);
        $deletemt->delete();

        return redirect()->route('mt.index');
    }
}
