<?php
$posts = $this->session->userdata('post');
if ($posts) {
	$owner = $posts['owner'];
	$email = $posts['email'];
	$no_hp = $posts['no_hp'];
	$komen = $posts['komentar'];
	$captcha = $posts['captcha_code'];
} else {
	$owner = null;
	$email = null;
	$no_hp = null;
	$komen = null;
	$captcha = null;
}

$pesan = $this->session->flashdata('flash_message');
if (isset($_SESSION['validation_error'])) {
	$label = ($_SESSION['validation_error'] === false) ? 'info' : 'warning';
} else {
	$label = 'info';
}
?>
<div class="reply-form" id="kolom-komentar">
	<h4>Tinggalkan komentar</h4>
	<p>Email anda tidak akan kami publikasikan. Bidang yang harus diisi ditandai * </p>
	<form action="<?= site_url('add_comment/' . $post_komen_id) ?>" method="post">
		<div class="row">
			<?php if ($pesan): ?>
				<div class="col-md-12">
					<div class="alert alert-dismissible alert-<?= $label ?>">
						<a href="#!" data-dismiss="alert" class="close">&times;</a>
						<p><?= $pesan ?></p>
					</div>
				</div>
			<?php endif ?>
		</div>
		<div class="row">
			<div class="col-md-6 form-group">
				<input name="owner" type="text" class="form-control" placeholder="Nama*" required="required" value="<?= $owner ?>">
			</div>
			<div class="col-md-6 form-group">
				<input name="email" type="email" class="form-control" placeholder="Email*" required="required" value="<?= $email ?>">
			</div>
		</div>
		<div class="row">
			<div class="col form-group">
				<input name="no_hp" type="text" class="form-control" placeholder="Telepon/HP*" required="required" value="<?= $no_hp ?>">
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 form-group">
				<div class="card">
					<div class="">
						<img id="captcha" src="<?= base_url('securimage/securimage_show.php'); ?>" alt="CAPTCHA Image" class="img-fluid"> &nbsp;&nbsp;&nbsp;
						<button class="btn btn-primary btn-sm" onclick="document.getElementById('captcha').src = '<?= base_url()."securimage/securimage_show.php?"?>' + Math.random(); return false">Ganti Gambar</button>
					</div>
				</div>
			</div>
			<div class="col-md-4 form-group">
				<input name="captcha_code" type="text" class="form-control" placeholder="Kode captcha" maxlength="6" required="required" value="<?= $captcha ?>">
			</div>
		</div>
		<div class="row">
			<div class="col form-group">
				<textarea name="komentar" class="form-control" placeholder="Komentar*" required="required"><?= $komen ?></textarea>
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Posting Komentar</button>
	</form>
</div>