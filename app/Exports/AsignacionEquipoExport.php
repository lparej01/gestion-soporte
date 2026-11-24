<?php

namespace App\Exports;

use App\Models\Servicios\SoporteTecnico\AsignacionEquipo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class AsignacionEquipoExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return AsignacionEquipo::getAllEquiposExcel();
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return [
          'Identificador',
          'Equipo Asignado',
          'Oficina',
          'Tipo de Equipo',
          'Teclado Marca',
          'Teclado Serial',
           'Mouse Serial',
           'Mouse Marca',
           'Monitor Serial',
           'Monitor Marca',
           'Cpu Serial',
           'Cpu Marca',
           'Tipo de Procesador',
           'Memoria Ram',
           'Disco',
            'Any Desk',
            'Sistema Operativo',
            'Nombre del Equipo',
            'Correo Electronico',
            'Conector de Internet',
            'Conector Corriente',
            'Conector Corriente Monitor',
            'Conector Cpu Monitor',
            'Dominio',
            'Status']; 
                        
    }
}
