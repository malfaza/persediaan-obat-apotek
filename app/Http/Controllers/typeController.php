<?php

namespace App\Http\Controllers;

use App\Imports\typeImport;
use App\Models\type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class typeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function index()
    {
        $data = type::orderBy('id', 'asc')->get(); // Mengatur 10 item per halaman, sesuaikan sesuai kebutuhan.
        return view("types.index")->with('data', $data);
    }
    

    /**
     * Show the form for creating a new resource.
     */
     function create()
    {
        return view("types.create");
    }

    /**
     * Store a newly created resource in storage.
     */
     function store(Request $request)
    {
        Session::flash('name',$request->name);
        Session::flash('description',$request->description);

        $request->validate([
            'name'=>'required|unique:types,name'
        ]);
        $data = [
            'name'=>$request->name,
            'description'=>$request->description,
        ];
        type::create($data);
        return redirect()->to('types')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
     function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
     function edit(string $id)
    {
        $data = type::where('id',$id)->first();
        return view('types.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
     function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required'
        ]);
        $data = [
            'name'=>$request->name,
            'description'=>$request->description,
        ];
        type::where('id',$id)->update($data);
        return redirect()->to('types')->with('success', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     */
     function destroy(string $id)
    {
        type::where('id', $id)->delete();
        return redirect()->to('types')->with('success','Berhasil menghapus data');
    }

    public function import(Request $request) {
        $file = $request->file('file')->store('public/import');
        $import = new typeImport;
        $import->import($file);

        return redirect('/types')->with('success', ('Data Berhasil di Import'));
    }
}
