<?php

namespace App\Http\Controllers;

use App\Imports\outgoingImport;
use App\Models\outgoing;
use App\Models\product;
use App\Models\incoming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class outgoingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = outgoing::orderBy('id', 'desc')->get(); // Mengatur 10 item per halaman, sesuaikan sesuai kebutuhan.
        return view("outgoings.index")->with('data', $data);
    }
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = product::all(); // Mengambil semua kategori
        return view('outgoings.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('product_id', $request->product_id);
        Session::flash('quantity', $request->quantity);
        Session::flash('description', $request->description);
    
        $request->validate([
            'product_id' => 'required',
            'quantity' => [
                'required',
                'integer',
                'min:1',
                function ($attribute, $value, $fail) use ($request) {
                    // Mengambil produk yang sesuai dengan product_id
                    $product = Product::find($request->product_id);
    
                    if (!$product) {
                        $fail('Produk tidak ditemukan.');
                    } elseif ($value > $product->total_stock) {
                        $fail('Jumlah outgoing tidak boleh melebihi stok yang tersedia.');
                    }
                },
            ],
        ]);
    
        $data = [
            'description' => $request->description,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
        ];
    
        Outgoing::create($data);
        return redirect()->route('outgoings.index')->with('success', 'Berhasil menambahkan data');
    }    
    public function import(Request $request) {
        $file = $request->file('file')->store('public/import');
        $import = new outgoingImport;
        $import->import($file);
        return redirect('/outgoings')->with('success', ('Data Berhasil di Import'));
    }
}
