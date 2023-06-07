<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Revenue;

class RevenueTypeJobsVIChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\pieChart
    {
        
        $revenues = Revenue::get();

        $total = $revenues->pluck('grand_total')->toArray();
        $jobs = $revenues->pluck('type_jobs')->toArray();

        //    return $this->chart->polarAreaChart()
        //         ->setTitle('Revenue berdasarkan tipe pekerjaan')
        //         ->setSubtitle('Season 2023.')    
        //         ->addData($total)
        //         ->setLabels(['Car','Crusher','Dwt Pump','Grand','MBP','OM Genset','Overhaul', 'Rent Car','Slurry Pump','Sparepart Mnt','Tower Lamp']);

            // return $this->chart->lineChart()
            //     ->setTitle('Grafik KPI Revenue')
            //     ->setSubtitle('Season 2023.')
            //     ->setXAxis($jobs)
            //     ->addData('Penjualan', $total);
                
            return $this->chart->pieChart()
                ->setTitle('Revenue KPI Verdanco Indonesia')
                ->setSubtitle('Season 2023.')
                ->addData($total)
                ->setLabels($jobs);

    }
}
