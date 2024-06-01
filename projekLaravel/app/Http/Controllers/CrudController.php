<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crud = Crud::all();
        return view('crud.tampilan', ['crud' => $crud]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.tambahan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'umur' => 'required',
            'bio' => 'required',
            ],
            [
                'nama.required' => 'Nama harus diisi tidak boleh kosong',
                'umur.required' => 'Umur harus diisi tidak boleh kosong',
                'bio.required' => 'Bio harus diisi tidak boleh kosong',
            ]);
    
            $crud = new Crud;
            $crud->nama = $request->input('nama');
            $crud->umur = $request->input('umur');
            $crud->bio = $request->input('bio');
            $crud->save();
            return redirect('/crud');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $crud = Crud::find($id);
        return view ('crud.detail', ['crud' => $crud]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $crud = Crud::find($id);
        return view ('crud.edit', ['crud' => $crud]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'umur' => 'required',
            'bio' => 'required',
            ],
            [
                'nama.required' => 'Nama harus diisi tidak boleh kosong',
                'umur.required' => 'Umur harus diisi tidak boleh kosong',
                'bio.required' => 'Bio harus diisi tidak boleh kosong',
            ]);

        Crud::where('id', $id)
            ->update(
                [
                    'nama' => $request->input('nama'),
                    'umur' => $request->input('umur'),
                    'bio' => $request->input('bio'),
                ]
                );
                return redirect('/crud');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Crud::where('id', $id)->delete();
        return redirect('/crud');
    }
}
