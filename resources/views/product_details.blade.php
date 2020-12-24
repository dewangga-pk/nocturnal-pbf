@extends('layouts.app')
@section('title','Product Details')
@push('style')
    <link rel="stylesheet" href="{{asset('css/custom/product-details-2.css')}}">
@endpush
@section('content')
    <section class="product-part">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="preview-slider slider-arrow">
                        <img src="{{asset('img/product/01.png')}}" alt="product-1">
                        <img src="{{asset('img/product/02.png')}}" alt="product-2">
                        <img src="{{asset('img/product/03.png')}}" alt="product-3">
                        <img src="{{asset('img/product/04.png')}}" alt="product-4">
                        <img src="{{asset('img/product/05.png')}}" alt="product-5">
                        <img src="{{asset('img/product/06.png')}}" alt="product-6">
                        <img src="{{asset('img/product/07.png')}}" alt="product-7">
                    </div>
                    <div class="thumb-slider">
                        <img src="{{asset('img/product/01.png')}}" alt="product-1">
                        <img src="{{asset('img/product/02.png')}}" alt="product-2">
                        <img src="{{asset('img/product/03.png')}}" alt="product-3">
                        <img src="{{asset('img/product/04.png')}}" alt="product-4">
                        <img src="{{asset('img/product/05.png')}}" alt="product-5">
                        <img src="{{asset('img/product/06.png')}}" alt="product-6">
                        <img src="{{asset('img/product/07.png')}}" alt="product-7">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="product-name">
                        <h3>Organic Heirloom Quinoa</h3>
                    </div>
                    <div class="product-review">
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><a href="#">(2 Reviews)</a></li>
                        </ul>
                    </div>
                    <div class="product-price">
                        <p><del>$38</del>$129</p>
                    </div>
                    <div class="product-summery">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut
                            labore et. Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor.</p>
                    </div>
                    <div class="product-cart">
                        <ul>
                            <li><input type="number" placeholder="0"></li>
                            <li><a href="#" class="btn btn-outline"><i class="fas fa-shopping-basket"></i><span>add to
                                        cart</span></a></li>
                            <li><a href="#" class="icon icon-outline"><i class="fas fa-heart"></i></a></li>
                            <li><a href="#" class="icon icon-outline"><i class="fas fa-exchange-alt"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-payment">
                        <h5>Payment:</h5>
                        <ul>
                            <li><a href="#"><img src="{{asset('img/pay-card/01.jpg')}}" alt="payment-1"></a></li>
                            <li><a href="#"><img src="{{asset('img/pay-card/02.jpg')}}" alt="payment-2"></a></li>
                            <li><a href="#"><img src="{{asset('img/pay-card/03.jpg')}}" alt="payment-3"></a></li>
                            <li><a href="#"><img src="{{asset('img/pay-card/04.jpg')}}" alt="payment-4"></a></li>
                        </ul>
                    </div>
                    <div class="product-share">
                        <h5>Share:</h5>
                        <ul>
                            <li><a class="icon icon-inline" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="icon icon-inline" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="icon icon-inline" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a class="icon icon-inline" href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="icon icon-inline" href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-contact">
                        <p>Have any inquery about this product (SKU:0X2E615)</p>
                        <h4><i class="fas fa-phone-alt"></i>09638111666</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-tab-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-tab-menu">
                        <ul class="nav nav-tabs">
                            <li><a href="#review" class="nav-link active" data-toggle="tab">reviews (2)</a></li>
                            <li><a href="#specific" class="nav-link" data-toggle="tab">specification</a></li>
                            <li><a href="#descrip" class="nav-link" data-toggle="tab">description</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane active" id="review">
                        <ul class="review-list">
                            <li class="review-item">
                                <div class="review-author"><a href="#"><img src="{{asset('img/review/01.jpg')}}" alt="reviewer-1"></a></div>
                                <div class="review-content">
                                    <h5><a href="#">Miron Mahmud</a>- <span>June 02, 2020</span></h5>
                                    <ul>
                                        <li><i class="fas fa-star active"></i></li>
                                        <li><i class="fas fa-star active"></i></li>
                                        <li><i class="fas fa-star active"></i></li>
                                        <li><i class="fas fa-star active"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>This Product proves why The Woo are the best brand ever. Best vegan ever!</p>
                                </div>
                            </li>
                            <li class="review-item">
                                <div class="review-author"><a href="#"><img src="{{asset('img/review/02.jpg')}}" alt="reviewer-2"></a></div>
                                <div class="review-content">
                                    <h5><a href="#">Labonno Khan</a>- <span>June 02, 2020</span></h5>
                                    <ul>
                                        <li><i class="fas fa-star active"></i></li>
                                        <li><i class="fas fa-star active"></i></li>
                                        <li><i class="fas fa-star active"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>This Product proves why The Woo are the best brand ever. Best vegan ever!</p>
                                </div>
                            </li>
                        </ul>
                        <form class="row">
                            <div class="col-lg-12">
                                <div class="form-heading">
                                    <h3>Leave Your Qoute</h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="text" class="form-control" placeholder="Your name"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><input type="email" class="form-control" placeholder="Your email"></div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group"><textarea class="form-control" placeholder="Your quote"></textarea></div>
                            </div>
                            <div class="col-lg-12">
                                <div class="star-rating"><input type="radio" name="rating" id="star-1">
                                    <label for="star-1"></label><input type="radio" name="rating" id="star-2">
                                    <label for="star-2"></label><input type="radio" name="rating" id="star-3">
                                    <label for="star-3"></label><input type="radio" name="rating" id="star-4">
                                    <label for="star-4"></label><input type="radio" name="rating" id="star-5">
                                    <label for="star-5"></label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-btn">
                                    <button class="btn btn-outline">
                                        <i class="fas fa-paper-plane"></i>
                                        <span>send quote</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="specific">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th scope="row">Product code</th>
                                <td>SKU:101783</td>
                            </tr>
                            <tr>
                                <th scope="row">Weight</th>
                                <td>1kg, 2kg</td>
                            </tr>
                            <tr>
                                <th scope="row">Styles</th>
                                <td>@Girly</td>
                            </tr>
                            <tr>
                                <th scope="row">Properties</th>
                                <td>Short Dress</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="descrip">
                        <div class="product-tab-desc">
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                here', making it look like readable English. Many desktop publishing packages and web
                                page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                ipsum' will uncover many web sites still in their infancy. Various versions have evolved
                                over the years, sometimes by accident, sometimes on purpose (injected humour and the
                                like).
                                <span>
                                    There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration in some form, by injected humour, or randomised
                                    words which don't look even slightly believable. If you are going to use a passage
                                    of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                    middle of text.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section related-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 class="title">Related products</h2>
                        <a href="#" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            show more
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-slider slider-arrow">
                        <div class="product-card">
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
                        <div class="product-card">
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
                        <div class="product-card">
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
                        <div class="product-card">
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
                        <div class="product-card">
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
                        <div class="product-card">
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
                </div>
            </div>
        </div>
    </section>
    <section class="new-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 class="title">New arrival products</h2><a href="#" class="btn btn-outline"><i class="fas fa-eye"></i>show more</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-slider slider-arrow">
                        <div class="product-card">
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
                        <div class="product-card">
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
                        <div class="product-card">
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
                        <div class="product-card">
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
                        <div class="product-card">
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
                        <div class="product-card">
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
                </div>
            </div>
        </div>
    </section>
@endsection
