<?php

namespace App\Imports;

use App\Models\product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class productImport implements ToModel, WithHeadingRow, WithValidation, SkipsOnFailure
{
    use Importable, SkipsFailures;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new product([
            'name' => $row['name'],
            'description' => $row['description'],
            'category_id' => $row['category_id'],
            'type_id' => $row['type_id'],
            'supplier_id' => $row['supplier_id'],
        ]);
    }

    public function rules(): array
    {
        return[
            'name' => 'required|unique:products',
            'description' => 'required',
            'category_id' => 'required',
            'type_id' => 'required',
            'supplier_id' => 'required',
        ];
    }
}
