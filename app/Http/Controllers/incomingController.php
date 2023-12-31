<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\incoming;
use Illuminate\Http\Request;
use App\Imports\incomingImport;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Session;

class incomingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Incoming::orderBy('id', 'desc')->get(); // Mengatur 10 item per halaman, sesuaikan sesuai kebutuhan.
        return view("incomings.index")->with('data', $data);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = product::all(); // Mengambil semua kategori
        return view('incomings.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('product_id', $request->product_id);
        Session::flash('quantity', $request->quantity);
        Session::flash('expire', $request->expire);
        Session::flash('description', $request->description);
    
        $request->validate([
            'product_id' => 'required',
            'quantity' => 'required|integer|min:1',
            'expire' => [
                'required',
                'date',
                function ($attribute, $value, $fail) {
                    // Memeriksa apakah tanggal kedaluwarsa lebih besar dari tanggal hari ini
                    if (strtotime($value) <= strtotime(now())) {
                        $fail('Tanggal kedaluwarsa harus lebih besar dari tanggal hari ini.');
                    }
                },
            ],
        ]);
    
        $data = [
            'description' => $request->description,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'expire' => $request->expire,
        ];
    
        Incoming::create($data);
        return redirect()->route('incomings.index')->with('success', 'Berhasil menambahkan data');
    }
    public function import(Request $request) {
        $file = $request->file('file')->store('public/import');
        $import = new incomingImport;
        $import->import($file);
        return redirect('/incomings')->with('success', ('Data Berhasil di Import'));
    }
}
