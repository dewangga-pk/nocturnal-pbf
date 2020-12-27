@extends('admin.layouts.app')
@section('title','List of Orders')
@push('style_library')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endpush
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List Of Orders</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{url('/admin')}}">Dashboard</a></div>
                    <div class="breadcrumb-item">Details Orders</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>List of Orders</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-orders">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Order Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>Dewangga Putra Kuswanto</td>
                                        <td>2018-01-20</td>
                                        <td><div class="badge badge-success">Completed</div></td>
                                        <td><a href="{{url('admin/orders/details')}}" class="btn btn-secondary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td>Iqbal Al Mahdi</td>
                                        <td>2018-04-10</td>
                                        <td><div class="badge badge-info">Waiting for payment</div></td>
                                        <td><a href="{{url('admin/orders/details')}}" class="btn btn-secondary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            3
                                        </td>
                                        <td>Wisnu Dewa Saputra</td>
                                        <td>2018-01-29</td>
                                        <td><div class="badge badge-warning">Shipping</div></td>
                                        <td><a href="{{url('admin/orders/details')}}" class="btn btn-secondary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            4
                                        </td>
                                        <td>Dyah Ayuningtyas</td>
                                        <td>2018-01-16</td>
                                        <td><div class="badge badge-danger">Aborted</div></td>
                                        <td><a href="{{url('admin/orders/details')}}" class="btn btn-secondary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            5
                                        </td>
                                        <td>Jhonny Sins</td>
                                        <td>2018-01-16</td>
                                        <td><div class="badge badge-info">To be confirmed</div></td>
                                        <td><a href="{{url('admin/orders/details')}}" class="btn btn-secondary">Detail</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('script_library')
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table-orders').DataTable();
        } );
    </script>
@endpush
