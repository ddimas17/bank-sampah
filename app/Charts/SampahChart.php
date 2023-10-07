<?php

namespace App\Charts;

use App\Models\Sampah;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class SampahChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        if( auth()->check() ) {
            $beratSampah = Sampah::where('username', auth()->user()->username)->groupBy('nama_sampah')->selectRaw('sum(berat) as total_berat')->selectRaw('nama_sampah')->get();
        }else {
            $beratSampah = Sampah::where('username', 'guest')->groupBy('nama_sampah')->selectRaw('sum(berat) as total_berat')->selectRaw('nama_sampah')->get();
        }
        $berat = [];
        $namaSampah = [];
       foreach( $beratSampah as $item ) {
            $berat[] = $item->total_berat;
            $namaSampah[] = $item->nama_sampah;
       }
       
        return $this->chart->lineChart()
            ->setTitle('Data Sampah')
            ->setSubtitle('Total Pembuangan Sampah')
            ->addData('Berat', $berat)
            ->setXAxis($namaSampah);
    }
}
