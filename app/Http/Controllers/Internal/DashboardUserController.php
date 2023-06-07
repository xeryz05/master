<?php

namespace App\Http\Controllers\internal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Revenue;
use App\Models\Period;
use App\Models\Vislider;
use App\Charts\RevenuekpiViChart;
use App\Charts\RevenueTypeJobsVIChart;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $revenues = Revenue::get();
        // $PAs = PA::get();
        $periods = Period::paginate(5);

        return view('internaldashboard.dashboarduser', compact('revenues','periods'));
    }


    public function grafik()
    {
        $revenues = Revenue::get();

        
        $tercapai = $revenues->pluck('grand_total')->sum();
        $target = $revenues->pluck('target_pertahun')->take(1);

        $dataArray = [
            '0' => $tercapai,
            '1' => $target
        ];

        return view('internaldashboard.grafikdashboarduser', compact('revenues','dataArray'));
    }

    public function jobchartVI()
    {
        $revenues = Revenue::get();

        $total = $revenues->pluck('grand_total')->toArray();
        $jobs = $revenues->pluck('type_jobs')->toArray();

        // dd($total);

        return view('internaldashboard.revenue.revenues', compact('revenues','total','jobs'));
    }
    
}
