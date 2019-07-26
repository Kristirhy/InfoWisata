<?php

namespace Modules\Category\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Category\Entities\CategoryModel;
class CategoryApiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $datacategory = DB::table('category')->get();
        return $datacategory;
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('category::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $datacategoryObject = new CategoryModel();
        $datacategoryObject->nama_kategori = $request->nama_kategori;
        $datacategoryObject->save();

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        
        $datacategoryObject = CategoryModel::find($id);
        return $datacategoryObject;
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('category::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $datacategoryObject = CategoryModel::find($id);
        $datacategoryObject->nama_kategori = $request->nama_kategori;
        $datacategoryObject->save();
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $datacategoryObject = CategoryModel::find($id);
        $datacategoryObject->delete();
    }
}
