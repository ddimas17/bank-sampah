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
        $beratSampah = Sampah::all()->sum('berat');
    
        // dd($sampah);
        return $this->chart->lineChart()
            ->setTitle('Data Sampah')
            ->setSubtitle('Total Pembuangan Sampah')
            ->addData('Berat', [0, $beratSampah])
            ->setXAxis(['September']);
    }
}
