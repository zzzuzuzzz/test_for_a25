<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use App\Models\Transaction;

class PayController extends Controller
{
    public function __invoke() {
        Transaction::where('paid', 0)->update(['paid' => 1]);
        return redirect('/');
    }
}
