@extends('admin.layouts.app')
@section('title','Invoice')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Details Orders</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{url('/admin')}}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{url('/admin/orders')}}">List Of Orders</a></div>
                    <div class="breadcrumb-item">Details Orders</div>
                </div>
            </div>
            <div class="section-body">
                <div class="invoice">
                    <div class="invoice-print">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="invoice-title">
                                    <h2>Invoice</h2>
                                    <div class="invoice-number">Order #12345</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <address>
                                            <strong>Billed To:</strong><br>
                                            Mitra<br>
                                            Desa/Kecamatan,Kode POS<br>
                                            Kab Jember<br>
                                            Jawa Timur, Indonesia
                                        </address>
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <address>
                                            <strong>Shipped To:</strong><br>
                                            Iqbal Al Mahdi<br>
                                            Desa/Kecamatan,Kode POS<br>
                                            Kab Jember<br>
                                            Jawa Timur, Indonesia
                                        </address>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <address>
                                            <strong>Payment Method:</strong><br>
                                            Direct Transfer BCA<br>
                                            111-111-111-111
                                        </address>
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <address>
                                            <strong>Order Date:</strong><br>
                                            September 19, 2018<br><br>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="section-title">Order Summary</div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-md">
                                        <tr>
                                            <th data-width="40">#</th>
                                            <th>Item</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-right">Totals</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Pipa Lubang 8</td>
                                            <td class="text-center">Rp 120.000</td>
                                            <td class="text-center">1</td>
                                            <td class="text-right">Rp 120.000</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Biji Selada</td>
                                            <td class="text-center">Rp 12.000</td>
                                            <td class="text-center">3</td>
                                            <td class="text-right">Rp 36.000</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Biji Sawi</td>
                                            <td class="text-center">Rp 9.000</td>
                                            <td class="text-center">5</td>
                                            <td class="text-right">Rp 45.000</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-8">
                                        <div class="section-title">Payment Proof</div>
                                        <p class="section-lead">The payment transfer proof</p>
                                        <img src="{{asset('img/example-transfer.jpg')}}" alt="example-transfer" class="img-thumbnail" style="max-width: 300px">
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <div class="invoice-detail-item">
                                            <div class="invoice-detail-name">Subtotal</div>
                                            <div class="invoice-detail-value">Rp 201.000</div>
                                        </div>
                                        <div class="invoice-detail-item">
                                            <div class="invoice-detail-name">Shipping</div>
                                            <div class="invoice-detail-value">Rp 35.000</div>
                                        </div>
                                        <hr class="mt-2 mb-2">
                                        <div class="invoice-detail-item">
                                            <div class="invoice-detail-name">Total</div>
                                            <div class="invoice-detail-value invoice-detail-value-lg">Rp 236.000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="text-md-right">
                        <div class="float-lg-left mb-lg-0 mb-3">
                            <button class="btn btn-primary btn-icon icon-left"><i class="fas fa-credit-card"></i> Process Payment</button>
                            <button class="btn btn-warning btn-icon icon-left" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-shipping-fast"></i> Add Shipping Code</button>
                            <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Decline Orders</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
{{--    MODAL SHIPPING CODE--}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Shipping Code</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Shipping Code</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-shipping-fast"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="shipping code" name="shipping-code" id="shipping-code">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{{--    END MODAL SHIPPING CODE--}}
@endsection
