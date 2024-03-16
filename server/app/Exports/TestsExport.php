<?php

namespace App\Exports;

use App\Models\Tests;
use App\Models\TestsDone;
use Maatwebsite\Excel\Concerns\FromCollection;

class TestsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TestsDone::all('user_id', 'test_id', 'score')->sortBy("user_id");

    }

    public function storeExcel() 
    {
        // Store on default disk
        Excel::store(new TestsExport(2018), 'tests.xlsx');
    }   


}
