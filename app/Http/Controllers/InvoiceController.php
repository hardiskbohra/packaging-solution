<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\InvoiceItem;
use App\Models\Invoice;
use Carbon\Carbon;


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
        // // dd($request->all());
        $customer = Customer::where('phone_number',$request->ph_number)->first();
        if(!$customer)
        {
            $customer = Customer::create(
                [
                    'name' => $request->customer_name,
                    'phone_number' => $request->ph_number
                    ]
                );
        }
        // dd($customer->id);

        $invoice = Invoice::create(
            [
                'invoice_number' => $request->invoice_no,
                'customer_id' => $customer->id,
                'date' =>  Carbon::createFromFormat('m/d/Y', $request->date)->format('Y-m-d'),
                'delivery_date' =>  Carbon::createFromFormat('m/d/Y', $request->delivery_date)->format('Y-m-d'),
                'sub_total' => $request->sub_total,
                'discount_percentange' => $request->discount_percentage,
                'discount_ammount' => $request->discount_amount,
                'total_discount' => $request->total_discount,
                'total' => $request->total,
                'paid_ammount' => $request->paid_amount,
                'remaining_ammount' => $request->remaining_amount,
            ]
        );

        foreach ($request->item as $item) {
            InvoiceItem::create($item+['invoice_id' => $invoice->id]);
        }
        return "success";
    }
}
