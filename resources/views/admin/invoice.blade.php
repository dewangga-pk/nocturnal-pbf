@extends('admin.layouts.app')
@section('title','Invoice')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List Of Orders</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{url('/admin')}}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{url('/admin/orders')}}">List Orders</a></div>
                    <div class="breadcrumb-item">Invoice</div>
                </div>
            </div>
        </section>
    </div>
@endsection
