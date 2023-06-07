<?php

namespace App\Exports;

use App\Models\Revenue;
use Maatwebsite\Excel\Concerns\FromQuery;
// use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
// use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class RevenueExport implements FromQuery, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    // use Exportable;

    public function headings(): array
    {
        return [
            '#',
            'Company',
            'Target',
            'Target Bulanan',
            'Persentase',
        ];
    }

    public function query()
    {
        return Revenue::query();
    }

    public function map($revenues): array
    {
        return [
            $revenues->iteration,
            $revenues->company->name,
            $revenues->target_tahun,
            $revenues->target_bulan,
            $revenues->persentase,
            // Date::dateTimeToExcel($revenues->created_at),
        ];
    }
}
