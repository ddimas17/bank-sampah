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
        $beratSampah = Sampah::groupBy('nama')->selectRaw('sum(berat) as total_berat')->selectRaw('nama')->get();
        
       foreach( $beratSampah as $item ) {
            $berat[] = $item->total_berat;
            $namaSampah[] = $item->nama;
       }
       
        return $this->chart->lineChart()
            ->setTitle('Data Sampah')
            ->setSubtitle('Total Pembuangan Sampah')
            ->addData('Berat', $berat)
            ->setXAxis($namaSampah);
    }
}
