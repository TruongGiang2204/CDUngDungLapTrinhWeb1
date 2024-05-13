@extends('layouts.site')
@section('title','product')
@section('content')
<div>
    <main class="content">
        <section class="slider" style="background-image: url({{asset('images/slider_lg_1.webp')}}); height: 200px;">
        <h3 style="padding: 70px 0 0 320px;">TẤT CẢ SẢN PHẨM</h3>
        <ul class="breadcrumb" style="padding-left: 320px">
            <li class="breadcrumb-item" ><a href="#" style="text-decoration: none; color:black;">Trang chủ</a></li>
            <li class="breadcrumb-item active" style="color:black;">Tất cả sản phẩm</li>
          </ul>
        </section>
        <section class="product">
            <div class="row py-5" style="padding-left: 50px;">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="shop-filter-wrap shop-filter-mobile">
                        <div class="shop-filter" data-type="vendor">
                            <h4>Thương hiệu sản phẩm</h4>
                            <div class="shop-filter-list">
                                <div class="shop-filter-item">
                                    <input type="checkbox" id="shop-filter-vendor1" data-group="vendor" data-field="vendor" data-text="Converse" value="(Converse)" data-operator="OR">
                                    <label for="shop-filter-vendor1">Converse</label>
                                </div>
                            </div>
                        </div>
                        <div class="shop-filter" data-type="type">
                            <h4>Loại sản phẩm</h4>
                            <div class="shop-filter-list">
                                <div class="shop-filter-item">
                                    <input type="checkbox" id="shop-filter-type1" data-group="type" data-field="product_type" data-text="Giày cổ cao" value="(Giày cổ cao)" data-operator="OR">
                                    <label for="shop-filter-type1">Giày cổ cao</label>
                                </div>
                                <div class="shop-filter-item">
                                    <input type="checkbox" id="shop-filter-type2" data-group="type" data-field="product_type" data-text="Giày cổ thấp" value="(Giày cổ thấp)" data-operator="OR">
                                    <label for="shop-filter-type2">Giày cổ thấp</label>
                                </div>
                                <div class="shop-filter-item">
                                    <input type="checkbox" id="shop-filter-type3" data-group="type" data-field="product_type" data-text="Socks" value="(Socks)" data-operator="OR">
                                    <label for="shop-filter-type3">Socks</label>
                                </div>
                            </div>
                        </div>
                        <div class="shop-filter" data-type="variant1">
                            <h4>Kích thước</h4>
                            <div class="shop-filter-list">
                                <div class="shop-filter-item">
                                    <input type="checkbox" id="shop-filter-tag-item11" data-group="tag1" data-text="33x40cm" data-field="tags" value="(33x40cm)" data-operator="OR">
                                    <label for="shop-filter-tag-item11">33x40cm</label>
                                </div>
                                <div class="shop-filter-item">
                                    <input type="checkbox" id="shop-filter-tag-item12" data-group="tag1" data-text="40x30cm" data-field="tags" value="(40x30cm)" data-operator="OR">
                                    <label for="shop-filter-tag-item12">40x30cm</label>
                                </div>
                                <div class="shop-filter-item">
                                    <input type="checkbox" id="shop-filter-tag-item13" data-group="tag1" data-text="100x30cm" data-field="tags" value="(100x30cm)" data-operator="OR">
                                    <label for="shop-filter-tag-item13">100x30cm</label>
                                </div>
                                <div class="shop-filter-item">
                                    <input type="checkbox" id="shop-filter-tag-item14" data-group="tag1" data-text="50x30cm" data-field="tags" value="(50x30cm)" data-operator="OR">
                                    <label for="shop-filter-tag-item14">50x30cm</label>
                                </div>
                            </div>
                        </div>
                        <div class="shop-filter" data-type="variant3">
                            <h4>Màu sắc</h4>
                            <div class="shop-filter-list color">
                                <div class="shop-filter-item color xanh">
                                    <input type="checkbox" id="shop-filter-tag-item31" data-group="tag3" data-field="tags" data-text="Xanh" value="(Xanh)" data-operator="OR">
                                    <label for="shop-filter-tag-item31" title="Xanh">Xanh</label>
                                </div>
                                <div class="shop-filter-item color do">
                                    <input type="checkbox" id="shop-filter-tag-item32" data-group="tag3" data-field="tags" data-text="Đỏ" value="(Đỏ)" data-operator="OR">
                                    <label for="shop-filter-tag-item32" title="Đỏ">Đỏ</label>
                                </div>
                                <div class="shop-filter-item color den">
                                    <input type="checkbox" id="shop-filter-tag-item33" data-group="tag3" data-field="tags" data-text="Đen" value="(Đen)" data-operator="OR">
                                    <label for="shop-filter-tag-item33" title="Đen">Đen</label>
                                </div>
                                <div class="shop-filter-item color tim">
                                    <input type="checkbox" id="shop-filter-tag-item34" data-group="tag3" data-field="tags" data-text="Tím" value="(Tím)" data-operator="OR">
                                    <label for="shop-filter-tag-item34" title="Tím">Tím</label>
                                </div>
                                <div class="shop-filter-item color vang">
                                    <input type="checkbox" id="shop-filter-tag-item35" data-group="tag3" data-field="tags" data-text="Vàng" value="(Vàng)" data-operator="OR">
                                    <label for="shop-filter-tag-item35" title="Vàng">Vàng</label>
                                </div>
                            </div>
                        </div>
                    
                        <div class="shop-filter" data-type="price">
                            <h4>Giá sản phẩm</h4>
                            <div class="shop-filter-list">
                                <div class="shop-filter-item">
                                    <input type="checkbox" id="shop-filter-price-item1" data-group="price" data-field="price_min" data-text="Dưới 1.000.000₫" value="(<1000000)" data-operator="OR">
                                    <label for="shop-filter-price-item1" title="Dưới 1.000.000₫">Dưới 1.000.000₫</label>
                                </div>
                                <div class="shop-filter-item">
                                    <input type="checkbox" id="shop-filter-price-item2" data-group="price" data-field="price_min" data-text="Từ 1.000.000₫ - 3.000.000₫" value="(>=1000000 AND <=3000000)" data-operator="OR">
                                    <label for="shop-filter-price-item2" title="Từ 1.000.000₫ - 3.000.000₫">Từ 1.000.000₫ - 3.000.000₫</label>
                                </div>
                                <div class="shop-filter-item">
                                    <input type="checkbox" id="shop-filter-price-item3" data-group="price" data-field="price_min" data-text="Từ 3.000.000₫ - 5.000.000₫" value="(>=3000000 AND <=5000000)" data-operator="OR">
                                    <label for="shop-filter-price-item3" title="Từ 3.000.000₫ - 5.000.000₫">Từ 3.000.000₫ - 5.000.000₫</label>
                                </div>
                                <div class="shop-filter-item">
                                    <input type="checkbox" id="shop-filter-price-item4" data-group="price" data-field="price_min" data-text="Từ 5.000.000₫ - 10.000.000₫" value="(>=5000000 AND <=10000000)" data-operator="OR">
                                    <label for="shop-filter-price-item4" title="Từ 5.000.000₫ - 10.000.000₫">Từ 5.000.000₫ - 10.000.000₫</label>
                                </div>
                                <div class="shop-filter-item">
                                    <input type="checkbox" id="shop-filter-price-item5" data-group="price" data-field="price_min" data-text="Trên 10.000.000₫" value="(>10000000)" data-operator="OR">
                                    <label for="shop-filter-price-item5" title="Trên 10.000.000₫">Trên 10.000.000₫</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-6 mb-4">
                    <div class="main-collection-head"  style="padding-right:  30px;">
                        <div class="shop-sort-style">
                            <div class="shop-sort-item" data-show="two"></div>
                            <div class="shop-sort-item" data-show="three"></div>
                            <div class="shop-sort-item active" data-show="four"></div>
                        </div>
                        <div class="shop-sort-by">
                            <label>Sắp xếp theo</label>
                            <select>
                                <option value="">Mặc định</option>
                                <option value="name:asc">A → Z</option>
                                <option value="name:desc">Z → A</option>
                                <option value="price_min:asc">Giá tăng dần</option>
                                <option value="price_min:desc">Giá giảm dần</option>
                                <option value="created_on:desc">Hàng mới nhất</option>
                                <option value="created_on:asc">Hàng cũ nhất</option>
                            </select>
                        </div>				</div>
                    <div class="row pt-5">
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card" style="width: 300px; height: 470px;">
                                <img src="{{asset('images/1.webp')}}" class="card-img-top" alt="Product Image">
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
                            <div class="card" style="width: 300px; height: 470px;">
                                <img src="{{asset('images/2.webp')}}" class="card-img-top" alt="Product Image">
                                <div class="card-body">
                                    <h5 class="card-title">Chuck Taylor All Star Classic</h5>
                                    <p class="card-text">
                                        <del class="text-muted">1.500.000đ</del>
                                        <span class="text-danger font-weight-bold ml-2">1.309.000đ</span>
                                    </p>
                                    <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card" style="width: 300px; height: 470px;">
                                <img src="{{asset('images/3.webp')}}" class="card-img-top" alt="Product Image">
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
                            <div class="card" style="width: 300px; height: 470px;">
                                <img src="{{asset('images/4.webp')}}" class="card-img-top" alt="Product Image">
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
                            <div class="card" style="width: 300px; height: 470px;">
                                <img src="{{asset('images/5.webp')}}" class="card-img-top" alt="Product Image">
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
                            <div class="card" style="width: 300px; height: 470px;">
                                <img src="{{asset('images/6.webp')}}" class="card-img-top" alt="Product Image">
                                <div class="card-body">
                                    <h5 class="card-title">Chuck Taylor All Star Classic</h5>
                                    <p class="card-text">
                                        <del class="text-muted">1.500.000đ</del>
                                        <span class="text-danger font-weight-bold ml-2">1.309.000đ</span>
                                    </p>
                                    <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card" style="width: 300px; height: 470px;">
                                <img src="{{asset('images/7.webp')}}" class="card-img-top" alt="Product Image">
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
                            <div class="card" style="width: 300px; height: 470px;">
                                <img src="{{asset('images/8.webp')}}" class="card-img-top" alt="Product Image">
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
                            <div class="card" style="width: 300px; height: 470px;">
                                <img src="{{asset('images/9.webp')}}" class="card-img-top" alt="Product Image">
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
                            <div class="card" style="width: 300px; height: 470px;">
                                <img src="{{asset('images/10.webp')}}" class="card-img-top" alt="Product Image">
                                <div class="card-body">
                                    <h5 class="card-title">Chuck Taylor All Star Classic</h5>
                                    <p class="card-text">
                                        <del class="text-muted">1.500.000đ</del>
                                        <span class="text-danger font-weight-bold ml-2">1.309.000đ</span>
                                    </p>
                                    <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card" style="width: 300px; height: 470px;">
                                <img src="{{asset('images/11.webp')}}" class="card-img-top" alt="Product Image">
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
                            <div class="card" style="width: 300px; height: 470px;">
                                <img src="{{asset('images/12.webp')}}" class="card-img-top" alt="Product Image">
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
                            <div class="card" style="width: 300px; height: 470px;">
                                <img src="{{asset('images/13.webp')}}" class="card-img-top" alt="Product Image">
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
                            <div class="card" style="width: 300px; height: 470px;">
                                <img src="{{asset('images/14.webp')}}" class="card-img-top" alt="Product Image">
                                <div class="card-body">
                                    <h5 class="card-title">Chuck Taylor All Star Classic</h5>
                                    <p class="card-text">
                                        <del class="text-muted">1.500.000đ</del>
                                        <span class="text-danger font-weight-bold ml-2">1.309.000đ</span>
                                    </p>
                                    <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card" style="width: 300px; height: 470px;">
                                <img src="{{asset('images/15.webp')}}" class="card-img-top" alt="Product Image">
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
                            <div class="card" style="width: 300px; height: 470px;">
                                <img src="{{asset('images/16.webp')}}" class="card-img-top" alt="Product Image">
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
                            <div class="card" style="width: 300px; height: 470px;">
                                <img src="{{asset('images/1.webp')}}" class="card-img-top" alt="Product Image">
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
                            <div class="card" style="width: 300px; height: 470px;">
                                <img src="{{asset('images/2.webp')}}" class="card-img-top" alt="Product Image">
                                <div class="card-body">
                                    <h5 class="card-title">Chuck Taylor All Star Classic</h5>
                                    <p class="card-text">
                                        <del class="text-muted">1.500.000đ</del>
                                        <span class="text-danger font-weight-bold ml-2">1.309.000đ</span>
                                    </p>
                                    <button type="button" title="Thêm vào giỏ" class="btn btn-danger " data-type="shop-addLoop-button" tabindex="0">Thêm vào giỏ</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card" style="width: 300px; height: 470px;">
                                <img src="{{asset('images/3.webp')}}" class="card-img-top" alt="Product Image">
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
                            <div class="card" style="width: 300px; height: 470px;">
                                <img src="{{asset('images/4.webp')}}" class="card-img-top" alt="Product Image">
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
                </div>
                <ul class="pagination justify-content-center" style="margin:20px 0">
                    <li class="page-item">
                        <ul class="pagination pagination-sm">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                          </ul>
                    </li>
                  </ul>
            </div>
        </section>
    </main>
</div>
@endsection