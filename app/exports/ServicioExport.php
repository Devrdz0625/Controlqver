<?php

namespace App\exports;

use App\Servicio;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facade\Excel;

class ServicioExport implements FroomCollection
{
    public function collection()
    {
        return Servicio::all();
    }
}