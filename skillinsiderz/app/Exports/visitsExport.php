<?php

namespace App\Exports;

use App\Models\visit;
use App\Models\course;
use Maatwebsite\Excel\Concerns\FromCollection;

class visitsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return visit::all('name','email','phone','course_id');
    }
}
