<?php

namespace App\Exports;

use App\Pesdik;
use Maatwebsite\Excel\Concerns\FromCollection;

class PesdikExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pesdik::all();
    }
}
