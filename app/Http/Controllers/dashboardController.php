<?php

namespace App\Http\Controllers;

use App\Models\Incoming;
use App\Models\Outgoing;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display the dashboard.
     */
    public function index()
    {
        // Chart data
        $incomingChartData = Incoming::select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as count'))
            ->groupBy('date')
            ->get();

        $outgoingChartData = Outgoing::select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as count'))
            ->groupBy('date')
            ->get();

        // Card data
        $totalProducts = Product::count();
        $totalCategories = Category::count();

        // Calculate total stock
        $totalStock = DB::table('products')
            ->join('incomings', 'products.id', '=', 'incomings.product_id')
            ->leftJoin('outgoings', 'products.id', '=', 'outgoings.product_id')
            ->selectRaw('SUM(incomings.quantity) - COALESCE(SUM(outgoings.quantity), 0) as total_stock')
            ->value('total_stock');

        
        // Products with zero stock
        $productsWithZeroStock = Product::whereNotExists(function ($query) {
            $query->select(DB::raw(1))
                ->from('incomings')
                ->whereRaw('incomings.product_id = products.id');
        })->paginate(5); // Menambahkan paginasi dengan 5 entri per halaman

        return view('dashboard.index', compact('incomingChartData', 'outgoingChartData', 'totalProducts', 'totalCategories', 'totalStock', 'productsWithZeroStock'));
    }
}
