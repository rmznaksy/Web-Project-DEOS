<?php include 'header.php'; ?>

<!-- Content -->
<div class="page-content bg-white">
	<!-- inner page banner -->
	<div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr1.jpg);">
		<div class="container">
			<div class="dlab-bnr-inr-entry">
				<h1 class="text-white">İletişim</h1>
				<!-- Breadcrumb row -->
				<div class="breadcrumb-row">
					<ul class="list-inline">
						<li><a href="index.php">Ana Sayfa</a></li>
						<li>İletişim</li>
					</ul>
				</div>
				<!-- Breadcrumb row END -->
			</div>
		</div>
	</div>
	<!-- inner page banner END -->
	<!-- contact area -->
	<div class="section-full content-inner bg-white contact-style-1">
		<div class="container">
			<div class="row dzseth">
				<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
					<div class="icon-bx-wraper bx-style-1 p-lr20 p-tb30 center seth radius-sm">
						<div class="icon-lg text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-location-pin"></i></a> </div>
						<div class="icon-content">
							<h5 class="dlab-tilte text-uppercase">Adres</h5>
							<p>Yedpa Ticaret Merkezi G Caddesi No 81-82 İstanbul / Ataşehir</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
					<div class="icon-bx-wraper bx-style-1 p-lr20 p-tb30 center seth radius-sm">
						<div class="icon-lg text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-email"></i></a> </div>
						<div class="icon-content">
							<h5 class="dlab-tilte text-uppercase">Email</h5>
							<p>info@deosltd.com.tr<br /> adnan@deosltd.com.tr
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
					<div class="icon-bx-wraper bx-style-1 p-lr20 p-tb30 center seth radius-sm">
						<div class="icon-lg text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-mobile"></i></a> </div>
						<div class="icon-content">
							<h5 class="dlab-tilte text-uppercase">Telefon</h5>
							<p>+90(216) 661 50 70<br /> +90(216) 661 50 71
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
					<div class="icon-bx-wraper bx-style-1 p-lr20 p-tb30 center seth radius-sm">
						<div class="icon-lg text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-printer"></i></a> </div>
						<div class="icon-content">
							<h5 class="dlab-tilte text-uppercase">Fax</h5>
							<p>+90(216) 661 50 71</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Left part start -->
				<div class="col-lg-6 m-b30">
					<div class="p-a30 bg-gray clearfix radius-sm">
						<h3>Bize Mesaj Gönderin</h3>
						<div class="dzFormMsg"></div>
						<form method="post" class="dzForm" action="script/contact.php">
							<input type="hidden" value="Contact" name="dzToDo">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<div class="input-group">
											<input name="dzName" type="text" required class="form-control" placeholder="İsminiz">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<div class="input-group">
											<input name="dzEmail" type="email" class="form-control" required placeholder="Email Adresiniz">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<div class="input-group">
											<input name="dzOther[Phone]" type="text" required class="form-control" placeholder="Telefon">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<div class="input-group">
											<input name="dzOther[Subject]" type="text" required class="form-control" placeholder="Başlık">
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<div class="input-group">
											<textarea name="dzMessage" rows="4" class="form-control" required placeholder="Mesajınız..."></textarea>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<div class="input-group">
											<div class="g-recaptcha" data-sitekey="<!-- Put reCaptcha Site Key -->" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
											<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<button name="submit" type="submit" value="Submit" class="site-button "> <span>Gönder</span> </button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- Left part END -->
				<!-- right part start -->
				<div class="col-lg-6 m-b30 d-flex">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.8785727112686!2d29.162756115877862!3d40.98413967930329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cacf60e977ce45%3A0x1baa944ac7241b58!2sDeos!5e0!3m2!1str!2str!4v1619994336424!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<!-- right part END -->
			</div>
		</div>
	</div>
	<!-- contact area  END -->
</div>
<!-- Content END-->
<?php include 'footer.php'; ?>