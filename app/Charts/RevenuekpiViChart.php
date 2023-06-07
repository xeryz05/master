<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class RevenuekpiViChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $revenues = \App\Models\Revenue::get();

        foreach ($revenues as $item) {
                $nilai1 =  $item->pluck('grand_total')->sum(); //nilai tercapai
                $nilai2 =  $item->target_pertahuan; //target pertahun

                $selisih = $nilai1 - $nilai2;
        }
    
        return $this->chart->pieChart()
            ->setTitle('GRAFIK KPI REVENUE 2023.')
            ->setSubtitle('Season 2023.')
            ->addData([$item->pluck('grand_total')->sum(), $item->target_pertahun])
            ->setLabels(['Tercapai', 'Target']);
    }
}
