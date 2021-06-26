<?php $image = ($article['gambar'] && is_file(LOKASI_FOTO_ARTIKEL.'kecil_'.$article['gambar'])) ? AmbilFotoArtikel($article['gambar'],'kecil') : base_url($this->theme_folder.'/'.$this->theme .'/assets/images/placeholder.png') ?>

<article class="entry">

	<div class="entry-img">
		<img src="<?= $image ?>" alt="<?= $article['judul'] ?>" class="img-fluid" width="100%">
	</div>

	<h2 class="entry-title">
		<a href="<?= site_url('artikel/'.buat_slug($article)) ?>"><?= $article['judul'] ?></a>
	</h2>

	<div class="entry-meta">
		<ul>
			<li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="#!"><?= $article['owner'] ?></a></li>
			<li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#!"><time datetime="<?= date('Y-m-d') ?>"><?= tgl_indo($article['tgl_upload']) ?></time></a></li>
		</ul>
	</div>

	<div class="entry-content">
		<p><?= potong_teks(strip_tags($article['isi']), 200) ?>...</p>
		<div class="read-more">
			<a href="<?= site_url('artikel/'.buat_slug($article)) ?>">Baca selengkapnya</a>
		</div>
	</div>

</article>