<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="/virtual_painter_file/icon.png">
	<title>Penta Prima | Virtual Painter</title>
	<link rel="stylesheet" href="virtual_painter_file/style/style.css" type="text/css">
	<link rel="stylesheet" href="virtual_painter_file/style/style-color.css" type="text/css">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>

<body>
	<nav class="navbar navbar-light bg-light fixed-top mb-10">
		<div class="container">
			<a href="https://www.pentaprima.co.id/Virtual-Painter/35/page" target="__blank" class="btn btn-primary"
				title="kembali">
				<i class="fa-solid fa-arrow-left-long"></i>
				Back
			</a>
			<input type="button" value="Refresh Halaman" onClick="window.location.reload()" />
		</div>

	</nav>
	<section class="section-virtual-paint container" style="margin-top: 60px;">
		<h2>Simulasi Pengecatan Kamar Tidur</h2>
		<div class="row">
			<div class="col-md-7">
				<div class="object_virtual">
					<div class="painted_object_room">
						<img id="pic_room" class="img-fluid" src="virtual_painter_file/room.png">
					</div>
					<div class="painted_object_virtual">
						<img id="pic_kanan" class="img-fluid" src="virtual_painter_file/dinding_kanan.png"
							onload="getPixelsKanan(this)">
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<!-- ######### Pilih Warna Kanan ########3 -->
				<div class="card card-color-palet">
					<div class="card-header">
						<div id="focus_color_kanan" class="preview_color"></div>
						<div id="nama_color_kanan" class="font16"></div>
						<div id="kode_color_kanan">
						</div>
					</div>
					<div class=" overflow-auto">
						<div class="card-body">
							<div class="nomor_obyek style1 style2 style4">PILIHAN WARNA</div>
						</div>
						<div class="card-body">
							<div>
								<div id="result_kanan">
									<!-- color palet -->
									<!-- class="color_container" -->
									<div class="color-palet">
										<div class="color_select" style="background-color:rgb(226,229,164);"
											onclick="changeColor('#E2E5A4'); previewColorKanan('rgb(226,229,164)', 'Honey Yellow', '7805-11069');"
											title="Honey Yellow"></div>
										<div class="color_select" style="background-color:rgb(240,228,106);"
											onclick="changeColor('#F0E46A'); previewColorKanan('rgb(240,228,106)', 'Potenitilla', '7805-11176');"
											title="Potenitilla"></div>
										<div class="color_select" style="background-color:rgb(230,214,75);"
											onclick="changeColor('#E6D64B'); previewColorKanan('rgb(230,214,75)', 'Parakeet Yellow', '7805-13078');"
											title="Parakeet Yellow"></div>
										<div class="color_select" style="background-color:rgb(245,226,131);"
											onclick="changeColor('#F5E283'); previewColorKanan('rgb(245,226,131)', 'Sunny Yellow', '7805-11072');"
											title="Sunny Yellow"></div>
										<div class="color_select" style="background-color:rgb(250,227,97);"
											onclick="changeColor('#FAE361'); previewColorKanan('rgb(250,227,97)', 'Hillside Bloom', '7805-12090');"
											title="Hillside Bloom"></div>
										<div class="color_select" style="background-color:rgb(252,202,66);"
											onclick="changeColor('#FCCA42'); previewColorKanan('rgb(252,202,66)', 'Canary Yellow', '7805-25002');"
											title="Canary Yellow"></div>
										<div class="color_select" style="background-color:rgb(244,183,102);"
											onclick="changeColor('#F4B766'); previewColorKanan('rgb(244,183,102)', 'Golden Yellow', '7805-15003');"
											title="Golden Yellow"></div>
										<div class="color_select" style="background-color:rgb(238,173,133);"
											onclick="changeColor('#EEAD85'); previewColorKanan('rgb(238,173,133)', 'Sunset', '7805-22004');"
											title="Sunset"></div>
										<div class="color_select" style="background-color:rgb(236,136,86);"
											onclick="changeColor('#EC8856'); previewColorKanan('rgb(236,136,86)', 'Orange Yellow', '7805-34002');"
											title="Orange Yellow"></div>
										<div class="color_select" style="background-color:rgb(234,184,182);"
											onclick="changeColor('#EAB8B6'); previewColorKanan('rgb(234,184,182)', 'Raspberry', '7805-32012');"
											title="Raspberry"></div>
										<div class="color_select" style="background-color:rgb(231,154,162);"
											onclick="changeColor('#E79AA2'); previewColorKanan('rgb(231,154,162)', 'Confire Rose', '7805-32024');"
											title="Confire Rose"></div>
										<div class="color_select" style="background-color:rgb(242,150,166);"
											onclick="changeColor('#F296A6'); previewColorKanan('rgb(242,150,166)', 'Candy Pink', '7805-31020');"
											title="Candy Pink"></div>
										<div class="color_select" style="background-color:rgb(192,76,87);"
											onclick="changeColor('#C04C57'); previewColorKanan('rgb(192,76,87)', 'Hibiscus', '7805-35012');"
											title="Hibiscus"></div>
										<div class="color_select" style="background-color:rgb(222,62,68);"
											onclick="changeColor('#DE3E44'); previewColorKanan('rgb(222,62,68)', 'Bright Red', '7805-35041');"
											title="Bright Red"></div>
										<div class="color_select" style="background-color:rgb(238,225,194);"
											onclick="changeColor('#EEE1C2'); previewColorKanan('rgb(238,225,194)', 'Lily White', '7805-10086');"
											title="Lily White"></div>
										<div class="color_select" style="background-color:rgb(236,221,187);"
											onclick="changeColor('#ECDDBB'); previewColorKanan('rgb(236,221,187)', 'Barley White', '7805-10087');"
											title="Barley White"></div>
										<div class="color_select" style="background-color:rgb(244,216,182);"
											onclick="changeColor('#F4D8B6'); previewColorKanan('rgb(244,216,182)', 'Peach Glory', '7805-20010');"
											title="Peach Glory"></div>
										<div class="color_select" style="background-color:rgb(233,218,160);"
											onclick="changeColor('#E9DAA0'); previewColorKanan('rgb(233,218,160)', 'Sugarcane', '7805-11073');"
											title="Sugarcane"></div>
										<div class="color_select" style="background-color:rgb(215,190,153);"
											onclick="changeColor('#D7BE99'); previewColorKanan('rgb(215,190,153)', 'Cream', '7805-13029');"
											title="Cream"></div>
										<div class="color_select" style="background-color:rgb(178,148,107);"
											onclick="changeColor('#B2946B'); previewColorKanan('rgb(178,148,107)', 'Cozy Corner', '7805-82034');"
											title="Cozy Corner"></div>
										<div class="color_select" style="background-color:rgb(152,105,74);"
											onclick="changeColor('#98694A'); previewColorKanan('rgb(152,105,74)', 'Saffrone', '7805-84046');"
											title="Saffrone"></div>
										<div class="color_select" style="background-color:rgb(236,221,195);"
											onclick="changeColor('#ECDDC3'); previewColorKanan('rgb(236,221,195)', 'Carnation White', '7805-90125');"
											title="Carnation White"></div>
										<div class="color_select" style="background-color:rgb(235,237,237);"
											onclick="changeColor('#EBEDED'); previewColorKanan('rgb(235,237,237)', 'Super White 102', '7805-90105');"
											title="Super White 102"></div>
										<div class="color_select" style="background-color:rgb(241,238,235);"
											onclick="changeColor('#F1EEEB'); previewColorKanan('rgb(241,238,235)', 'Putih 986', '7805-90099');"
											title="Putih 986"></div>
										<div class="color_select" style="background-color:rgb(243,241,235);"
											onclick="changeColor('#F3F1EB'); previewColorKanan('rgb(243,241,235)', 'Brilliant White', '7805-90033');"
											title="Brilliant White"></div>
										<div class="color_select" style="background-color:rgb(219,222,214);"
											onclick="changeColor('#DBDED6'); previewColorKanan('rgb(219,222,214)', 'Silver White', '7805-90102');"
											title="Silver White"></div>
										<div class="color_select" style="background-color:rgb(170,170,165);"
											onclick="changeColor('#AAAAA5'); previewColorKanan('rgb(170,170,165)', 'Nice Stone', '7805-72046');"
											title="Nice Stone"></div>
										<div class="color_select" style="background-color:rgb(167,172,167);"
											onclick="changeColor('#A7ACA7'); previewColorKanan('rgb(167,172,167)', 'Dolphine Grey', '7805-71121');"
											title="Dolphine Grey"></div>
										<div class="color_select" style="background-color:rgb(150,154,159);"
											onclick="changeColor('#969A9F'); previewColorKanan('rgb(150,154,159)', 'Pure Grey', '7805-72073');"
											title="Pure Grey"></div>
										<div class="color_select" style="background-color:rgb(147,149,146);"
											onclick="changeColor('#939592'); previewColorKanan('rgb(147,149,146)', 'Iron Stone', '7805-73039');"
											title="Iron Stone"></div>
										<div class="color_select" style="background-color:rgb(128,128,121);"
											onclick="changeColor('#808079'); previewColorKanan('rgb(128,128,121)', 'YL Grey', '7805-73074');"
											title="YL Grey"></div>
										<div class="color_select" style="background-color:rgb(101,103,106);"
											onclick="changeColor('#65676A'); previewColorKanan('rgb(101,103,106)', 'Minimalis Grey', '7805-75050');"
											title="Minimalis Grey"></div>
										<div class="color_select" style="background-color:rgb(191,226,163);"
											onclick="changeColor('#BFE2A3'); previewColorKanan('rgb(191,226,163)', 'Dream Land', '7805-61036');"
											title="Dream Land"></div>
										<div class="color_select" style="background-color:rgb(146,176,118);"
											onclick="changeColor('#92B076'); previewColorKanan('rgb(146,176,118)', 'Fresh Lime', '7805-64030');"
											title="Fresh Lime"></div>
										<div class="color_select" style="background-color:rgb(139,207,138);"
											onclick="changeColor('#'); previewColorKanan('rgb(139,207,138)', 'Green Romantic', '7805-61077');"
											title="Brite Green"></div>
										<div class="color_select" style="background-color:rgb(142,205,129);"
											onclick="changeColor('#8ECD81'); previewColorKanan('rgb(142,205,129)', 'Brite Green', '7805-62025');"
											title="Brite Green"></div>
										<div class="color_select" style="background-color:rgb(177,213,111);"
											onclick="changeColor('#B1D56F'); previewColorKanan('rgb(177,213,111)', 'Emerald', '7805-61061');"
											title="Emerald"></div>
										<div class="color_select" style="background-color:rgb(172,202,115);"
											onclick="changeColor('#ACCA73'); previewColorKanan('rgb(172,202,115)', 'Spring Vigor', '7805-61076');"
											title="Spring Vigor"></div>
										<div class="color_select" style="background-color:rgb(104,195,160);"
											onclick="changeColor('#68C3A0'); previewColorKanan('rgb(104,195,160)', 'Laguna', '7805-62026');"
											title="Laguna"></div>
										<div class="color_select" style="background-color:rgb(137,206,101);"
											onclick="changeColor('#89CE65'); previewColorKanan('rgb(137,206,101)', 'Frolic Green', '7805-63095');"
											title="Frolic Green"></div>
										<div class="color_select" style="background-color:rgb(111,198,107);"
											onclick="changeColor('#6FC66B'); previewColorKanan('rgb(111,198,107)', 'Summer Field', '7805-63096');"
											title="Summer Field"></div>
										<div class="color_select" style="background-color:rgb(95,183,107);"
											onclick="changeColor('#5FB76B'); previewColorKanan('rgb(95,183,107)', 'Coral Spring', '7805-64084');"
											title="Coral Spring"></div>
										<div class="color_select" style="background-color:rgb(199,182,201);"
											onclick="changeColor('#C7B6C9'); previewColorKanan('rgb(199,182,201)', 'Lilac', '7805-41012');"
											title="Lilac"></div>
										<div class="color_select" style="background-color:rgb(180,172,193);"
											onclick="changeColor('#B4ACC1'); previewColorKanan('rgb(180,172,193)', 'Light Violet', '7805-41002');"
											title="Light Violet"></div>
										<div class="color_select" style="background-color:rgb(186,172,203);"
											onclick="changeColor('#BAACCB'); previewColorKanan('rgb(186,172,203)', 'Magic Purple', '7805-42008');"
											title="Magic Purple"></div>
										<div class="color_select" style="background-color:rgb(171,140,183);"
											onclick="changeColor('#AB8CB7'); previewColorKanan('rgb(171,140,183)', 'Dignity', '7805-43013');"
											title="Dignity"></div>
										<div class="color_select" style="background-color:rgb(137,99,133);"
											onclick="changeColor('#896385'); previewColorKanan('rgb(137,99,133)', 'Hyacinth', '7805-45017');"
											title="Hyacinth"></div>
										<div class="color_select" style="background-color:rgb(137,150,197);"
											onclick="changeColor('#8996C5'); previewColorKanan('rgb(137,150,197)', 'Tiara', '7805-53014');"
											title="Tiara"></div>
										<div class="color_select" style="background-color:rgb(170,184,217);"
											onclick="changeColor('#AAB8D9'); previewColorKanan('rgb(170,184,217)', 'Roslyn`s Blue', '7805-51043');"
											title="Roslyn`s Blue"></div>
										<div class="color_select" style="background-color:rgb(225,231,238);"
											onclick="changeColor('#E1E7EE'); previewColorKanan('rgb(225,231,238)', 'Metro White', '7805-90129');"
											title="Metro White"></div>
										<div class="color_select" style="background-color:rgb(195,205,222);"
											onclick="changeColor('#C3CDDE'); previewColorKanan('rgb(195,205,222)', 'Igloo', '7805-50016');"
											title="Igloo"></div>
										<div class="color_select" style="background-color:rgb(158,209,224);"
											onclick="changeColor('#9ED1E0'); previewColorKanan('rgb(158,209,224)', 'Heavenly Day', '7805-51044');"
											title="Heavenly Day"></div>
										<div class="color_select" style="background-color:rgb(137,190,216);"
											onclick="changeColor('#89BED8'); previewColorKanan('rgb(137,190,216)', 'Artic Blue', '7805-51014');"
											title="Artic Blue"></div>
										<div class="color_select" style="background-color:rgb(113,154,191);"
											onclick="changeColor('#719ABF'); previewColorKanan('rgb(113,154,191)', 'Everest Blue', '7805-52032');"
											title="Everest Blue"></div>
										<div class="color_select" style="background-color:rgb(84,153,197);"
											onclick="changeColor('#5499C5'); previewColorKanan('rgb(84,153,197)', 'Bunaken Blue', '7805-53013');"
											title="Bunaken Blue"></div>
										<div class="color_select" style="background-color:rgb(51,134,176);"
											onclick="changeColor('#3386BD'); previewColorKanan('rgb(51,134,176)', 'Wisdom Blue', '7805-53042');"
											title="Wisdom Blue"></div>

									</div>

								</div>

							</div>
						</div>
					</div>
				</div>
				<p><i style="font-size:12px; background-color: rgba(255, 16, 16, 0.616) ;">* Bila tampilan ruangan tidak
						ada perubahan, harap refresh halaman anda.</i>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7 col-description-second">
				<div class="card border-0">
					<div class=" card-body">
						<div class="d-none d-lg-block">
							<a href="https://www.pentaprima.co.id/product/Polaris"><img
									src="virtual_painter_file/Polaris.png" class="w-25 float-lg-start me-3" /></a>
						</div>
						<div class="d-lg-none">
							<a href="https://www.pentaprima.co.id/product/Polaris"><img
									src="virtual_painter_file/Polaris.png"
									class="img-fluid w-75 float-lg-start me-3" /></a>
						</div>
						<div>
							<strong>POLARIS (7805 - SERI)<br />
							</strong><em>Acrylic Emulsion Paint for Interior &amp; Exterior</em><br />
							<br />
							Cat tembok yang terbuat dari bahan dasar resin acrylic copolymer dan pigment, serta
							bahan-bahan additive pilihan.Penampilan akhir yang matt / doff dan warna-warna yang menawan,
							daya rekat yang kuat, dan daya tutup yang baik mampu memberikan efek dekorasi dan pelindung
							yang baik, ekonomis, dan tahan lama.
							Lapisan keringnya tidak mudah
							retak,
							daya
							lekatnya sangat baik dan tidak mudah luntur bila terkena air, menjadikan cat ini bisa
							digunakan
							untuk pelindung permukaan dinding bagian dalam maupun luar ruangan. </p>
							<br />
							<p><i><b style="background-color: rgb(255, 255, 0);">* Warna-warna mendekati warna aslinya,
										cahaya dan bentuk permukaan mempengaruhi hasil akhir.</b></i>
								<p><a href="https://www.pentaprima.co.id/product"> Cek Produk kami disini...</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="footer_v1" style="background-color: #9f0009;">
		<div class="footer_bottom">
			<div class="container">
				<br>
				<div class="row">
					<div class="col-lg-12 col-md-6 col-sm-12">

						<div class="">
							<img src="virtual_painter_file/logo.png" class="w-25 float-lg-start me-3" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">

						<div class="">
							<strong style="color:yellow;">Kreasi Warna dari PENTA PRIMA</strong><br />
							<em style="font-size: 14px; color:yellow;">Copyright © 2022 <a style="color: yellow;"
									href="https://www.pentaprima.co.id/">Penta Prima</a>. All rights reserved</em><br />
						</div>
					</div>
					<div class="col-lg-8">
						<div class="social_box">
							<ul>
								<li><a target="_blank" href="http://www.instagram.com/pentaprimapaint"><i
											class="fa-brands fa-instagram"></i></a></li>

								<li><a target="_blank"
										href="https://www.youtube.com/channel/UCEGuXYe03VW6tNsEcMI8RQQ"><i
											class="fa-brands fa-youtube"></i></a></li>

								<li><a target="_blank" href="https://www.facebook.com/pentaprimaID"><i
											class="fa-brands fa-facebook"></i></a></li>

								<li><a target="_blank" href="#"><i class="fa-brands fa-tiktok"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div>
					<img width="200" height="70" src="virtual_painter_file/solusi.png" class="rounded float-end" />
				</div>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="virtual_painter_file/script/script-collor.js"></script>
	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
	</script>
	<script type="text/javascript" src="virtual_painter_file/script/script.js"></script>
	<script type="text/javascript" src="virtual_painter_file/script/fading_script.js"></script>
</body>

</html>
