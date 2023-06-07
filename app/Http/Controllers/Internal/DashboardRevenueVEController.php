<?php

namespace App\Http\Controllers\internal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Verevenue;
use App\Charts\RevenueTypeJobsVEChart;

class DashboardRevenueVEController extends Controller
{
    // public function index(RevenueTypeJobsVEChart $chart)
    // {   
    //     $verevenues = Verevenue::get();
    //     return view('internaldashboard.revenue.revenuesVE', ['chart' => $chart->build(), 'verevenues' => $verevenues]);
    // }
}
