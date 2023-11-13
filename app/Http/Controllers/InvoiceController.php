<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\InvoiceItem;
use App\Models\Invoice;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;


class InvoiceController extends Controller
{
    public function index(Request $request)
    {
        $invoices = Invoice::with(['customer','incoiceItems'])
        ->where(function($query) use($request)
        {
            if(!empty($request->name))
            {
                $query->whereIn('customer_id', \App\Models\Customer::select('id')->where('name','LIKE','%'.$request->name.'%'));
            }

            if(!empty($request->phone_number))
            {
                $query->whereIn('customer_id', \App\Models\Customer::select('id')->where('phone_number','LIKE','%'.$request->phone_number.'%'));
            }

            if(!empty($request->date))
            {
                $query->where('date',Carbon::createFromFormat('m/d/Y', $request->date)->format('Y-m-d'));
            }

            if(!empty($request->delivery_date))
            {
                $query->where('delivery_date',Carbon::createFromFormat('m/d/Y', $request->delivery_date)->format('Y-m-d'));
            }

            if(!empty($request->payment_status))
            {
                $query->where('payment_status',$request->payment_status);
            }
        })
        ->orderBy('created_at','DESC')
        ->paginate(10);
        Paginator::useBootstrap();
        return view('invoice.list', compact('invoices'));

    }

    public function create()
    {
        $invoice_no = $this->generateInvoiceNumber();
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
                'date' =>  Carbon::createFromFormat('j F, Y', $request->date)->format('Y-m-d'),
                'delivery_date' =>  Carbon::createFromFormat('j F, Y', $request->delivery_date)->format('Y-m-d'),
                'sub_total' => $request->sub_total,
                'discount_percentange' => $request->discount_percentage ?? 0,
                'discount_ammount' => $request->discount_amount ?? 0,
                'total_discount' => $request->total_discount,
                'total' => $request->total,
                'paid_ammount' => $request->paid_amount ?? 0,
                'remaining_ammount' => $request->remaining_amount,
                'payment_status' => $request->remaining_amount <= 0 ? "paid" : "unpaid",
            ]
        );

        foreach ($request->item as $item) {
            InvoiceItem::create($item+['invoice_id' => $invoice->id]);
        }

        return redirect()->route('invoices.index');
    }

    public function generateInvoiceNumber()
    {
        $currentYear = date('Y');
        $currentMonth = date('m');

        $lastInvoice = Invoice::whereYear('created_at', $currentYear)
            ->whereMonth('created_at', $currentMonth)
            ->orderBy('id', 'desc')
            ->first();

        $lastNumber = $lastInvoice ? substr($lastInvoice->invoice_number, -5) : 0;


        // Increment the last number and format it
        $nextNumber = str_pad($lastNumber + 1, 5, '0', STR_PAD_LEFT);

        // Generate the invoice number
        $invoiceNumber = $currentYear . $currentMonth . $nextNumber;

        return $invoiceNumber;
    }

    public function getCustomerName(Request $request)
    {
        $phoneNumber = $request->input('ph_number');

        // Perform a database query to get the customer name based on the phone number
        $customer = Customer::where('phone_number', $phoneNumber)->first();

        if ($customer) {
            return response()->json(['customer_name' => $customer->name]);
        } else {
            return response()->json(['customer_name' => 'Customer not found'], 404);
        }
    }

    public function addPaymentHistory(Request $request)
    {
        \App\Models\PaymentHistory::create(
                [
                    'invoice_id' => $request->id,
                    'date' => Carbon::now(),
                    'paid_amount' => $request->remaining_amount,
                    'payment_mode' => $request->payment_mode,
                ]
            );

        $invoice = \App\Models\Invoice::find($request->id);
        if($invoice)
        {

            $invoice->paid_ammount = $invoice->paid_ammount + $request->remaining_amount;
            $invoice->remaining_ammount = $invoice->remaining_ammount - $request->remaining_amount;
            $invoice->payment_status = ($invoice->remaining_ammount <= 0 ? 'paid' : 'unpaid');
            $invoice->save();
        }
    }


    public function printInvoice(Request $request)
    {

        $invoice = Invoice::with(['customer','incoiceItems'])->where('id',$request->id)->first();
        return view('invoice.preview',compact('invoice'));
    }

    public function updateDeliveredStatus(Request $request)
    {
        $invoice = Invoice::find($request->invoice_id);
        $invoice->delivered_status = 'yes';
        $invoice->save();

        return response()->json(['message' => 'Delivered status updated successfully']);
    }
}
