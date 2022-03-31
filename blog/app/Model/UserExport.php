<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserExport implements FromCollection
{

    public function collection()
    {
        return User::all();
    }
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }
}