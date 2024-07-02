<?php

namespace App\Http\Resources\Transaction;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ViewAllTransaction extends JsonResource
{
    public function toArray($request)
    {
        return [
            'employee_id' => $this->id,
            'amount_to_pay' => $this->amount_to_pay
        ];
    }
}
