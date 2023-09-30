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
    //    $users = User::with('role')->get();
    //    return view('user.list', compact('users'));
        return view('invoice.add');

    }

    public function store(Request $request)
    {
        dd(request()->all());
        dd($request);
    }
}
