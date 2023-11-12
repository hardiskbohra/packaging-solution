@extends('layout/master')
@section('title', 'invoice-create')
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
    <style>
        html body p {
    line-height: 0.5rem;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: normal !important;
    background-color: #FFFFFF;
    background-clip: border-box;
    border: 0px solid #dfe3e7;
    border-radius: 0.267rem;
}


    </style
@endsection
@section('content')


    <!-- BEGIN: Content-->
    <form action="{{ route('invoices.store') }}" method="POST">
        @csrf
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <!-- app invoice View Page -->
                    <section class="invoice-edit-wrapper">
                        <div class="row">
                            <!-- invoice view page -->
                            <div class="col-xl-9 col-md-8 col-12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body pb-0 mx-25">
                                            <!-- header section -->
                                            {{-- <div class="row mx-0">
                                                <div class="col-xl-4 col-md-12 d-flex align-items-center pl-0">
                                                    <h6 class="invoice-number mr-75">Invoice#</h6>
                                                    <input type="text" name="bill_no" class="form-control pt-25 w-50" id="bill_no" value="{{$invoice_no}}" placeholder="#000">
                                                </div>
                                                <div class="col-xl-8 col-md-12 px-0 pt-xl-0 pt-1">
                                                    <div class="invoice-date-picker d-flex align-items-center justify-content-xl-end flex-wrap">
                                                        <div class="d-flex align-items-center">
                                                            <small class="text-muted mr-75">Date Issue: </small>
                                                            <fieldset class="d-flex ">
                                                                <input type="text" class="form-control pickadate mr-2 mb-50 mb-sm-0" id="date" name="date" placeholder="Select Date">
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="row mx-0">
                                                <div class="col-md-6 mb-md-0 mb-4">
                                                    <div class="d-flex svg-illustration mb-2     gap-2">

                                                        <svg width="26px" height="26px" viewBox="0 0 26 26"
                                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <title>icon</title>
                                                            <defs>
                                                                <linearGradient x1="50%" y1="0%" x2="50%"
                                                                    y2="100%" id="linearGradient-1">
                                                                    <stop stop-color="#5A8DEE" offset="0%"></stop>
                                                                    <stop stop-color="#699AF9" offset="100%"></stop>
                                                                </linearGradient>
                                                                <linearGradient x1="0%" y1="0%" x2="100%"
                                                                    y2="100%" id="linearGradient-2">
                                                                    <stop stop-color="#FDAC41" offset="0%"></stop>
                                                                    <stop stop-color="#E38100" offset="100%"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                            <g id="Pages" stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <g id="Login---V2"
                                                                    transform="translate(-667.000000, -290.000000)">
                                                                    <g id="Login"
                                                                        transform="translate(519.000000, 244.000000)">
                                                                        <g id="Logo"
                                                                            transform="translate(148.000000, 42.000000)">
                                                                            <g id="icon"
                                                                                transform="translate(0.000000, 4.000000)">
                                                                                <path
                                                                                    d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z"
                                                                                    id="Combined-Shape" fill="#4880EA">
                                                                                </path>
                                                                                <path
                                                                                    d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"
                                                                                    id="Combined-Shape2"
                                                                                    fill="url(#linearGradient-1)"></path>
                                                                                <rect id="Rectangle"
                                                                                    fill="url(#linearGradient-2)"
                                                                                    x="0" y="0"
                                                                                    width="7.68181818" height="7.68181818">
                                                                                </rect>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>


                                                        <span class="app-brand-text h3 mb-0 fw-bold">Frest</span>
                                                    </div>
                                                    <p class="mb-1">Office 149, Maruti Nandan Complex</p>
                                                    <p class="mb-1">KK Nagar, Ghatlodia, Ahmedabad-013</p>
                                                    <p class="mb-0">+91 (869) 069 7978, +91 (832) 035 9212</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <dl class="row mb-2">
                                                        <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end">
                                                            <span class="h4 text-capitalize mb-0 text-nowrap">Invoice
                                                                #</span>
                                                        </dt>
                                                        <dd class="col-sm-6 d-flex justify-content-md-end">
                                                            <div class="w-px-150">
                                                                <input type="text" class="form-control"
                                                                    placeholder="3905" value="{{$invoice_no}}" name="invoice_no" id="invoiceId">
                                                            </div>
                                                        </dd>
                                                        <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end">
                                                            <span class="fw-normal">Date:</span>
                                                        </dt>
                                                        <dd class="col-sm-6 d-flex justify-content-md-end">
                                                            <div class="w-px-150 d-flex">
                                                                <input type="text"
                                                                    class="form-control pickadate"
                                                                    placeholder="YYYY-MM-DD" readonly="readonly" id="date" name="date">

                                                            </div>
                                                        </dd>
                                                        <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end">
                                                            <span class="fw-normal">Delievery Date:</span>
                                                        </dt>
                                                        <dd class="col-sm-6 d-flex justify-content-md-end">
                                                            <div class="w-px-150 d-flex">
                                                                <input type="text"
                                                                    class="form-control pickadate"
                                                                    placeholder="YYYY-MM-DD" readonly="readonly" id="delivery_date" name="delivery_date">

                                                            </div>
                                                        </dd>
                                                        {{-- <dt class="col-sm-6 mb-2 mb-sm-0 text-md-end">
                                                            <span class="fw-normal">Due Date:</span>
                                                        </dt>
                                                        <dd class="col-sm-6 d-flex justify-content-md-end">
                                                            <div class="w-px-150">
                                                                <input type="text"
                                                                    class="form-control date-picker flatpickr-input"
                                                                    placeholder="YYYY-MM-DD" readonly="readonly">
                                                            </div>
                                                        </dd> --}}
                                                    </dl>
                                                </div>
                                            </div>
                                            <hr>
                                            <!-- logo and title -->
                                            {{-- <div class="row my-2 py-50">
                                                <div class="col-sm-6 col-12 order-2 order-sm-1">
                                                    <h4 class="text-primary">Invoice</h4>
                                                    <input type="text" name="product_name" class="form-control"
                                                        placeholder="Product Name">
                                                </div>
                                                <div class="col-sm-6 col-12 order-1 order-sm-1 d-flex justify-content-end">
                                                    <img src="/app-assets/images/pages/pixinvent-logo.png" alt="logo"
                                                        height="46" width="164">
                                                </div>
                                            </div>
                                            <hr> --}}
                                            <!-- invoice address and contact -->
                                            <div class="row invoice-info">
                                                <div class="col-lg-6 col-md-12 mt-25">
                                                    <h6 class="invoice-to">Bill To</h6>
                                                    <fieldset class="invoice-address form-group">
                                                        <input type="number" name="ph_number" class="form-control"
                                                            placeholder="Phone Number">
                                                    </fieldset>
                                                    <fieldset class="invoice-address form-group">
                                                        <input type="text" name="customer_name" class="form-control"
                                                            placeholder="Customer Name">
                                                    </fieldset>

                                                   {{-- <fieldset class="invoice-address form-group">
                                                        <input type="text" name="house_no" class="form-control"
                                                            placeholder="House no.">
                                                    </fieldset>
                                                    <fieldset class="invoice-address form-group">
                                                        <textarea class="form-control" name="area" rows="4" placeholder="Landmark/Street"></textarea>
                                                    </fieldset>
                                                    <fieldset class="invoice-address form-group">
                                                        <input name="city" class="form-control" placeholder="City">
                                                    </fieldset>
                                                    <fieldset class="invoice-address form-group">
                                                        <input type="number" name="pincode" class="form-control"
                                                            placeholder="Pincode">
                                                    </fieldset> --}}

                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="card-body pt-50">
                                            <!-- product details table-->
                                            <div class="invoice-product-details ">
                                                <div class="form invoice-item-repeater">
                                                    <div data-repeater-list="item">
                                                        <div data-repeater-item>
                                                            <div class="row mb-50">
                                                                <div class="col-3 col-md-4 invoice-item-title">Item</div>
                                                                <div class="col-3 invoice-item-title" id="">Cost
                                                                </div>
                                                                <div class="col-2 invoice-item-title">Qty</div>
                                                                <div class="col-3 col-md-2 invoice-item-title"
                                                                    style="text-align: center;">Price</div>
                                                            </div>
                                                            <div class="invoice-item d-flex border rounded mb-1">
                                                                <div class="invoice-item-filed row pt-1 px-1">
                                                                    <div class="col-12 col-md-4 form-group">
                                                                        <select class="form-control invoice-item-select"
                                                                            name="item[0][type]">
                                                                            <option value="shirt">shirt</option>
                                                                            <option value="pent">pent</option>
                                                                            <option value="kurta">kurta</option>
                                                                            <option value="lengha">lengha</option>
                                                                            <option value="shirting">shirting</option>
                                                                            <option value="suiting">suiting</option>
                                                                            <option value="stitching">stitching</option>
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3 col-12 form-group">
                                                                        <input type="text" id="item[0][cost]"
                                                                            name="item[0][cost]"
                                                                            class="cost-input form-control"
                                                                            placeholder="0">
                                                                    </div>
                                                                    <div class="col-md-3 col-12 form-group">
                                                                        <input type="text" id="item[0][quantity]"
                                                                            name="item[0][quantity]"
                                                                            class="quantity-input form-control"
                                                                            placeholder="0">
                                                                    </div>
                                                                    <div class="col-md-2 col-12 form-group"
                                                                        style="text-align: center;">
                                                                        <strong class="text-primary align-middle"
                                                                            name="item[0][price]">₹ 00.00</strong>
                                                                        <input type="hidden"
                                                                            class="text-primary align-middle raw_amount"
                                                                            id="item[0][price]" name="item[0][price]">
                                                                    </div>
                                                                    {{-- <div class="col-md-4 col-12 form-group">
                                                                        <input type="text" id="item[0]['description']" name="item[0]['description']" class="form-control invoice-item-desc" value="Desc...">
                                                                    </div>
                                                                    <div class="col-md-8 col-12 form-group">
                                                                        <span>Discount: </span><span class="discount-value mr-1">15%</span>
                                                                        <span class="mr-1 tax1">0%</span>
                                                                        <span class="mr-1 tax2">0%</span>
                                                                    </div> --}}
                                                                </div>
                                                                <div
                                                                    class="invoice-icon d-flex flex-column justify-content-between border-left p-25">
                                                                    <span class="cursor-pointer" data-repeater-delete>
                                                                        <i class="bx bx-x close_button"></i>
                                                                    </span>
                                                                    {{-- <div class="dropdown">
                                                                        <i class="bx bx-cog cursor-pointer dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"></i>
                                                                        <div class="dropdown-menu p-1">
                                                                            <div class="row">
                                                                                <div class="col-12 form-group">
                                                                                    <label for="discount">Discount(%)</label>
                                                                                    <input type="item[0]['discount']"  class="form-control" id="discount" placeholder="15">
                                                                                </div>
                                                                                <div class="col-6 form-group">
                                                                                    <label for="Tax1">Tax1</label>
                                                                                    <select name="tax1" id="Tax1" class="form-control invoice-tax">
                                                                                        <option selected value="1">1%</option>
                                                                                        <option value="10">10%</option>
                                                                                        <option value="18">18%</option>
                                                                                        <option value="40">40%</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-6 form-group">
                                                                                    <label for="Tax2">Tax2</label>
                                                                                    <select name="tax1" id="Tax2" class="form-control invoice-tax">
                                                                                        <option selected value="1">1%</option>
                                                                                        <option value="10">10%</option>
                                                                                        <option value="18">18%</option>
                                                                                        <option value="40">40%</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="d-flex justify-content-between">
                                                                                <button type="button" class="btn btn-primary invoice-apply-btn" data-dismiss="modal">
                                                                                    <span>Apply</span>
                                                                                </button>
                                                                                <button type="button" class="btn btn-light-primary ml-1" data-dismiss="modal">
                                                                                    <span>Cancel</span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col p-0">
                                                            <button class="btn btn-light-primary btn-sm"
                                                                data-repeater-create type="button">
                                                                <i class="bx bx-plus"></i>
                                                                <span class="invoice-repeat-btn">Add Item</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- invoice subtotal -->
                                            <hr>
                                            <div class="invoice-subtotal pt-50">
                                                <div class="row">
                                                    <div class="col-md-5 col-12">
                                                        <div class="form-group">
                                                            <h6 class="text-muted mr-75">Apply Discount: </h6>
                                                            <fieldset class="d-flex ">
                                                                <input type="text" name="discount_percentage"
                                                                    id="discount_percentage" class="form-control"
                                                                    placeholder="Enter percentage">
                                                            </fieldset>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="discount_amount"
                                                                id="discount_amount" class="form-control"
                                                                placeholder="Enter Amount">
                                                        </div>

                                                        <div class="form-group">
                                                            <h6 class="text-muted mr-75">Paid Amount: </h6>
                                                            <fieldset class="d-flex ">
                                                                <input type="text" name="paid_amount" id="paid_amount"
                                                                    class="form-control" placeholder="00">
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-7 offset-lg-2 col-12">
                                                        <ul class="list-group list-group-flush">
                                                            <li
                                                                class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                                <span class="invoice-subtotal-title">Subtotal</span>
                                                                <h6 class="invoice-subtotal-value mb-0 subtotal">₹ 00.00
                                                                </h6>
                                                                <input type="hidden" id="subtotal" name="sub_total">
                                                            </li>
                                                            <li class="list-group-item py-0 border-0 mt-25">
                                                                <hr>
                                                            </li>
                                                            <li
                                                                class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                                <span class="invoice-subtotal-title">Discount Amount</span>
                                                                ₹<h6
                                                                    class="invoice-subtotal-value mb-0 amount_discount_value">
                                                                    00</h6>
                                                            </li>

                                                            <li
                                                                class="list-group-item d-flex justify-content-between border-0 py-0">
                                                                <span class="invoice-subtotal-title">Discount
                                                                    Percentage</span>
                                                                ₹<h6
                                                                    class="invoice-subtotal-value mb-0 percentage_discount_value">
                                                                    00</h6>
                                                            </li>

                                                            <li class="list-group-item py-0 border-0 mt-25">
                                                                <hr>
                                                            </li>

                                                            <li
                                                                class="list-group-item d-flex justify-content-between border-0 py-0">
                                                                <span class="invoice-subtotal-title">Total Discount</span>
                                                                <h6
                                                                    class="invoice-subtotal-value mb-0 total_discount_value">
                                                                    - ₹ 00</h6>
                                                                <input type="hidden" id="total_discount" name="total_discount">
                                                            </li>

                                                            <li
                                                                class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                                <span class="invoice-subtotal-title">Invoice Total</span>
                                                                <h6 class="invoice-subtotal-value mb-0 total">₹ 00.00</h6>
                                                                <input type="hidden" name="total" id="total">
                                                            </li>
                                                            <li
                                                                class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                                <span class="invoice-subtotal-title">Paid to date</span>
                                                                <h6 class="invoice-subtotal-value mb-0 paid_amount">- ₹
                                                                    00.00</h6>
                                                            </li>
                                                            <li
                                                                class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                                <span class="invoice-subtotal-title">Remaining
                                                                    Amount</span>
                                                                <h6
                                                                    class="invoice-subtotal-value mb-0 remaining_amount_text">
                                                                    ₹ 00.00</h6>
                                                                <input type="hidden" name="remaining_amount"
                                                                    id="remaining_amount">
                                                            </li>
                                                            <li class="list-group-item border-0 pb-0">
                                                                <button
                                                                    class="btn btn-primary btn-block subtotal-preview-btn"
                                                                    type="submit">Save Payment</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- invoice action  -->
                            <div class="col-xl-3 col-md-4 col-12">
                                <div class="card invoice-action-wrapper shadow-none border">
                                    <div class="card-body">
                                        <div class="invoice-action-btn mb-1">
                                            <button class="btn btn-primary btn-block invoice-send-btn">
                                                <i class="bx bx-send"></i>
                                                <span>Send Invoice</span>
                                            </button>
                                        </div>
                                        <div class="invoice-action-btn mb-1">
                                            <button class="btn btn-light-primary btn-block">
                                                <span>Download Invoice</span>
                                            </button>
                                        </div>
                                        <div class="invoice-action-btn mb-1 d-flex">
                                            <div class="preview w-50 mr-50">
                                                <button class="btn btn-light-primary btn-block">
                                                    <span class="text-nowrap">Preview</span>
                                                </button>
                                            </div>
                                            <div class="save w-50">
                                                <button class="btn btn-light-primary btn-block">
                                                    <span class="text-nowrap">Save</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="invoice-action-btn mb-1">
                                            <button class="btn btn-success btn-block">
                                                <i class='bx bx-dollar'></i>
                                                <span>Add Payment</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="invoice-payment">
                                    <div class="invoice-payment-option mb-2">
                                        <p>Accept payments via</p>
                                        <select name="payment" id="paymentOption" class="form-control bg-transparent">
                                            <option value="DebitCard">Debit Card</option>
                                            <option value="DebitCard">Credit Card</option>
                                            <option value="DebitCard">Paypal</option>
                                            <option value="DebitCard">Internet Banking</option>
                                            <option value="DebitCard">UPI Transfer</option>
                                        </select>
                                    </div>
                                    <div class="invoice-terms">
                                        <div class="d-flex justify-content-between py-50">
                                            <span class="invoice-terms-title">Payment Terms</span>
                                            <div class="custom-control custom-switch custom-switch-glow">
                                                <input type="checkbox" class="custom-control-input" checked
                                                    id="paymentTerm">
                                                <label class="custom-control-label" for="paymentTerm">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between py-50">
                                            <span class="invoice-terms-title">Client Notes</span>
                                            <div class="custom-control custom-switch custom-switch-glow">
                                                <input type="checkbox" class="custom-control-input" checked
                                                    id="clientNote">
                                                <label class="custom-control-label" for="clientNote">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between py-50">
                                            <span class="invoice-terms-title">Payment Stub</span>
                                            <div class="custom-control custom-switch custom-switch-glow">
                                                <input type="checkbox" class="custom-control-input" id="paymentstub">
                                                <label class="custom-control-label" for="paymentstub">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </form>
    <!-- END: Content-->
@endsection

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-left d-inline-block">2020 &copy; PIXINVENT</span><span
            class="float-right d-sm-inline-block d-none">Crafted with<i
                class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase"
                href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i
                class="bx bx-up-arrow-alt"></i></button>
    </p>
</footer>
<!-- END: Footer-->



@section('jqcdn')
    <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.js"></script>

    <script src="/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
    <script src="/app-assets/js/scripts/pages/app-invoice.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        /* set invoice issue date */
        var date = new Date();
        var picker = $('#date').pickadate();
        var calendar = picker.data('pickadate');
        calendar.set('select', date);

        /* set delivery date */
        var deliveryDate = new Date(new Date().getTime() + 10 * 24*60*60*1000);
        var picker = $('#delivery_date').pickadate();
        var calendar = picker.data('pickadate');
        calendar.set('select', deliveryDate);

    </script>
@endsection
