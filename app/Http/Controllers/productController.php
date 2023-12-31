<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\category;
use App\Models\type;
use App\Models\supplier;
use Illuminate\Http\Request;
use App\Imports\productImport;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = 5;
    
        $products = Product::with(['incoming', 'outgoing'])->get();
    
        $data = Product::with('category')
            ->orderBy('id', 'asc')
            ->orderBy('name', 'asc')
            ->orderBy('description', 'asc')
            ->paginate($rows);
    
        return view("products.index", compact('data', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::all(); // Mengambil semua kategori
        $types = type::all(); // Mengambil semua kategori
        $suppliers = supplier::all(); // Mengambil semua kategori
        return view('products.create', compact('categories', 'types', 'suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('name',$request->name);
        Session::flash('category_id',$request->category_id);
        Session::flash('type_id',$request->type_id);
        Session::flash('supplier_id',$request->supplier_id);
        Session::flash('description',$request->description);

        $request->validate([
            'name' => 'required|unique:products,name',
            'description' => 'required',
            'category_id' => 'required', // Pastikan Anda memeriksa bahwa category_id sudah diisi
            'type_id' => 'required', // Pastikan Anda memeriksa bahwa category_id sudah diisi
            'supplier_id' => 'required', // Pastikan Anda memeriksa bahwa category_id sudah diisi
        ]);
    
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id, // Sertakan category_id
            'type_id' => $request->type_id, // Sertakan category_id
            'supplier_id' => $request->supplier_id // Sertakan category_id
        ];
        product::create($data);
        return redirect()->to('products')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Product::find($id);
        $categories = Category::all(); // Mengambil semua kategori
        $types = Type::all(); // Mengambil semua kategori
        $suppliers = Supplier::all(); // Mengambil semua kategori
        return view('products.edit', compact('data', 'categories', 'types', 'suppliers'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|unique:products,name,' . $id,
            'description' => 'required',
            'category_id' => 'required',
            'type_id' => 'required',
            'supplier_id' => 'required'
        ]);
    
        try {
            $product = Product::findOrFail($id); // Mencari produk berdasarkan ID
        } catch (ModelNotFoundException $e) {
            return redirect()->route('products.index')->with('error', 'Produk tidak ditemukan.');
        }
    
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'type_id' => $request->type_id,
            'supplier_id' => $request->supplier_id
        ];
    
        $product->update($data); // Menggunakan metode update pada instance produk
    
        return redirect()->route('products.index')->with('success', 'Berhasil mengubah data');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        product::where('id', $id)->delete();
        return redirect()->to('products')->with('success','Berhasil menghapus data');
    }

    public function import(Request $request) {
        $file = $request->file('file')->store('public/import');
        $import = new productImport;
        $import->import($file);

        return redirect('/products')->with('success', ('Data Berhasil di Import'));
    }
}
