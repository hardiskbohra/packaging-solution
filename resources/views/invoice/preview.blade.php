<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }
        .invoice-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        .shop-details {
            float: left;
            width: 45%;
        }
        .shop-logo {
            max-width: 150px;
            margin-bottom: 10px;
        }
        .invoice-details {
            float: right;
            width: 45%;
            text-align: right;
        }
        hr {
            border: 0;
            border-top: 1px solid #ddd;
            margin: 15px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        .item-list thead {
            background-color: #f1f1f1;
        }
        .item-list tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .item-list td {
            padding: 8px;
        }
        .total-section {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="invoice-container">
    <div class="shop-details">
<img src="/app-assets/images/mascot/logo2.jpg" alt="Shop Logo"  class="shop-logo">

    </div>
    <div class="invoice-details">
        <h3>Raymond Mascot</h3>
        <p>Office 149, Maruti Nandan Complex</p>
        <p>KK Nagar, Ghatlodia, Ahmedabad-013</p>
        <p>+91 (869) 069 7978, +91 (832) 035 9212</p>



    </div>
    <div style="clear:both;"></div> <!-- Clear the float -->
    <hr>
    <h2 style="text-align: center">Inovice</h2>
    <div class="shop-details">
        <p><b>Invoice Number:</b> {{$invoice->invoice_number}}</p>
        <p><b>Date: </b>{{$invoice->date}}</p>
        <p><b>Delivery Date:</b> {{$invoice->delivery_date}}</p>
    </div>
    <div class="invoice-details">
        <p><b>Customer Name: </b>{{$invoice->customer->name}}</p>
        <p><b>Phone Number:</b> +91 {{$invoice->customer->phone_number}}</p>
    </div>
    <hr>
    <div class="item-list">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Item</th>
                    <th>Cost</th>
                    <th>Qty</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $count = 1;
                @endphp
                @foreach ($invoice->incoiceItems as $item)
                <tr>
                    <td>{{$count}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->cost}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>₹ {{$item->price}}</td>
                </tr>
                @php
                    $count++;
                @endphp
                @endforeach
                <tr>
                    <td colspan="3" class="">
                    </td>
                    <td class="text-end px-4 ">
                        <p class="mb-2"><strong>Subtotal:</strong></p>
                        <p class="mb-2">Discount:</p>
                        <p class="mb-2">Tax:</p>
                        <p class="mb-2"><strong>Total:</strong></p>
                        <p class="mb-2">Paid Amount:</p>
                        <p class="mb-2">Remaining Amount:</p>
                    </td>
                    <td class="px-4 ">
                        <p class="fw-semibold mb-2"><strong>₹ {{$invoice->sub_total}}</strong></p>
                        <p class="fw-semibold mb-2">₹ {{$invoice->total_discount}}</p>
                        <p class="fw-semibold mb-2">₹ 00.00</p>
                        <p class="fw-semibold mb-0"><strong>₹ {{$invoice->total}}</strong></p>
                        <p class="fw-semibold mb-0">₹ {{$invoice->paid_ammount}}</p>
                        <p class="fw-semibold mb-0">₹ {{$invoice->remaining_ammount}}</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <hr>
    <div class="total-section">
    </div>
    <h6 style="color: gray">
        If you have any further questions or concerns about this issue please mention the following ticket id in subject line, in the subsequent emails.
        If you have any further questions or concerns about this issue please mention the following ticket id in subject line, in the subsequent emails.
        If you have any further questions or concerns about this issue please mention the following ticket id in subject line, in the subsequent emails.
    </h6>
</div>

 <script>
        // Automatically trigger print when the page loads
        window.onload = function () {
            window.print();
        };
    </script>
</body>


</html>
