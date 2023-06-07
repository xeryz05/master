<?php

namespace App\Imports;

use App\Models\Revenue;
use App\Models\Company;
use App\Models\Period;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RevenueImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    use Importable;

    public function collection(Collection $rows) 
    {
        foreach ($rows as $row) 
        {
            Revenue::create([
                'period_id' => Period::where('month', $row['period'])->pluck('id')->first(),
                'company_id' => Company::where('name', $row['company'])->pluck('id')->first(),
                'pendapatan_perbulan' => $row['pendapatan_perbulan'],
                'target_pertahun' => $row['target_pertahun'],
                'target_perbulan' => $row['target_perbulan'],
                'persentase' => $row['persentase'],
            ]);
        }
    }
}
