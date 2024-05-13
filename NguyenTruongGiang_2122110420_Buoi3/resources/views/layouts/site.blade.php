<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    @yield('header')
</head>
<body>
    <header>
        <div class="container">
            <div class="row py-4">
              <div class="col-3 col-md-2 order-1 order-md-1">
                <a href="index.html">
                  <img src="/assets/images/shop_logo_image.webp" class="img-fluid" alt="">
                </a>
              </div>
              <div class="col-12 col-md-8 order-3 order-md-2">
                 <ul class="main-menu">
                      <li><a href="">Trang Chủ</a></li>
                      <li><a href="">Converse All</a>
                          <ul class="sub-menu">
                              <li><a href="">Converse All Style 1</a></li>
                              <li><a href="">Converse All Style 2</a></li>
                          </ul>
                      </li>
                      <li><a href="">Classic</a>
                          <ul class="sub-menu">
                              <li><a href="">Chuck Taylor</a>
                                  <ul class="sub-menu">
                                      <li><a href="">Jimmy Choo</a></li>
                                      <li><a href="">Manolo Blahnik</a></li>
                                      <li><a href="">GAFA</a></li>
                                      <li><a href="">Sergio Rossi</a></li>
                                      <li><a href="">Valentino</a></li>
                                      <li><a href="">Roger Vivier</a></li>
                                  </ul>
                              </li>
                          </li>
                              <li><a href="">Giày</a>
                                  <ul class="sub-menu">
                                      <li><a href="">Giày Cao Gót</a></li>
                                      <li><a href="">Giày Bít</a></li>
                                      <li><a href="">Giày Sandals</a></li>
                                      <li><a href="">Giày Búp Bê</a></li>
                                      <li><a href="">Giày Snecker</a></li>
                                      <li><a href="">Giày Boots</a></li>
                                  </ul>
                              </li>
                              <li><a href="">Túi Xách</a>
                                  <ul class="sub-menu">
                                      <li><a href="">Túi Xách Tay</a></li>
                                      <li><a href="">Túi Đeo Chéo</a></li>
                                      <li><a href="">Túi Xách Da Thật</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      <li><a href="">Accessories - Phụ Trang</a>
                          <ul class="sub-menu">
                              <li><a href="">Thắt Lưng</a>
                                  <ul class="sub-menu">
                                      <li><a href="">Thắt Lưng Cao Cấp</a></li>
                                      <li><a href="">Thắt Lưng Cho Nam</a></li>
                                      <li><a href="">Thắt Lưng Cho Nữ</a></li>
                                  </ul>
                              </li>
                              <li><a href="">Mắt Kính</a>
                                  <ul class="sub-menu">
                                      <li><a href="">Kính Thời Trang</a></li>
                                      <li><a href="">Kính Mát</a></li>
                                      <li><a href="">Kính Nam</a></li>
                                      <li><a href="">Kính Nữ</a></li>
                                  </ul>
                              </li>
                              <li><a href="">Trang Sức</a></li>
                              <li><a href="">Mũ Nón</a></li>
                              <li><a href="">Phụ Kiện Khác</a></li>
                          </ul>
                      </li>
                      <li><a href="">Tin Tức</a></li>
                      <li><a href="">Liên Hệ</a></li>
                 </ul>
              </div>
              <div class="col-9 col-md-2 order-2 order-md-3 text-end py-3">
                  <ul class="nav justify-content-end">
                      <li class="nav-item  positon-relative">
                          <button type="button" class="btn btn-light position-relative me-3">
                              <i class="fa-solid fa-magnifying-glass"></i>
                              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                  0
                                  <span class="visually-hidden">unread messages</span>
                              </span>
                          </button>
                          <button type="button" class="btn btn-light position-relative me-3">
                              <i class="fa-regular fa-user"></i>
                              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                  0
                                  <span class="visually-hidden">unread messages</span>
                              </span>
                          </button>
                          <button type="button" class="btn btn-light position-relative me-3">
                          <i class="fa-solid fa-bag-shopping"></i>
                              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                  0
                                  <span class="visually-hidden">unread messages</span>
                              </span>
                          </button>    
                      </li>
                  </ul>
              </div>
            </div>
          </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="container">
            <div class="row py-4">
                <div class="footer col-md-3">
                    <a href="index.html">
                        <img src="/assets/images/shop_logo_image.webp" class="img-fluid" alt="">
                    </a>
                    <p style="margin-top: 15px;">F1GENZ SHOES luôn cam kết, đảm bảo đưa sản phẩm trực tiếp từ nhà sản xuất đến tay người dùng và kiểm soát được chất lượng để đáp ứng được nhu cầu ngày càng cao của khách hàng. Tất cả các sản phẩm tại F1GENZ SHOES đều có nguồn gốc xuất xứ rõ ràng, chất lượng.</p>
                </div>
                <div class="footer col-md-3">
                    <h3 style="font-weight: bold;">Liên hệ</h3>
                    <p style="margin-top: 35px;">
                        Tư vấn dịch vụ: <a aria-label="Liên hệ" title="Liên hệ" href="tel:18006750">1800 6750</a> <br>
                        Hỗ trợ sử dụng: <a aria-label="Liên hệ" title="Liên hệ" href="tel:19006750">1900 6750</a> <br>
                        Hỗ trợ vận chuyển: <a aria-label="Liên hệ" title="Liên hệ" href="tel:19006719">1900 6719</a> <br>
                        Email: <a aria-label="Liên hệ" title="Liên hệ" href="mailto:support@sapo.vn">support@sapo.vn</a> <br>
                        Từ 7h00 - 22h00 các ngày từ thứ 2 đến Chủ nhật</p>
                </div>
                <div class="footer col-md-3">
                    <h3 style="font-weight: bold;">Về Chúng Tôi</h3>
                    <ul style="margin-top: 35px;">
                        <li><a href="/gioi-thieu" aria-label="Giới thiệu" title="Giới thiệu">Giới thiệu</a></li>
                        <li><a href="/chinh-sach-doi-tra" aria-label="Chính sách đổi trả" title="Chính sách đổi trả">Chính sách đổi trả</a></li>
                        <li><a href="/chinh-sach-bao-mat" aria-label="Chính sách bảo mật" title="Chính sách bảo mật">Chính sách bảo mật</a></li>
                        <li><a href="/dieu-khoan-dich-vu" aria-label="Điều khoản dịch vụ" title="Điều khoản dịch vụ">Điều khoản dịch vụ</a></li>
                    </ul>
                </div>
                <div class="footer col-md-3">
                    <h3>Danh Mục Nổi Bật</h3>
                    <ul style="margin-top: 35px;">
                        <li><a href="/chuck-2" aria-label="Chuck 2" title="Chuck 2">Chuck 2</a></li>
                        <li><a href="/converse-all" aria-label="Converse All" title="Converse All">Converse All</a></li>
                        <li><a href="/socks" aria-label="Socks" title="Socks">Socks</a></li>
                        <li><a href="/jack-purcell" aria-label="Jack Purcell" title="Jack Purcell">Jack Purcell</a></li>
                        <li><a href="/converse-seasonal" aria-label="Converse Seasonal" title="Converse Seasonal">Converse Seasonal</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer row py-4">
                <p class="text-copyright">© 2024 - Bản quyền thuộc về 
                    <a target="_blank">F1GENZ TECHNOLOGY CO., LTD.</a> 
                    <a rel="nofollow">Cung cấp bởi Sapo</a></p>
            </div>
        </div>
    </footer>
    <script src="{{asset('bootstrap/js/bootstraps.bundle.min.js')}}"></script>
    @yield('footer')
</body>
</html>
