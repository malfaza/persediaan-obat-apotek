<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\incoming;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class incomingImport implements ToModel, WithHeadingRow, WithValidation
{
    use Importable;

    public function model(array $row)
    {
        return new incoming([
            'product_id' => $row['product_id'],
            'quantity' => $row['quantity'],
            'expire' =>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['expire']), // Sesuaikan dengan format yang sesuai
            'description' => $row['description'],
        ]);
    }

    public function rules(): array
    {
        return [
            'product_id' => 'required|numeric',
            'quantity' => 'required|numeric',
            'expire' => 'required',
            'description' => 'nullable',
        ];
    }

}
