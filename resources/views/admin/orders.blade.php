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
                    <div class="breadcrumb-item active"><a href="{{url('/admin/dashboard')}}">Dashboard</a></div>
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
                                    @foreach($transactions as $transaction)
                                        <tr>
                                            <td>
                                                {{$transaction->invoice}}
                                            </td>
                                            <td>{{$transaction->user->name}}</td>
                                            <td>{{$transaction->created_at}}</td>
                                            <td>
                                                @if($transaction->status == 4)
                                                    <div class="badge badge-success">Completed</div>
                                                @elseif($transaction->status == 1)
                                                    <div class="badge badge-info">Waiting for verification</div>
                                                @elseif($transaction->status == 2)
                                                    <div class="badge badge-warning">On Process</div>
                                                @elseif($transaction->status == 3)
                                                    <div class="badge badge-warning">On the way</div>
                                                @endif
                                            </td>
                                            <td><a href="{{route('orders.show',["order" => $transaction->id])}}" class="btn btn-secondary">Detail</a></td>
                                        </tr>
                                    @endforeach
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
