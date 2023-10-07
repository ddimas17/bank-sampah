<?php

namespace App\Http\Controllers;

use App\Charts\SampahChart;
use App\Models\Barang;
use App\Models\Sampah;
use App\Models\User;
use Illuminate\Http\Request;


class SampahController extends Controller
{
    public function index()
    {
        return view('sampah.index', [
            'title' => 'Halaman Penukaran Sampah',
            'sampahs' => Barang::all()
        ]);
    }

    public function tukar(Request $request)
    {
        return view('sampah.tukar', [
            'title' => 'Halaman Penukaran Sampah',
            'sampah' => Barang::where('id', $request->id)->first()
        ]);
    }

    public function tukarSampah(Request $request)
    {
        $request->validate([
            'username' => 'required|Lowercase',
            'nama_sampah' => 'required',
            'harga' => 'required|integer|not_in:0',
            'berat' => 'required|numeric|gt:0',
            'total' => 'required|integer|'
        ]);
        Sampah::create($request->except(['_token', 'tukar']));
        return redirect('/sampah');
    }

    public function dashboard(SampahChart $chart)
    {   
        if( auth()->check() ) {
            $query = Sampah::where('username', auth()->user()->username)->get();
        } else {
            $query = Sampah::where('username', 'guest')->get();
        }
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'datas' => $query,
            'chart' => $chart->build()
        ]);
    }
}
