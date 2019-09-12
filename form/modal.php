<!-- Giriş Yap -->
<div class="modal fade" id="login" role="dialog">
	<div class="modal-dialog" style="
	width: 35%;
	margin: 100px auto;"> 
	<div class="modal-content" style="
	position: relative;
	background-color: #fff;
	-webkit-background-clip: padding-box;
	background-clip: padding-box;
	border: 1px solid #999;
	border: 1px solid rgba(0,0,0,.2);
	border-radius: 6px;
	outline: 0;
	-webkit-box-shadow: 0 3px 9px rgba(0,0,0,.5);
	box-shadow: 0 3px 9px rgba(0,0,0,.5);"> 
	<div class="modal-header" style="
	background: #272E39;
	border-bottom: 1px solid #e2e6e9;
	border-top-left-radius: 4px;
	border-top-right-radius: 4px;
	padding: 13px 16px !important;
	color: #515365 !important;
	font-size: 12px;">
	<button class="modalbtn login">GİRİŞ YAP</button>
	<div class="left">
		<img width="50" src="img/logo.png">
	</div>
</div> 
<div class="modal-body tradeDetail" style="position: relative;padding: 15px;"> 
	<form action="system/ajax.php" method="post">
		<div class="form-group">
			<label for="kullanici_mail">E-Posta Adresiniz</label> 
			<input name="kullanici_mail" class="form-control" id="kullanici_mail" accesskey="1" size="8" type="text" style="background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"
			<?php if (isset($_COOKIE['kullanici_mail']))  { ?>
				value="<?php echo $_COOKIE['kullanici_mail'] ?>"
			<?php } else { ?>
				placeholder="E-Posta Adresiniz"> 
			<?php } ?>
		</div>
		<div class="form-group"> 
			<label for="kullanici_password">Şifreniz</label> 
			<input type="password" class="form-control" size="10" name="kullanici_password" id="kullanici_password" accesskey="2" style="background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"
			<?php if (isset($_COOKIE['kullanici_password']))  { ?>
				value="<?php echo $_COOKIE['kullanici_password'] ?>"
			<?php } else { ?>
				placeholder="Şifreniz"> 
			<?php } ?>
		</div>
		<div class="form-group form-check">  
			<label class="form-chechk-label">Beni Hatırla</label>
			<input style="margin: 10px; top:-3px" type="checkbox" <?php echo isset($_COOKIE['kullanici_mail']) ? "checked" : "" ?> class="form-check-input" name="hatirla">
		</div>
		<div class="form-group">
			<input type="submit" name="kullanicigiris" class="btn btn-success btn-block" value="Giriş Yap" tabindex="104" title="Lütfen öngörülen bölümlere Kullanıcı isminizi ve Şifrenizi giriniz. Yada 'Kayıt Ol'-tuşuna tıklayarak Üye olabilirsiniz." accesskey="s"> 
		</div>
	</form>
</div>
</div> 
</div>
</div>
<!-- Giriş Yap -->

<!-- Modal terms -->
<div class="modal fade" id="kurallar" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header modal-k">
				<h4 class="modal-title" id="termsLabel">PrimeCity Kurallar</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>

				</p>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
	<!-- /.modal -->