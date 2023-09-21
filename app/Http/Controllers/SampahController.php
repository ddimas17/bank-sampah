<?php

namespace App\Http\Controllers;

use App\Charts\SampahChart;
use App\Models\Sampah;
use Illuminate\Http\Request;


class SampahController extends Controller
{
    public function index()
    {
        return view('sampah.index', [
            'title' => 'Halaman Penukaran Sampah'
        ]);
    }

    public function tukar(Request $request)
    {
        return view('sampah.tukar', [
            'title' => 'Halaman Penukaran Sampah',
            'nama' => $_GET['s'],
            'harga' => $_GET['h']
        ]);
    }

    public function tukarSampah(Request $request)
    {
        $request->validate([
            'username' => 'required|Lowercase',
            'nama' => 'required',
            'harga' => 'required|integer|not_in:0',
            'berat' => 'required|numeric|gt:0',
            'total' => 'required|integer|'
        ]);
        Sampah::create($request->except(['_token', 'tukar']));
        return redirect('/sampah');
    }

    public function dashboard(SampahChart $chart)
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'datas' => Sampah::all(),
            'chart' => $chart->build()
        ]);
    }
}
