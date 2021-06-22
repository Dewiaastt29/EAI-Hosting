<?php

namespace App\Http\Controllers;

use App\Models\Logistic;
use Illuminate\Http\Request;

class LogisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logistic = Logistic::get();
        $response = [
            'message' => 'Show Data',
            'data' => $logistic
        ];
        return response()->json($response , 201);
    }
    public function indexui()
    {
        $logistic = Logistic::get();
        $response = [
            'message' => 'Show Data',
            'data' => $logistic
        ];
        return view('logistic.get',compact('logistic'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logistic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $logistic = Logistic::create([
                'produk_id' => $request->produk_id,
                'tanggal_keluar' => $request->tanggal_keluar,
                'tanggal_masuk' => $request->tanggal_masuk,
                'alamat' => $request->alamat,
            ]);
            $response = [
                'message' => 'Pendataan Logistic berhasil disimpan!',
                'data' => $logistic
            ];
            return redirect()->route('logistic.index');
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
        $edit = Logistic::findorFail($id);
        return view('logistic.update',compact('edit'));
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
        $logistic = Logistic::findorFail($id);
        $logistic->update([
            'produk_id' => $request->produk_id,
            'tanggal_keluar' => $request->tanggal_keluar,
            'tanggal_masuk' => $request->tanggal_masuk,
            'alamat' => $request->alamat,
        ]);
        $response = [
            'message' => 'Pendataan Logistic berhasil diperbarui!',
            'data' => $logistic
        ];
        return redirect()->route('logistic.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dellogistic =Logistic::findorFail($id);
        $dellogistic->delete();
            $response = [
                'message' => 'Data Berhasil di Hapus!'
            ];
            return redirect()->route('logistic.index');
    }
}
