<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="stylesheet/reset.css"/>
<link rel="stylesheet" type="text/css" href="stylesheet/styles.css"/>
<link rel="stylesheet" type="text/css" href="stylesheet/MuseoSansRounded.css"/>
<link rel="stylesheet" type="text/css" href="stylesheet/ui-lightness/jquery-ui-1.8.21.custom.css"/>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>

<!--  jquery core -->
<script src="js/jquery/jquery-1.7.2.min.js" type="text/javascript"></script>

<!--  styled select box script version 2 --> 
<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.selection').selectbox({ inputClass: "selection" });
	$('.selection2').selectbox({ inputClass: "selection2" });
	$('.selection3').selectbox({ inputClass: "selection3" });
});
</script>

<script>
$(function() {
	$( "#datepicker" ).datepicker();
});
</script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>

<!-- jqueryui -->
<script type="text/javascript" src="js/jquery/jquery-ui-1.8.21.custom.min.js"></script>

<title>Yosh! - Your Online Shopping Hub!</title>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body>

	<div id="sales_menu_wrapper">
		<div id="sales_menu_bar">
			<div class="type_logo float_l">
                <h1>
                    <a href="#"></a>
                </h1>
            </div> <!-- type_logo -->

            <div class="menu_button float_r">
				<ul>
					<li><a href="index.php" >Utama</a></li>
	                <li><a href="yosh.php" >Apa Itu Yosh</a></li>
	                <li><a href="#" >Blog</a></li>
	                <li><a href="daftar.php" >Daftar</a></li>
	                <li><a href="hubungi.php" >Hubungi</a></li>
	                <li><a href="tentang.php" >Tentang</a></li>
	            </ul>
            </div><!-- menu_button -->
            <div class="clear"></div> <!--clear div -->
		</div><!-- sales_menu_bar -->
	</div> <!-- sales_menu_wrapper -->

	<div id="reg_wrapper">
		<div id="reg_section_1">
			<div id="intro_section_1">
				<h1>Borang Pendaftaran Pelan Yosh!</h1>

				<p>Untuk makluman anda, Bayaran pendaftaran sebagai ahli Yosh! hanyalah <span>RM100</span> manakala <span>RM60</span> adalah bayaran maintenance yang hanya dibayar setiap 3 bulan. Untuk pendafataran baru, anda dikehendaki membayar sebanyak <span>RM160</span> untuk memperoleh satu akaun Yosh yang aktif selama 3 bulan. Hanya selepas 3 bulan, barulah anda dikehendaki untuk memperbaharui keahlian anda.</p>

				<p>Untuk  mendaftar keahlian, anda hanya perlu mengisi borang pendaftaran pelan berdasarkan langkah - langkah yang ditunjukan dibawah.Jika anda mempunyai sebarang persoalan mengenai pembayaran, sila hubungi kami melalui emel <span>bantuan@flarebiz.com</span></p>
			</div> <!-- intro_section_1 -->
		</div> <!-- reg_section_1 -->

		<div id="reg_section_2">
			<div id="title_step">
				<h1>Langkah Pertama</h1>
			</div> <!-- title_step -->
			
			<div id="step_1">
				<div id="option_1">
					<div class="option_left float_l">
						<h1>Pilihan 1</h1>
					</div> <!-- option_left -->

					<div class="option_right float_l">
						<p>Depositkan wang sebanyak RM160 ke dalam salah satu akaun berikut mengunakan perbankan internet / deposit bank / ATM deposit / ATM Transfer.</p>
					</div> <!-- option_right -->

					<div class="clear"></div> <!--clear div -->

					<div id="table_section">
						<table id="table_account_bank">
						    <thead>
						    	<tr>
						        	<th scope="col">Bank</th>
						            <th scope="col">Nama</th>
						            <th scope="col">No Akaun</th>
						        </tr>
						    </thead>

						    <tbody>
						    	<tr>
						        	<td>Maybank</td>
						            <td>Flarebiz Network Sdn Bhd</td>
						            <td>514066142543</td>
						        </tr>

						        <tr>
						        	<td>CIMB Bank</td>
						            <td>Idris Bin Husin</td>
						            <td>14320001842200</td>
						        </tr>
						    </tbody>
						</table>

						<p>*Pembayaran secara online ialah <span>RM160</span> sahaja. Masukkan alamat email <span>bantuan@flarebiz.com</span> di ruangan email penerima bayaran.</p>
					</div> <!-- table_section -->
				</div> <!-- option_1 -->

				<div class="line-separator-order"></div> <!-- line-separator-order -->

				<div id="option_2">
					<div class="option_left float_l">
						<h1>Pilihan 2</h1>
					</div> <!-- option_left -->

					<div class="option_right float_l">
						<p>Jika anda ingin melakukan pembayaran melalui akaun Paypal , anda perlu melengkapkan pembayaran tempahan melalui link di berikan dibawah.</p>
					</div> <!-- option_right -->

					<div class="clear"></div> <!--clear div -->

					<div id="button_paypal">
						<div class="button_register ">
							<a href="">Daftar Sekarang!</a>
						</div> <!-- button_register -->
					</div> <!--button_paypal -->

					<div id="remark">
						<p>*Jika anda membuat pembayaran melalui paypal, anda akan diredirect balik ke page ini untuk anda mengisi borang pengesahan.</p>
					</div> <!--remark -->
				</div> <!-- option_2 -->
			</div> <!-- step_1 -->
		</div> <!-- reg_section_2 -->

		<div class="line-separator"></div> <!-- separator_line -->

		<div id="reg_section_3">
			<div id="title_step">
				<h1>Langkah Kedua</h1>
			</div> <!-- title_step -->

			<div id="step_2">
				<div class="option_left float_l">
					<h1>Borang</h1>
				</div> <!-- option_left -->

				<div class="option_right float_l">
					<p>Sila isikan maklumat-maklumat penting berikut dengan lengkap dan sila <span>paste</span> bukti pembayaran anda pada borang di bawah untuk mempercepatkan proses pembelian.</p>
				</div> <!-- option_right -->

				<div class="clear"></div> <!--clear div -->

				<div id="register_form">
					<form id="form" action="/" method="post">	
		
						<fieldset>
							<ul>
								<li>
									<div class="reg_label float_l">
										<label for="name">Nama :</label>
									</div> <!--reg_label-->

									<div class="reg_input float_l">
										<input type="text" name="name" placeholder="Nama Penuh" id="name" size="30" />
									</div> <!--reg_input-->
									<div class="clear"></div> <!--clear div -->
								</li>

								<li>
									<div class="reg_label float_l">
										<label for="email">Email :</label>
									</div> <!--reg_label-->

									<div class="reg_input float_l">
										<input type="text" name="email" placeholder="Email Utama" id="email" size="30" />
									</div> <!--reg_input-->
									<div class="clear"></div> <!--clear div -->
								</li>

								<li>
									<div class="reg_label float_l">
										<label for="web">No. Telefon :</label>
									</div> <!--reg_label-->

									<div class="reg_input float_l">
										<input type="text" name="web" placeholder="No Telefon Utama" id="web" size="30" />
									</div> <!--reg_input-->
									<div class="clear"></div> <!--clear div -->
								</li>

								<li>
									<div class="reg_label float_l">
										<label for="address">Alamat :</label>
									</div> <!--reg_label-->

									<div class="reg_input float_l">
										<textarea name="message" id="address" placeholder="Alamat Surat Menyurat" cols="30" rows="10"></textarea>
									</div> <!--reg_input-->
									<div class="clear"></div> <!--clear div -->
								</li>

								<li>
									<div class="reg_label float_l">
										<label for="Pelan">Pilihan Pelan :</label>
									</div> <!--reg_label-->

									<div class="reg_input float_l">
										<select  class="selection">
											<option value="">Pelan 3 Bulan (RM160)</option>
											<option value="">Pelan 6 Bulan (RM210)</option>
											<option value="">Pelan 1 Tahun (RM320)</option>
										</select>
									</div> <!--reg_input-->
									<div class="clear"></div> <!--clear div -->
								</li>

								<li>
									<div class="reg_label float_l">
										<label for="web">Tarikh Bayaran :</label>
									</div> <!--reg_label-->

									<div class="reg_input float_l">
										<input id="datepicker" name="date" placeholder="Klik Disini" type="text" />
									</div> <!--reg_input-->
									<div class="clear"></div> <!--clear div -->
								</li>

								<li>
									<div class="reg_label float_l">
										<label for="payment_time">Waktu Pembayaran :</label>
									</div> <!--reg_label-->

									<div class="reg_input float_l">
										<input type="text" name="payment_time" placeholder="Waktu Pembayaran Dilakukan" id="payment_time" size="30" />
									</div> <!--reg_input-->
									<div class="clear"></div> <!--clear div -->
								</li>

								<li>
									<div class="reg_label float_l">
										<label for="Bank">Bank :</label>
									</div> <!--reg_label-->

									<div class="reg_input float_l">
										<select  class="selection2">
											<option value="">Maybank</option>
											<option value="">CIMB</option>
											<option value="">Paypal</option>
										</select>
									</div> <!--reg_input-->
									<div class="clear"></div> <!--clear div -->
								</li>

								<li>
									<div class="reg_label float_l">
										<label for="Payment Method">Kaedah Bayaran :</label>
									</div> <!--reg_label-->

									<div class="reg_input float_l">
										<select  class="selection3">
											<option value="">Perbankan/Pemindahan Internet</option>
											<option value="">Deposit ATM</option>
										</select>
									</div> <!--reg_input-->
									<div class="clear"></div> <!--clear div -->
								</li>

								<li>
									<div class="reg_label float_l">
										<label for="payment_proof">Bukti Pembayaran :</label>
									</div> <!--reg_label-->

									<div class="reg_input float_l">
										<textarea name="message" id="payment_proof" placeholder="Bukti Pembayaran" cols="30" rows="10"></textarea>
									</div> <!--reg_input-->
									<div class="clear"></div> <!--clear div -->
								</li>

								<li>
									<div class="reg_label float_l">
										<label for="shop_name">Nama Kedai :</label>
									</div> <!--reg_label-->

									<div class="reg_input float_l">
										<div class="float_l"><input type="text" name="shop_name" placeholder="Yang Anda Mahukan" id="shop_name" size="30"/></div>
										<div class="reg_label float_l"><p>.myyosh.my</p></div> <!--.myyosh.my-->
										<div class="clear"></div> <!--clear div -->
									</div> <!--reg_input-->
									<div class="clear"></div> <!--clear div -->
								</li>

								<li>
									<div class="reg_label float_l"></div> <!--reg_label-->
									<div class="reg_input float_l">
										<input type="submit" name="submit" value="submit"/>
									</div> <!--reg_input-->
									<div class="clear"></div> <!--clear div -->
								</li>
							</ul>										
						</fieldset>								
					</form>
				</div> <!-- register_form -->
			</div> <!-- step_2 -->
		</div> <!-- reg_section_3 -->


		<div id="reg_section_4">
			<div id="title_step">
				<h1>Langkah Ketiga</h1>
			</div> <!-- title_step -->

			<div id="step_3">
				<div class="option_left float_l">
					<h1>Semakan</h1>
				</div> <!-- option_left -->

				<div class="option_right float_l">
					<p>Seretusnya pihak kami akan menyemak borang pengesahan anda dan akan menghantar ruangan download kepada anda setelah proses pendaftaran berjaya.</p>

					<ul>
						<li><p>Jika terdapat sebarang masalah hubungi kami melalui :</p></li>
						<li><p>Email : <span>bantuan@flarebiz.com</span></p></li>
						<li><p>Talian Bantuan : <span>019-3855569</span> (Zairol) / <span>019-3131796</span> (Ros).</p></li>
					</ul>

				</div> <!-- option_right -->

				<div class="clear"></div> <!--clear div -->

				<div id="register_form"></div> <!-- register_form -->
			</div> <!-- step_2 -->
		</div> <!-- reg_section_4 -->
	</div> <!-- reg_wrapper -->


	<div id="footer_wrapper">
		<div id="footer">
			<div class="section_w210 margin_r_20">
	            <h3>YOSH!</h3>
	            <div class="sub_content">
	                <ul class="footer_list">
	                	<li><a href="#" >Utama</a></li>
	                    <li><a href="#" >Testimonial</a></li>
	                    <li><a href="#" >Daftar Ahli</a></li>
	                    <li><a href="#" >Tentang Kami</a></li>
	                    <li><a href="#" >Affiliate</a></li>
	                    <li><a href="#" >Bantuan & Sokongan</a></li>
	                    <li><a href="#" >Syarat & Terma</a></li>
	                    <li><a href="#" >F.A.Q</a></li>               
	                </ul>  
	            </div> <!-- sub_content -->   
	        </div> <!-- section_w210 -->
        
	        <div class="section_w210 margin_r_20">
	            <h3>BLOG</h3>
	            <div class="sub_content">
	                <ul class="footer_list">
	                	<li><a href="#">Telekung Paris Hilton</a></li>
	                    <li><a href="#">Blouse Muslimah</a></li>
	                    <li><a href="#">Tudung Syiria</a></li>
	                    <li><a href="#">Tudung Bawal 2 Tones</a></li>
	                    <li><a href="#">Kad Ucapan Teddy Bear Besar</a></li>
	                    <li><a href="#">Jam Azan</a></li>
	                    <li><a href="#">Kad Ucapan Teddy Bear Besar</a></li>
	                </ul>
	           	</div>  <!-- sub_content --> 
	        </div> <!-- section_w210 -->
        
	        <div class="section_w210 margin_r_20">
	            <h3>FACEBOOK KAMI</h3>	            
	            <div class="facebook_like">	            
	            	<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FYosh.my&amp;width=210&amp;height=258&amp;colorscheme=dark&amp;show_faces=true&amp;border_color=%23181717&amp;stream=false&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:210px; height:258px;" allowTransparency="true"></iframe>
	            </div>  <!-- facebook_like -->	                
	        </div> <!-- section_w210 -->
        
	        <div class="section_w210">	        	
	       		<h3>HUBUNGI KAMI</h3>	            
	            <div class="sub_content">                
	                <div id="map">
	                	<h1>
	                    	<a href="hubungi.html">Map!</a>
	                	</h1>
	            	</div>

	            	<div class="clear_h120"></div>

	    			<ul class="footer_list">
	                    <li>Flarebiz Network Sdn. Bhd. (922120-D)</li>
	                    <li>31-4-2 Diamond Square Business Centre</li>
	                    <li>Jalan 3/50, Off Jalan Gombak)</li>
	                    <li>53000 Setapak, Kuala Lumpur</li>   
	        		</ul>

	        		<ul class="footer_list">
	                    <li>Tel : +603 4023 4641</li>
	                    <li>Email : support@flarebiz.com</li>  
	        		</ul>
	            </div>  <!-- sub_content -->	            
	        </div> <!-- section_w210 -->

	        <div class="line-separator"></div>

        	<div id="yosh_logo">
				<h1>
                	<a href="#">Yosh!</a>
            	</h1>
        	</div> <!-- yosh -->

			<div id="copyright">
				<p>
		        	Hakcipta terpelihara 2011 <a href="#">Yosh.my.</a> Sebarang aktiviti duplikasi data dalam semua bentuk tanpa izin adalah dilarang. 
		        </p>
	        </div> <!-- copyright -->
	        
	        <div id="icon">
	        	<ul>
	        		<li><a href="#" id="facebook">Facebook</a></li>
	        		<li><a href="#" id="twitter">Twitter</a></li>
	        		<li><a href="#" id="rss">RSS</a></li>
	        	</ul>
	        </div> <!-- icon -->
	        
	        <div class="clear"></div>
		</div> <!-- footer -->
	</div> <!-- footer_wrapper -->
</body>
</html>
