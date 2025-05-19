<?php

namespace App\Http\Controllers\admin\box;

use App\Http\Controllers\Controller;
use App\Models\Box;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;

class BoxController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('can:crear marca');
    }

    public function index()
    {
        return view('admin.box.index');
    }

    public function generate(Request $request)
    {
        $boxes = Box::whereBetween('date_today', [$request->fecha_inicio, $request->fecha_fin])->get();
        $totalAmount = $boxes->sum('revenue');
        $totalSales = $boxes->sum('sale_price');
        $totalPurchases = $boxes->sum('purchase_price');

        $pdf = PDF::loadView('admin.pdf.reporte', compact('totalAmount', 'boxes', 'request', 'totalSales', 'totalPurchases'));

        return $pdf->stream('reportes.pdf');
    }
}
