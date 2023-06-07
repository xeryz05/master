<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Verevenue;

class RevenueTypeJobsVEChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\pieChart
    {
        
        $verevenues = Verevenue::get();

        $total = $verevenues->pluck('grand_total')->toArray();
        $jobs = $verevenues->pluck('type_jobs')->toArray();

        //    return $this->chart->polarAreaChart()
        //         ->setTitle('Revenue berdasarkan tipe pekerjaan')
        //         ->setSubtitle('Season 2023.')    
        //         ->addData($total)
        //         ->setLabels(['Car','Crusher','Dwt Pump','Grand','MBP','OM Genset','Overhaul', 'Rent Car','Slurry Pump','Sparepart Mnt','Tower Lamp']);

            return $this->chart->pieChart()
                ->setTitle('Revenue KPI Verdanco Engineering')
                ->setSubtitle('Season 2023.')
                ->addData($total)
                ->setLabels($jobs);

    }

}
