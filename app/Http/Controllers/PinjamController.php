<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pinjam;
use App\Category;
use Illuminate\Http\Request;


class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $pinjam = Pinjam::where('name', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('nik', 'LIKE', "%$keyword%")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->orWhere('categories_id', 'LIKE', "%$keyword%")
                ->orWhere('book_name', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $pinjam = Pinjam::paginate($perPage);
        }

        return view('admin.pinjam.index', compact('pinjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Category::pluck('name','id');
        return view('admin.pinjam.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = [
            'name' => 'required',
            'email' => 'required',
            'nik' => 'required',
            'address' => 'required',
            'categories_id' => 'required',
            'book_name' => 'required',
        ];

        $request->validate($validation);
        
        $requestData = $request->all();
        Pinjam::create($requestData);

        //return back()->withSuccess(trans('app.success_store'));
        return redirect()->route(ADMIN.'.pinjam.index')->withSuccess(trans('app.success_store'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function show(Pinjam $pinjam)
    {
        $pinjam = Pinjam::findOrFail($id);

        return view('admin.pinjam.show', compact('pinjam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pinjam = Pinjam::findOrFail($id);
        $kategori = Category::pluck('name','id');

        return view('admin.pinjam.edit', compact('pinjam','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = [
            'name' => 'required',
            'email' => 'required',
            'nik' => 'required',
            'address' => 'required',
            'categories_id' => 'required',
            'book_name' => 'required',
        ];
        
        $requestData = $request->all();
        
        $pinjam = Pinjam::findOrFail($id);
        $pinjam->update($requestData);

        return redirect()->route(ADMIN.'.pinjam.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pinjam::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}
