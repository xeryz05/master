<?php

namespace App\Http\Controllers\Internal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Period;
use App\Models\Revenue;
use App\Charts\RevenueTypeJobsVIChart;

class DashboardRevenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function index(RevenueTypeJobsVIChart $chart)
    // {
    //     $revenues = Revenue::get();
    //     return view('internaldashboard.revenue.revenues', ['chart' => $chart->build(), 'revenues' => $revenues]);
    // }
}