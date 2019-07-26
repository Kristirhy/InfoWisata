<?php

namespace Modules\Wisata\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Wisata\Entities\WisataModel;
class WisataApiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $datawisata = DB::table('wisata')->join('category', 'category.id_category', '=', 'wisata.id_kategori')
        ->select('wisata.*', 'category.nama_kategori')
        ->get();
        return $datawisata;
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('wisata::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        $foto = $request->file('foto');
        $wisataObject = new WisataModel();
        $wisataObject->nama_wisata = $request->nama_wisata;
        $wisataObject->deskripsi = $request->deskripsi;
        $wisataObject->id_kategori = $request->kategori_wisata;
        $wisataObject->alamat = $request->alamat;
        $wisataObject->foto = "fotowisata/".$foto->getClientOriginalName();
        $path = $request->foto->storeAs('fotowisata', $foto->getClientOriginalName());
        $wisataObject->save();
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $datawisata = WisataModel::find($id);
        return $datawisata;
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $wisataObject = WisataModel::find($id);
            $wisataObject->nama_wisata = $request->nama_wisata;
            $wisataObject->deskripsi = $request->deskripsi;
            $wisataObject->id_kategori = $request->kategori_wisata;
            $wisataObject->alamat = $request->alamat;
            $wisataObject->foto = "fotowisata/".$foto->getClientOriginalName();
            $path = $request->foto->storeAs('fotowisata', $foto->getClientOriginalName());
            $wisataObject->save();
        }else{
            $wisataObject = WisataModel::find($id);
            $wisataObject->nama_wisata = $request->nama_wisata;
            $wisataObject->deskripsi = $request->deskripsi;
            $wisataObject->id_kategori = $request->kategori_wisata;
            $wisataObject->alamat = $request->alamat;
            $wisataObject->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $wisataObject = WisataModel::find($id);
        $wisataObject->delete();
    }
}
