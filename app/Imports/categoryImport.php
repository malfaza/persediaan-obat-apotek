<?php

namespace App\Imports;

use App\Models\category;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class categoryImport implements ToModel, WithHeadingRow, WithValidation, SkipsOnFailure
{
    use Importable, SkipsFailures;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new category([
            'name' => $row['name'],
            'description' => $row['description']
        ]);
    }

    public function rules(): array
    {
        return[
            'name' => 'required|unique:categories',
            'description' => 'required',
        ];
    }
}
