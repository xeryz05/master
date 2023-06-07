<?php

namespace App\Http\Controllers\internal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Verevenue;
use App\Models\Admin\PA;
use App\Models\Period;
use App\Charts\RevenuekpiVeChart;
use App\Charts\RevenueTypeJobsVEChart;

class DashboardUserVEController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $verevenues = Verevenue::get();
        // $PAs = PA::get();
        $periods = Period::paginate(5);

        return view('internaldashboard.dashboarduserVE', compact('verevenues','periods'));
    }

    public function grafik()
    {
        $verevenues = Verevenue::get();

        $tercapai = $verevenues->pluck('grand_total')->sum();
        $target = $verevenues->pluck('target_pertahun')->take(1);

        $dataArray = [
            '0' => $tercapai,
            '1' => $target
        ];

        return view('internaldashboard.grafikdashboarduserVE', compact('verevenues','dataArray'));
    }

    public function jobchart()
    {
        $verevenues = Verevenue::get();

        $total = $verevenues->pluck('grand_total')->toArray();
        $jobs = $verevenues->pluck('type_jobs')->toArray();
        
        // dd($total);
        // $verevenues = Verevenue::select('grand_total','type_jobs')->get();
        
        return view('internaldashboard.revenue.revenuesVE', compact('verevenues','total','jobs'));
    }
}
