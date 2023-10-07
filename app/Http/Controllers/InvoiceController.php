<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
    //    $users = User::with('role')->get();
    //    return view('user.list', compact('users'));
        return view('invoice.list');

    }

    public function create()
    {

        $invoice_no = 0001;
        return view('invoice.add',compact('invoice_no'));

    }

    public function store(Request $request)
    {
        dd(request()->all());
        dd($request);
    }
}
