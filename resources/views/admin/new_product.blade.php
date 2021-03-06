@extends('admin.layouts.app')
@section('title','New Product')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>New Product</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{url('/admin')}}">Dashboard</a></div>
                    <div class="breadcrumb-item">New Product</div>
                </div>
            </div>
            <div class="section-body">
                    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h4>Fulfill Your Product Information</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Product Name</label>
                                        <input type="text" class="form-control" id="product-name" name="itemName">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Category</label>
                                        <select class="form-control" id="product-category" name="category">
                                            <option selected disabled>Choose your product category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->category}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Image</label>
                                        <input type="file" class="form-control" id="product-image" name="image">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Stock</label>
                                        <input class="form-control" type="number" name="unit">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Price</label>
                                        <input type="number" class="form-control" id="product-price" name="price">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" id="product-description" name="itemDescription" style="min-height: 120px"></textarea>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
            </div>
        </section>
    </div>
@endsection
