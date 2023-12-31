<?php

namespace App\Http\Controllers;

use App\Imports\supplierImport;
use App\Models\supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class supplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function index()
    {
        $data = supplier::orderBy('id', 'asc')->get(); // Mengatur 10 item per halaman, sesuaikan sesuai kebutuhan.
        return view("suppliers.index")->with('data', $data);
    }
    

    /**
     * Show the form for creating a new resource.
     */
     function create()
    {
        return view("suppliers.create");
    }

    /**
     * Store a newly created resource in storage.
     */
     function store(Request $request)
    {
        Session::flash('name',$request->name);
        Session::flash('description',$request->description);

        $request->validate([
            'name'=>'required|unique:suppliers,name'
        ]);
        $data = [
            'name'=>$request->name,
            'description'=>$request->description,
        ];
        supplier::create($data);
        return redirect()->to('suppliers')->with('success', 'Berhasil menambahkan data');
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
        $data = supplier::where('id',$id)->first();
        return view('suppliers.edit')->with('data',$data);
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
        supplier::where('id',$id)->update($data);
        return redirect()->to('suppliers')->with('success', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     */
     function destroy(string $id)
    {
        supplier::where('id', $id)->delete();
        return redirect()->to('suppliers')->with('success','Berhasil menghapus data');
    }

    public function import(Request $request) {
        $file = $request->file('file')->store('public/import');
        $import = new supplierImport;
        $import->import($file);

        return redirect('/suppliers')->with('success', ('Data Berhasil di Import'));
    }
}
