@extends('layouts.site')
@section('title','contact')
@section('content')
<div>
    <main class="maincontent">
        <div class="container">
            <div class="page-about-new-main-item">
				<div class="page-about-new-main-item-left">
					<img loading="eager" decoding="sync" fetchpriotrity="high" title="Về Chúng Tôi" src="//bizweb.dktcdn.net/100/493/370/themes/940719/assets/page-about-new-image-1.jpg?1713464283843" alt="Về Chúng Tôi">
				</div>
				<div class="page-about-new-main-item-right">
					<div class="section-title-all">
						<span>Về Chúng Tôi</span>
						<p>F1GENZ BABIE chính là nơi hội tụ những thương hiệu uy tín, những sản phẩm dành cho mẹ và bé chính hãng, chất lượng hàng đầu tại Việt Nam. Không những thế, F1GENZ BABIE mang đến cho Ba/mẹ những trải nghiệm mua sắm tuyệt vời, đáng tin cậy và cam kết cung cấp các dịch vụ chăm sóc khách hàng, tư vấn bán hàng, tư vấn sử dụng sản phẩm và các dịch vụ giao nhận hàng tốt nhất.</p>
					</div>
				</div>
			</div>
            <div class="page-about-new-main-item">
				<div class="page-about-new-main-item-left">
					<img decoding="async" title="Liên hệ" src="//bizweb.dktcdn.net/100/493/370/themes/940719/assets/page-about-new-image-2.jpg?1713464283843" alt="Liên hệ">
				</div>
				<div class="page-about-new-main-item-right">
					<div class="section-title-all">
						<span>Liên hệ</span>
						<p>Con càng lớn lên, thời gian con ở bên cha mẹ ngày càng ít dần, những người bạn bên cạnh chơi đùa cùng con ngày nào dần bị thay thế bằng những trò chơi, video trên các sản phẩm công nghệ. Khi con bước sang độ tuổi thôi nôi, là lúc con bị cuốn hút nhiều hơn từ những Video, trò chơi trên ipad. Thời gian tiếp xúc với con đã ít rồi lại còn ít hơn nữa và dần dần con chỉ có thể tìm được những người bạn, niềm vui từ những trò công nghệ này. Tình cảm, kỹ năng, sự năng động của đứa bé 1 tuổi cũng dần giảm xuống thay vì phát triển như những đứa trẻ bình thường khác. Rất may mắn cho gia đình, khi chúng tôi sớm nhìn nhận ra được vấn đề với con. Nhờ những tư vấn, lời khuyên từ bạn bè, người thân tôi cũng đã nhận ra được mình phải làm gì để mang lại niềm vui và tuổi thơ cho con trẻ.</p>
					</div>
				</div>
			</div>
                    <input required="" type="text" id="contactFormName" class="form-control input-lg" name="contact[name]" placeholder="Tên của bạn" autocapitalize="words" value="">
                    <input required="" type="text" id="contactFormPhone" class="form-control input-lg" name="contact[phone]" placeholder="Số điện thoại của bạn" autocapitalize="words" value="">
                    <input required="" type="email" name="contact[email]" placeholder="Email của bạn" id="contactFormEmail" class="form-control input-lg" autocapitalize="off" value="">
                    <textarea required="" rows="6" name="contact[body]" class="form-control" placeholder="Viết bình luận" id="contactFormMessage"></textarea>
                    <button type="submit" class="btn btn-outline insButton" title="Gửi thông tin">Gửi thông tin</button>			
                <div class="page-about-new-contact-map pt-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6177130569445!2d106.6541090152164!3d10.763917262366853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752eec413c9d8d%3A0xfd53ac27a1acd021!2zMTgyIMSQLiBMw6ogxJDhuqFpIEjDoG5oLCBQaMaw4budbmcgMTUsIFF14bqtbiAxMSwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1666321027665!5m2!1svi!2s" width="1300" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        
    </main>
</div>
@endsection