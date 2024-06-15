<?php

namespace App\Http\Controllers;

use App\Models\OldTransaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function create()
    {
        return view('transactions.create');
    }

    public function index()
    {
        // $transactions = OldTransaction::latest()->paginate();
        $transactions = OldTransaction::with('oldacName')->latest()->paginate();

        return view('transactions.index', compact('transactions'));
    }
}
