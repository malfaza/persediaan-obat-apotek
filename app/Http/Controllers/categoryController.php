<?php

namespace App\Http\Controllers;

use App\Imports\categoryImport;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function index()
    {
        $data = Category::orderBy('id', 'asc')->get(); // Mengatur 10 item per halaman, sesuaikan sesuai kebutuhan.
        return view("categories.index")->with('data', $data);
    }
    

    /**
     * Show the form for creating a new resource.
     */
     function create()
    {
        return view("categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
     function store(Request $request)
    {
        Session::flash('name',$request->name);
        Session::flash('description',$request->description);

        $request->validate([
            'name'=>'required|unique:categories,name'
        ]);
        $data = [
            'name'=>$request->name,
            'description'=>$request->description,
        ];
        category::create($data);
        return redirect()->to('categories')->with('success', 'Berhasil menambahkan data');
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
        $data = category::where('id',$id)->first();
        return view('categories.edit')->with('data',$data);
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
        category::where('id',$id)->update($data);
        return redirect()->to('categories')->with('success', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     */
     function destroy(string $id)
    {
        category::where('id', $id)->delete();
        return redirect()->to('categories')->with('success','Berhasil menghapus data');
    }

    public function import(Request $request) {
        $file = $request->file('file')->store('public/import');
        $import = new categoryImport;
        $import->import($file);

        return redirect('/categories')->with('success', ('Data Berhasil di Import'));
    }
}
