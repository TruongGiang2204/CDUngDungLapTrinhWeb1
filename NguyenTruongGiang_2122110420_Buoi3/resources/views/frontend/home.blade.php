@extends('layouts.site')
@section('title','home')
@section('content')
<div>
    <main class="maincontent">
        <section class="slider">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/slider_lg_1.webp')}}" alt="Los Angeles" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slider_lg_2.webp')}}" alt="Chicago" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slider_lg_3.webp')}}" alt="New York" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </section>
        
        <section class="product category">
            <div class="container text-center py-5">
                <h1 class="display-4 mb-3">SẢN PHẨM ACCESSORIES - PHỤ TRANG</h1>
                <h2 class="mb-5">MẮT KÍNH</h2>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/1.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Mono Leather Low Top</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.500.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.250.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/2.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body"> 
                                <h5 class="card-title">Chuck Taylor All Star Classic R</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.500.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.309.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/3.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Mule Recycled Canvas</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.930.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.800.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/4.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Chuck Taylor All Star Classic R</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.659.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.359.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/5.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Chuck Taylor All Star Classic B</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.659.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.359.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/6.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Archive Paint Splatter</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.800.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.800.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/7.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Valentine's Day</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.899.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.789.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/8.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Mi Gente</h5>
                                <p class="card-text">
                                    <del class="text-muted">2.190.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.890.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="mb-5">THẮT LƯNG</h2>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <img src="{{ asset('images/1.webp')}}" class="card-img-top" alt="Product Image">
                                <div class="card-body">
                                    <h5 class="card-title">Converse Chuck Taylor All Star Mono Leather Low Top</h5>
                                    <p class="card-text">
                                        <del class="text-muted">1.500.000đ</del>
                                        <span class="text-danger font-weight-bold ml-2">1.250.000đ</span>
                                    </p>
                                    <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <img src="{{ asset('images/2.webp')}}" class="card-img-top" alt="Product Image">
                                <div class="card-body">
                                    <h5 class="card-title">Chuck Taylor All Star Classic R</h5>
                                    <p class="card-text">
                                        <del class="text-muted">1.500.000đ</del>
                                        <span class="text-danger font-weight-bold ml-2">1.309.000đ</span>
                                    </p>
                                    <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <img src="{{ asset('images/3.webp')}}" class="card-img-top" alt="Product Image">
                                <div class="card-body">
                                    <h5 class="card-title">Converse Chuck Taylor All Star Mule Recycled Canvas</h5>
                                    <p class="card-text">
                                        <del class="text-muted">1.930.000đ</del>
                                        <span class="text-danger font-weight-bold ml-2">1.800.000đ</span>
                                    </p>
                                    <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <img src="{{ asset('images/4.webp')}}" class="card-img-top" alt="Product Image">
                                <div class="card-body">
                                    <h5 class="card-title">Chuck Taylor All Star Classic R</h5>
                                    <p class="card-text">
                                        <del class="text-muted">1.659.000đ</del>
                                        <span class="text-danger font-weight-bold ml-2">1.359.000đ</span>
                                    </p>
                                    <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/5.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Chuck Taylor All Star Classic B</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.659.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.359.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/6.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Archive Paint Splatter</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.800.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.800.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/7.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Valentine's Day</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.899.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.789.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/8.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Mi Gente R</h5>
                                <p class="card-text">
                                    <del class="text-muted">2.190.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.890.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
            <div class="container text-center py-5">
                <h1 class="display-4 mb-3">SẢN PHẨM CLASSIC</h1>
                <h2 class="mb-5">GIÀY</h2>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/1.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Mono Leather Low Top</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.500.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.250.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/2.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Chuck Taylor All Star Classic C</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.500.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.309.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/3.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Mule Recycled Canvas</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.930.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.800.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/4.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Chuck Taylor All Star Classic R</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.659.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.359.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/5.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Chuck Taylor All Star Classic B</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.659.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.359.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/6.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Archive Paint Splatter</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.800.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.800.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/7.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Valentine's Day</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.899.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.789.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/8.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Mi Gente</h5>
                                <p class="card-text">
                                    <del class="text-muted">2.190.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.890.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="mb-5">TÚI XÁCH</h2>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <img src="{{ asset('images/1.webp')}}" class="card-img-top" alt="Product Image">
                                <div class="card-body">
                                    <h5 class="card-title">Converse Chuck Taylor All Star Mono Leather Low Top</h5>
                                    <p class="card-text">
                                        <del class="text-muted">1.500.000đ</del>
                                        <span class="text-danger font-weight-bold ml-2">1.250.000đ</span>
                                    </p>
                                    <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <img src="{{ asset('images/2.webp')}}" class="card-img-top" alt="Product Image">
                                <div class="card-body">
                                    <h5 class="card-title">Chuck Taylor All Star Classic R</h5>
                                    <p class="card-text">
                                        <del class="text-muted">1.500.000đ</del>
                                        <span class="text-danger font-weight-bold ml-2">1.309.000đ</span>
                                    </p>
                                    <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <img src="{{ asset('images/3.webp')}}" class="card-img-top" alt="Product Image">
                                <div class="card-body">
                                    <h5 class="card-title">Converse Chuck Taylor All Star Mule Recycled Canvas</h5>
                                    <p class="card-text">
                                        <del class="text-muted">1.930.000đ</del>
                                        <span class="text-danger font-weight-bold ml-2">1.800.000đ</span>
                                    </p>
                                    <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card">
                                <img src="{{ asset('images/4.webp')}}" class="card-img-top" alt="Product Image">
                                <div class="card-body">
                                    <h5 class="card-title">Chuck Taylor All Star Classic R</h5>
                                    <p class="card-text">
                                        <del class="text-muted">1.659.000đ</del>
                                        <span class="text-danger font-weight-bold ml-2">1.359.000đ</span>
                                    </p>
                                    <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/5.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Chuck Taylor All Star Classic B</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.659.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.359.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/6.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Archive Paint Splatter</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.800.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.800.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/7.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Valentine's Day</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.899.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.789.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/8.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Mi Gente</h5>
                                <p class="card-text">
                                    <del class="text-muted">2.190.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.890.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
        </section>
        <section class="product new">
            <div class="container text-center py-5">
                <h1 class="display-4 mb-3">SẢN PHẨM MỚI</h1>
                <h2 class="mb-5">ƯU ĐÃI MỚI</h2>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/9.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Rivals</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.880.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.830.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/10.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Specialty Suede</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.890.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.760.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/11.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck 70 Voltage Made it to The Top</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.800.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.600.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/12.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Chuck Taylor All Star Classic R</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.659.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.359.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/13.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Double Upper Logo</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.600.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.280.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/14.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Pro Leather Gold Standard OG Color Blocking</h5>
                                <p class="card-text">
                                    <del class="text-muted">2.590.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">2.100.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/15.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Chuck Taylor All Star II Festival Knit</h5>
                                <p class="card-text">
                                    <del class="text-muted">780.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">600.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/16.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Graphic Single Hidden</h5>
                                <p class="card-text">
                                    <del class="text-muted">20.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">10.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </section>
        <section class="product sale">
            <div class="container text-center py-5">
                <h1 class="display-4 mb-3">SẢN PHẨM KHUYẾN MÃI</h1>
                <h2 class="mb-5">ƯU ĐÃI GIẢM 50%</h2>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/9.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star RivalsRivalsRivals</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.880.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.830.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/10.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Specialty Suede</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.890.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.760.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/11.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck 70 Voltage Made it to The Top</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.800.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.600.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/12.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Chuck Taylor All Star Classic R</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.659.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.359.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/13.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Chuck Taylor All Star Double Upper Logo</h5>
                                <p class="card-text">
                                    <del class="text-muted">1.600.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">1.280.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/14.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Pro Leather Gold Standard OG Color Blocking</h5>
                                <p class="card-text">
                                    <del class="text-muted">2.590.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">2.100.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/15.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Chuck Taylor All Star II Festival Knit</h5>
                                <p class="card-text">
                                    <del class="text-muted">780.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">600.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/16.webp')}}" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Converse Graphic Single Hidden</h5>
                                <p class="card-text">
                                    <del class="text-muted">20.000đ</del>
                                    <span class="text-danger font-weight-bold ml-2">10.000đ</span>
                                </p>
                                <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            
        </section>
        <section class="post new">
            <div class="container">
                <div class="row">
                    <div class="new-post" style="width:400px; margin-left: 40px;">
                        <img class="card-img-top" src="{{ asset('images/post1.webp')}}">
                        <div class="article-item-bottom">
                            <h3>TRẢI NGHIỆM CON ĐƯỜNG MÀU SẮC ĐẦY HOA DÀI VÔ TẬN CỦA CONVERSE PRIDE</a></h3>
                            <span>
                                <i class="far fa-calendar-alt fa-fw"></i> 04.11.2021
                            </span>
                            <span>
                                 Công Ty TNHH KTCN F1GENZ
                            </span>
                            <p>
                                Chuck Taylor Classic là dòng giày truyền thống của Converse được giữ đúng với nguyên bản ban đầu. Từ lúc xuất hiện cho đến nay dòng Classic vẫn nhận được sự quan tâm của nhiều khách hàng trên thế giới.
                            </p>				
                        </div>
                      </div>
                    <div class="new-post" style="width:400px; margin-left: 20px;">
                        <img class="card-img-top" src="{{ asset('images/post2.webp')}}" alt="Card image">
                        <div>
                            <div>
                                <h3>CONVERSE X KIM JONES</a></h3>
                                <span>
                                    <i class="far fa-calendar-alt fa-fw"></i> 04.11.2021
                                </span>
                                <span>
                                     Công Ty TNHH KTCN F1GENZ
                                </span>
                                <p>
                                    Chuck Taylor Classic là dòng giày truyền thống của Converse được giữ đúng với nguyên bản ban đầu. Từ lúc xuất hiện cho đến nay dòng Classic vẫn nhận được sự quan tâm của nhiều khách hàng trên thế giới.
                                    Chuck Taylor Classic có thiết kế giống như dòng Converse All Star được cho ra mắt...
                                </p>				
                            </div>		
                        </div>
                    </div>
                    <div class="new-post" style="width:400px; margin-left: 20px;">
                        <img class="card-img-top" src="{{ asset('images/post3.webp')}}" alt="Card image">
                        <div>
                            <div>
                                <h3>CONVERSE X KIM JONES</a></h3>
                                <span>
                                    <i class="far fa-calendar-alt fa-fw"></i> 04.11.2021
                                </span>
                                <span>
                                      Công Ty TNHH KTCN F1GENZ
                                </span>
                                <p>
                                    Chuck Taylor Classic là dòng giày truyền thống của Converse được giữ đúng với nguyên bản ban đầu. Từ lúc xuất hiện cho đến nay dòng Classic vẫn nhận được sự quan tâm của nhiều khách hàng trên thế giới.
                                </p>				
                            </div>		
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
@endsection