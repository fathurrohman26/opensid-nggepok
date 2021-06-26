<article class="entry">

	<div class="entry-img">
		<img src="<?= base_url($this->theme_folder.'/'.$this->theme .'/assets/images/empty.svg') ?>" alt="Artikel Kosong" class="img-fluid" width="100%">
	</div>

	<h2 class="entry-title">
		<a href="#!">Belum ada artikel yang dituliskan dalam <?= $title ?></a>
	</h2>

	<div class="entry-meta">
		<ul>
			<li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="#!"><?= trim(ucwords($this->setting->sebutan_desa) . ' ' . $desa['nama_desa']) ?></a></li>
			<li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#!"><time datetime="<?= date('Y-m-d') ?>"><?= tgl_indo(date('Y-m-d')) ?></time></a></li>
		</ul>
	</div>

	<div class="entry-content">
		<p>Silakan kunjungi kembali dalam waktu dekat</p>
	</div>

</article>