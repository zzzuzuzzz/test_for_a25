<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use App\Http\Resources\Transaction\ViewAllTransaction;
use App\Models\Employee;
use App\Models\Transaction;

class ShowController extends Controller
{
    public function __invoke() {
        $transactions = Transaction::all();
        $employees = Employee::all();
        $coefficient = 1000; //Часовая ставка работника
        foreach ($employees as $employee) {
            $employee['amount_to_pay'] = $transactions->where('paid', 0)->where('employee_id', $employee->id)->sum('hours') * $coefficient;
        }
        return ViewAllTransaction::collection($employees);
    }
}
