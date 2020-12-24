@extends('layouts.app')
@section('title','Shop')
@push('style')
    <link rel="stylesheet" href="{{asset('css/custom/product-list-3.css')}}">
@endpush
@section('content')
    <section class="product-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-filter">
                                <div class="product-page-number">
                                    <p>Showing 1–9 of 130 results</p>
                                </div><select class="product-short-select custom-select">
                                    <option selected>Short by Best Sell</option>
                                    <option value="1">Short by New Item</option>
                                    <option value="2">Short by Popularity</option>
                                    <option value="3">Short by Average review</option>
                                </select>
                                <ul class="product-card-type">
                                    <li class="grid-verti active"><i class="fas fa-grip-vertical"></i></li>
                                    <li class="grid-hori"><i class="fas fa-grip-horizontal"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row product-card-parent">
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img src="{{asset('img/product/01.png')}}" alt="product-1">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Heirloom Quinoa</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del>$150</h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img src="{{asset('img/product/02.png')}}" alt="product-2">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Heirloom Quinoa</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del>$150</h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img src="{{asset('img/product/03.png')}}" alt="product-3">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Heirloom Quinoa</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del>$150</h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img src="{{asset('img/product/04.png')}}" alt="product-4">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Heirloom Quinoa</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del>$150</h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img src="{{asset('img/product/05.png')}}" alt="product-5">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Heirloom Quinoa</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del>$150</h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img src="{{asset('img/product/06.png')}}" alt="product-6">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Heirloom Quinoa</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del>$150</h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img src="{{asset('img/product/07.png')}}" alt="product-7">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Heirloom Quinoa</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del>$150</h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img src="{{asset('img/product/08.png')}}" alt="product-8">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Heirloom Quinoa</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del>$150</h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img src="{{asset('img/product/09.png')}}" alt="product-9">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Heirloom Quinoa</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del>$150</h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img src="{{asset('img/product/10.png')}}" alt="product-10">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Heirloom Quinoa</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del>$150</h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img src="{{asset('img/product/11.png')}}" alt="product-11">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Heirloom Quinoa</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del>$150</h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img src="{{asset('img/product/12.png')}}" alt="product-12">
                                    <ul class="product-widget">
                                        <li><button><i class="fas fa-eye"></i></button></li>
                                        <li><button><i class="fas fa-heart"></i></button></li>
                                        <li><button><i class="fas fa-exchange-alt"></i></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a href="#">Heirloom Quinoa</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6><del>$80</del>$150</h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="pagination ">
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="fas fa-long-arrow-alt-left"></i></a></li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">...</li>
                                <li class="page-item"><a class="page-link" href="#">67</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="fas fa-long-arrow-alt-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="product-ad">
                                <a href="#"><img src="{{asset('img/ad-banner/01.jpg')}}" alt="ad"></a>
                            </div>
                            <div class="product-bar">
                                <h6>Filter by Price</h6>
                                <input type="text" id="amount" readonly>
                                <div id="slider-range"></div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-bar">
                                <h6>Filter by brand</h6>
                                <div class="product-bar-content">
                                    <input type="text" placeholder="Search">
                                    <ul class="scroll-list">
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check1">
                                                <label class="custom-control-label" for="check1">mari gold</label>
                                            </div>
                                            <span class="product-cate-number">(13)</span>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check2">
                                                <label class="custom-control-label" for="check2">lilly's</label>
                                            </div>
                                            <span class="product-cate-number">(28)</span>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check3">
                                                <label class="custom-control-label" for="check3">diamond</label>
                                            </div>
                                            <span class="product-cate-number">(35)</span>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check4">
                                                <label class="custom-control-label" for="check4">keya</label>
                                            </div>
                                            <span class="product-cate-number">(47)</span>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check5">
                                                <label class="custom-control-label" for="check5">tredar</label>
                                            </div>
                                            <span class="product-cate-number">(59)</span>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check6">
                                                <label class="custom-control-label" for="check6">fremant</label>
                                            </div>
                                            <span class="product-cate-number">(64)</span>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check7">
                                                <label class="custom-control-label" for="check7">Avocados</label>
                                            </div>
                                            <span class="product-cate-number">(19)</span>
                                        </li>
                                    </ul>
                                    <button class="clear-filter-btn">
                                        <i class="fas fa-broom"></i>
                                        <span>Clear Filter</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-bar">
                                <h6>Filter by tags</h6>
                                <div class="product-bar-content"><input type="text" placeholder="Search">
                                    <ul class="scroll-list">
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check8">
                                                <label class="custom-control-label" for="check8">Alcohol-Free</label>
                                            </div>
                                            <span class="product-cate-number">(13)</span>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check9">
                                                <label class="custom-control-label" for="check9">Biodegradable</label>
                                            </div>
                                            <span class="product-cate-number">(28)</span>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check10">
                                                <label class="custom-control-label" for="check10">Caffeine Free</label>
                                            </div>
                                            <span class="product-cate-number">(35)</span>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check11">
                                                <label class="custom-control-label" for="check11">Dye-Free</label>
                                            </div>
                                            <span class="product-cate-number">(47)</span>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check12">
                                                <label class="custom-control-label" for="check12">Eco-Friendly</label>
                                            </div><span class="product-cate-number">(59)</span>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check13">
                                                <label class="custom-control-label" for="check13">Gelatin-Free</label>
                                            </div><span class="product-cate-number">(64)</span>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="check14">
                                                <label class="custom-control-label" for="check14">High Fiber</label></div>
                                            <span class="product-cate-number">(19)</span>
                                        </li>
                                    </ul>
                                    <button class="clear-filter-btn">
                                        <i class="fas fa-broom"></i>
                                        <span>Clear Filter</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="product-bar">
                                <h6>Filter by Categories</h6>
                                <div class="product-bar-content"><input type="text" placeholder="Search">
                                    <ul class="nasted-dropdown">
                                        <li><a href="#"><span>Vegan Bekary</span><i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="#">Demo item (0)</a></li>
                                                <li><a href="#">Demo item (0)</a></li>
                                                <li><a href="#">Demo item (0)</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><span>Pasta</span><i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="#">Demo item (0)</a></li>
                                                <li><a href="#">Demo item (0)</a></li>
                                                <li><a href="#">Demo item (0)</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><span>Noodles</span><i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="#">Demo item (0)</a></li>
                                                <li><a href="#">Demo item (0)</a></li>
                                                <li><a href="#">Demo item (0)</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><span>cookies</span><i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="#">Demo item (0)</a></li>
                                                <li><a href="#">Demo item (0)</a></li>
                                                <li><a href="#">Demo item (0)</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><span>desserts</span><i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="#">Demo item (0)</a></li>
                                                <li><a href="#">Demo item (0)</a></li>
                                                <li><a href="#">Demo item (0)</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><span>Ice cream</span><i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="#">Demo item (0)</a></li>
                                                <li><a href="#">Demo item (0)</a></li>
                                                <li><a href="#">Demo item (0)</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><span>Condiments</span><i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="#">Demo item (0)</a></li>
                                                <li><a href="#">Demo item (0)</a></li>
                                                <li><a href="#">Demo item (0)</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><span>Organic</span><i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="#">Demo item (0)</a></li>
                                                <li><a href="#">Demo item (0)</a></li>
                                                <li><a href="#">Demo item (0)</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><span>Ketogenic</span><i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="#">Demo item (0)</a></li>
                                                <li><a href="#">Demo item (0)</a></li>
                                                <li><a href="#">Demo item (0)</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><span>Raw Foods</span><i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="#">Demo item (0)</a></li>
                                                <li><a href="#">Demo item (0)</a></li>
                                                <li><a href="#">Demo item (0)</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><span>Gluten-Free</span><i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="#">Demo item (0)</a></li>
                                                <li><a href="#">Demo item (0)</a></li>
                                                <li><a href="#">Demo item (0)</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <button class="clear-filter-btn"><i class="fas fa-broom"></i>
                                        <span>Clear Filter</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
