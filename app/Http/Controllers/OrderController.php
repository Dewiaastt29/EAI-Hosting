<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
   
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::get();
        $response = [
            'message' => 'Show Data',
            'data' => $order
        ];
        return response()->json($response , 201);
    }
    public function indexui()
    {
        $order = Order::get();
        $response = [
            'message' => 'Show Data',
            'data' => $order
        ];
        return view('order.get',compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ord = Order::create([
            'jenis_order' => $request->jenis_order,
            'jumlah_produk' => $request->jumlah_produk,
            'nama_produk' => $request->nama_produk,
            'materials' => $request->materials,
            'total_harga' => $request->total_harga,
        ]);
        $response = [
            'message' => 'Pendataan Order berhasil disimpan!',
            'data' => $ord
        ];
        return redirect()->route('order.index');
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
        $edit = Order::findorFail($id);
        return view('order.update',compact('edit'));
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
        $ord = Order::findorFail($id);
        $ord->update([
            'jenis_order' => $request->jenis_order,
            'jumlah_produk' => $request->jumlah_produk,
            'nama_produk' => $request->nama_produk,
            'materials' => $request->materials,
            'total_harga' => $request->total_harga,
        ]);
        $response = [
            'message' => 'Pendataan Order berhasil diperbarui!',
            'data' => $ord
        ];
        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteord = Order::findorFail($id);
        $deleteord->delete();

        return redirect()->route('order.index');
    }
}
