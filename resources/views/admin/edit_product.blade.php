@extends('admin.layouts.app')
@section('title','Edit Product')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Product</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{url('/admin/dashboard')}}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{url('/admin/products')}}">List of Products</a></div>
                    <div class="breadcrumb-item">Edit Product</div>
                </div>
            </div>
            <div class="section-body">
                <form action="{{route('products.update',["product" => $item->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header">
                            <h4>Fulfill Your Product Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Product Name</label>
                                    <input type="text" class="form-control" id="product-name" value="{{$item->item_name}}" name="itemName">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Category</label>
                                    <select class="form-control" id="product-category" name="category">
                                        <option disabled>Choose your product category</option>
                                        @foreach($categories as $category)
                                            @if($category->category == $item->category->category)
                                                <option value="{{$category->id}}" selected>{{$category->category}}</option>
                                            @else
                                                <option value="{{$category->id}}">{{$category->category}}</option>
                                            @endif
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
                                    <input type="number" class="form-control" id="product-price" value="{{$item->unit}}" name="unit">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Price</label>
                                    <input type="number" class="form-control" id="product-price" value="{{$item->price}}" name="price">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" id="product-description" style="min-height: 120px" name="itemDescription">{{$item->item_description}}</textarea>
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
