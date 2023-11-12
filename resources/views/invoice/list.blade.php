@extends('layout/master')
@section('title', 'invoices-listing')
@section('page-css')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/pickers/pickadate/pickadate.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/css/pikaday.min.css" integrity="sha384-LJutInCHyNH9nSFKCkdMgYHbztN4AjzwyIh1hV6A0K6xHlA5lXr/4DrKWn/oNn4J" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.css">

    <!-- END: Vendor CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/pages/app-invoice.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/style.css">
    <!-- END: Custom CSS-->
@endsection

@section('content')
      <!-- BEGIN: Content-->
      <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="Invoice-list-wrapper">
                    <div class="Invoice-list-filter px-1">
                        <form>
                            <div class="row border rounded py-2 mb-2">
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="Invoice-list-verified">Verified</label>
                                    <fieldset class="form-group">
                                        <input type="text" id="filter_customer_name"
                                        name="name"
                                        class="form-control"
                                        placeholder="Customer Name">
                                    </fieldset>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="Invoice-list-verified">Phone Number</label>
                                    <fieldset class="form-group">
                                        <input type="text" id="filter_ph_number"
                                        name="phone_number"
                                        class="form-control"
                                        placeholder="Phone Number">
                                    </fieldset>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="Invoice-list-status">Date</label>
                                    <fieldset class="form-group">
                                        <input type="text" id="date" name="date" class="form-control pickadate" placeholder="date" readonly="readonly">
                                    </fieldset>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="Invoice-list-status">Delivery Date</label>
                                    <fieldset class="form-group">
                                        <input type="text" id="delivery_date" name="delivery_date" class="form-control pickadate" placeholder="delivery date" readonly="readonly">
                                    </fieldset>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="Invoice-list-role">Payment Status</label>
                                    <fieldset class="form-group">
                                        <select class="form-control" id="Invoice-payment-status" name="payment_status">
                                                <option value="">All</option>
                                                <option value="paid">Paid</option>
                                                <option value="unpaid">Unpaid</option>
                                            </select>
                                        </fieldset>
                                    </div>

                                    <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
                                        <button type="submit" class="btn btn-primary btn-block glow Invoice-list-clear mb-0">Search</button>
                                    </div>


                            </div>


                        </form>
                    </div>
                    <div class="users-list-table">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- datatable start -->
                                    <div class="table-responsive">
                                        <table id="users-list-datatable" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Invoie no.</th>
                                                    <th>Customer</th>
                                                    <th>Phone No.</th>
                                                    <th>Date</th>
                                                    <th>Delivery date</th>
                                                    <th>Total</th>
                                                    <th>Paid Ammount</th>
                                                    <th>Remaining Ammount</th>
                                                    <th>Edit</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @if($invoices->isEmpty())
                                                    <tr>
                                                        <td colspan="12" class="text-center">No records found</td>
                                                    </tr>
                                                @else
                                                    @foreach ($invoices as $invoice)
                                                    <tr>
                                                        <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">{{$invoice->invoice_number}}</a>
                                                        </td>
                                                        <td>{{$invoice->customer->name}}</td>
                                                        <td>{{$invoice->customer->phone_number}}</td>
                                                        <td>{{ \Carbon\Carbon::parse($invoice->date)->format('d M')}}</td>
                                                        <td>{{ \Carbon\Carbon::parse($invoice->delivery_date)->format('d M')}}</td>
                                                        <td>{{$invoice->total}}</td>
                                                        <td>{{$invoice->paid_ammount}}</td>
                                                        <td  style="{{ $invoice->remaining_ammount > 0 ? 'color: red;' : '' }}">{{$invoice->remaining_ammount}}</td>
                                                        @if ($invoice->remaining_ammount > 0)

                                                            <td>
                                                                <button class="badge badge-danger" style="border: none" data-toggle="modal" data-target="#inlineForm{{$invoice->id}}">mark as paid</i></button>

                                                                <div class="modal fade text-left" id="inlineForm{{$invoice->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title" id="myModalLabel33">Add Payment </h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <i class="bx bx-x"></i>
                                                                                </button>
                                                                            </div>
                                                                            <form action="#" id="addPaymentForm">
                                                                                <div class="modal-body">
                                                                                    <input type="hidden" name="id" value="{{$invoice->id}}">
                                                                                    <label>Invoice No.: </label>
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control" value="{{$invoice->invoice_number}}" readonly>
                                                                                    </div>
                                                                                    <label>Customer: </label>
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control" value="{{$invoice->customer->name}}" readonly>
                                                                                    </div>
                                                                                    <label>TOtal: </label>
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control" value="{{$invoice->total}}" readonly>
                                                                                    </div>
                                                                                    <label>Paid Amount: </label>
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control"  value="{{$invoice->paid_ammount}}" readonly>
                                                                                    </div>
                                                                                    <label>Remaining Amount: </label>
                                                                                    {{-- <div class="form-group">
                                                                                        <input type="text" name="remaining_amount" placeholder="remaining amount" class="form-control" value="{{$invoice->remaining_ammount}}">
                                                                                    </div> --}}

                                                                                    <div class="form-group">
                                                                                        <input type="number" name="remaining_amount" placeholder="Remaining Amount" class="form-control" value="{{$invoice->remaining_ammount}}" min="0" max="{{$invoice->remaining_ammount}}" oninput="validity.valid||(value='');">
                                                                                    </div>


                                                                                    <label>Payment Mode: </label>
                                                                                    <div class="form-group">
                                                                                        <select class="form-control" id="Invoice-payment-mode" name="payment_mode">
                                                                                            <option value="cash">Cash</option>
                                                                                            <option value="card">Card</option>
                                                                                            <option value="upi">UPI</option>
                                                                                        </select>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                                                        <span class="d-none d-sm-block">Close</span>
                                                                                    </button>
                                                                                    <button type="button" class="btn btn-primary ml-1" data-dismiss="modal" id="addPaymentBtn">
                                                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                                                        <span class="d-none d-sm-block">Update</span>
                                                                                    </button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                        @else
                                                        <td >
                                                            <button class="badge badge-success" style="border: none; cursor:text" desabled>paid</i></button>
                                                        </td>
                                                        @endif
                                                        <td>
                                                            <a href="{{ route('invoice.print',['id' => $invoice->id]) }}" target="_blank"><i class="bx bx-printer" style="font-size: 1.9rem"></i></a>


                                                            {{-- <form method="POST" action="{{route('invoices.destroy',$invoice->id)}}"> --}}
                                                                {{-- @csrf --}}
                                                                {{-- @method('DELETE') --}}
                                                                {{-- <button type="submit" class="badge badge-light-danger" style="border: none">delete</i></button> --}}
                                                            {{-- </form> --}}
                                                        </td>

                                                    </tr>
                                                    @endforeach
                                                @endif

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- datatable ends -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users list ends -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

@section('jqcdn')

    <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.js"></script>

    <script src="/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
    <script src="/app-assets/js/scripts/pages/app-invoice.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">
        // CSRF Token
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    </script>
@endsection
