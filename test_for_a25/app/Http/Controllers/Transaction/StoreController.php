<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use App\Http\Requests\Transaction\StoreRequest;
use App\Models\Transaction;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $date = $request->validated();
        Transaction::create($date);
        return redirect('/');
    }
}
