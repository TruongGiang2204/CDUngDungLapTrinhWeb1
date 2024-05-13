@extends('layouts.site')
@section('title','product_detail')
@section('content')
<div>
    <main class="maincontent">
        <div class="container">
			<div class="row">
                <div class="section-title-all">
                    <h1>Converse Chuck Taylor All Star Mono Leather Low Top</h1>
                </div>
                <div class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" aria-label="Trang chủ" title="Trang chủ">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="/converse-all" aria-label="CONVERSE ALL" title="CONVERSE ALL">CONVERSE ALL</a></li>
                        <li class="breadcrumb-item active"><span> Converse Chuck Taylor All Star Mono Leather Low Top</span></li>
                    </ol>
                </div>		
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="product-gallery">
                        <img src="{{asset('images/1.1.webp')}}" alt="Main Sneaker Image" class="main-image">
                        <div class="thumbnail-container">
                          <img src="{{asset('images/1.webp')}}" alt="Sneaker Front View" class="thumbnail">
                          <img src="{{asset('images/1.1.webp')}}" alt="Sneaker Side View" class="thumbnail selected">
                          <img src="{{asset('images/1.2.webp')}}" alt="Sneaker Top View" class="thumbnail">
                          <img src="{{asset('images/1.3.webp')}}" alt="Sneaker Back View" class="thumbnail">
                        </div>
                    </div> 
                </div>	
                <div class="col-md-8">
                    <h1 class="main-product-title ">Converse Chuck Taylor All Star Mono Leather Low Top</h1>
                    <div class="main-product-info">
                        <div class="main-product-info-sku">
                            <strong>Mã sản phẩm: </strong>
                            <span>Đang cập nhật</span>
                        </div>
                        <div class="main-product-info-barcode">
                            <strong>Barcode: </strong>
                            <span>Đang cập nhật</span>
                        </div>
                        <div class="main-product-info-vendor">
                            <strong>Thương hiệu: </strong>
                            <span>Converse</span>
                        </div>
                        <div class="main-product-info-type">
                            <strong>Dòng sản phẩm: </strong>
                            <span>Giày cổ thấp</span>
                        </div>
                    </div>
                    <div class="main-product-price">
                        <div class="main-product-price-wrap">
                            <del class="main-product-price-compare">2.139.000₫</del>
    
                            <span class="main-product-price-this">1.900.000₫</span>
    
                            <span class="main-product-price-discount">Tiết kiệm 11%</span>
                        </div>
                    </div>
                    <div class="main-product-freeship">
                        <div class="shop-freeship" data-freeship-price="50000000">
                            <div class="shop-freeship-note">Mua thêm <span>48.100.000₫</span> để được miễn phí giao hàng trên toàn quốc</div>
                        </div>
                    </div>  
                    <div class="main-product-cta pt-2">
                        <div class="d-grid gap-2 py-3">
                            <button class="btn btn-outline-secondary" type="button">
                                <strong>Thêm vào giỏ</strong>
                                <span>Chọn ngay sản phẩm bạn yêu thích</span>
                            </button>
                          </div>
                          <div class="d-grid gap-2">
                            <button class="btn btn-outline-secondary" type="button">
                                <strong>Tư vấn</strong>
                                <span>Tư vấn thiết kế nội thất tùy chọn</span>
                            </button>
                          </div>
                          <div class="d-grid gap-2 py-3">
                            <button class="btn btn-outline-secondary" type="button">
                                <strong>Liên hệ</strong>
                                <span>Chúng tôi luôn bên bạn 24/7</span>
                            </button>
                          </div>
                    </div>        
                </div>
            </div>
            <div class="main-product-description">
                <div class="main-product-description-left ">
                    <ul class="main-product-description-left-head">
                        <li data-type="des" class="active"><span>Mô tả sản phẩm</span></li>
                        <li data-type="page1"><span>Chính sách bảo mật</span></li>
                        <li data-type="page2"><span>Chính sách đổi trả</span></li>
                        <li data-type="page3"><span>Điều khoản dịch vụ</span></li>
                    </ul>
                    <div class="main-product-description-left-item" data-type="des">
                        <div class="main-product-description-item-data">
                            <div class="table-responsive"><table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <td>NHÃN HIỆU</td>
                                        <td>Convers&nbsp;</td>
                                    </tr><tr><td>TÊN</td>
                                        <td>Converse Chuck Taylor All Star SP OX&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>DÒNG SẢN PHẨM</td>
                                        <td>Chuck Taylor All Star</td>
                                    </tr>
                                    <tr>
                                        <td>NƠI SẢN XUẤT</td>
                                        <td>Việt Nam</td>
                                    </tr>
                                    <tr>
                                        <td>CHẾ ĐỘ BẢO HÀNH</td>
                                        <td>Converse Chuck Taylor All Star SP OX&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>PHỤ KIỆN THEO KÈM</td>
                                        <td>Túi Converse, Phiếu bảo hành chính hãng, Hộp giày</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br> 
                        </div>
                    </div>
                                    <div data-type="page1">
                        <div>
                            <p>Chính sách bảo mật này nhằm giúp Quý khách hiểu về cách website thu thập và sử dụng thông tin cá nhân của mình thông qua việc sử dụng trang web, bao gồm mọi thông tin có thể cung cấp thông qua trang web khi Quý khách đăng ký tài khoản, đăng ký nhận thông tin liên lạc từ chúng tôi, hoặc khi Quý khách mua sản phẩm, dịch vụ, yêu cầu thêm thông tin dịch vụ từ chúng tôi.</p>
                            <p>Chúng tôi sử dụng thông tin cá nhân của Quý khách để liên lạc khi cần thiết liên quan đến việc Quý khách sử dụng website của chúng tôi, để trả lời các câu hỏi hoặc gửi tài liệu và thông tin Quý khách yêu cầu.</p>
                            <p><span>Trang web của chúng tôi coi trọng việc bảo mật thông tin và sử dụng các biện pháp tốt nhất để bảo vệ thông tin cũng như việc thanh toán của khách hàng.&nbsp;</span></p>
                            <p><span>Mọi thông tin giao dịch sẽ được bảo mật ngoại trừ trong trường hợp cơ quan pháp luật yêu cầu.</span></p>
                        </div>
                    </div>
                                    <div data-type="page2">
                        <div><p><strong>1. Điều kiện đổi trả</strong></p>
                            <p>Quý Khách hàng cần kiểm tra tình trạng hàng hóa và có thể đổi hàng/ trả lại hàng&nbsp;ngay tại thời điểm giao/nhận hàng&nbsp;trong những trường hợp sau:</p>
                            <ul>
                                <li>Hàng không đúng chủng loại, mẫu mã trong đơn hàng đã đặt hoặc như trên website tại thời điểm đặt hàng.</li>
                                <li>Không đủ số lượng, không đủ bộ như trong đơn hàng.</li><li>Tình trạng bên ngoài bị ảnh hưởng như rách bao bì, bong tróc, bể vỡ…</li>
                            </ul>
                            <p>&nbsp;Khách hàng có trách nhiệm trình giấy tờ liên quan chứng minh sự thiếu sót trên để hoàn thành việc&nbsp;hoàn trả/đổi trả hàng hóa.&nbsp;</p>
                            <p><br></p><p><strong>2. Quy định về thời gian thông báo và gửi sản phẩm đổi trả</strong></p>
                            <ul>
                                <li><strong>Thời gian thông báo đổi trả</strong>:&nbsp;trong vòng 48h kể từ khi nhận sản phẩm đối với trường hợp sản phẩm thiếu phụ kiện, quà tặng hoặc bể vỡ.</li>
                                <li><strong>Thời gian gửi chuyển trả sản phẩm</strong>: trong vòng 14 ngày kể từ khi nhận sản phẩm.</li>
                                <li><strong>Địa điểm đổi trả sản phẩm</strong>: Khách hàng có thể mang hàng trực tiếp đến văn phòng/ cửa hàng của chúng tôi hoặc chuyển qua đường bưu điện.</li>
                            </ul>
                            <p>Trong trường hợp Quý Khách hàng có ý kiến đóng góp/khiếu nại liên quan đến chất lượng sản phẩm, Quý Khách hàng vui lòng liên hệ đường dây chăm sóc khách hàng&nbsp;của chúng tôi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection