<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Revenue;
use App\Exports\RevenueExport;
use App\Imports\RevenueImport;
use Maatwebsite\Excel\Facades\Excel;
// use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Concerns\Exportable;

class RevenueVIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $revenues = Revenue::get();
        return view('admin.revenues.index', compact('revenues','revenues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function export() 
    {
        return Excel::download(new RevenueExport, 'revenues.xlsx');
        // return (new RevenueExport)->download('revenue.xlsx');
        // return redirect()->route('revenue.index')->with('success', 'All good!');
        
    }

    public function import(Request $request) 
    {

        // dd($request->file('file'));
        Excel::import(new RevenueImport, $request->file('file'));
        // (new UsersImport)->import($request->file('file'), \Maatwebsite\Excel\Excel::XLSX);
        
        return redirect()->route('revenue.index')->with('success', 'All good!');
    }
}
