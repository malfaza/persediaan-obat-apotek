<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\outgoing;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class outgoingImport implements ToModel, WithHeadingRow, WithValidation
{
    use Importable;

    public function model(array $row)
    {
        return new outgoing([
            'product_id' => $row['product_id'],
            'quantity' => $row['quantity'],
            'description' => $row['description'],
        ]);
    }

    public function rules(): array
    {
        return [
            'product_id' => 'required|numeric',
            'quantity' => 'required|numeric',
            'description' => 'nullable',
        ];
    }

}
