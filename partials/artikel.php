<?php 

$article = $single_artikel;

?>

<main id="main">
	<section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
		<div class="container">

			<div class="row">

				<div class="col-lg-8 entries">

					<article class="entry entry-single">
						<div class="entry-img">
							<?php if($article['gambar'] && is_file(LOKASI_FOTO_ARTIKEL.'sedang_'.$article['gambar'])) : ?>
								<img src="<?= AmbilFotoArtikel($article['gambar'],'sedang') ?>" alt="<?= $article['judul'] ?>" class="img-fluid" width="100%">
							<?php endif ?>
						</div>

						<h2 class="entry-title">
							<a href="#!"><?= $article['judul'] ?></a>
						</h2>

						<div class="entry-meta">
							<ul>
								<li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="#!"><?= $article['owner'] ?></a></li>
								<li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#!"><time datetime="<?= date('Y-m-d') ?>"><?= tgl_indo($article['tgl_upload']) ?></time></a></li>
								<li class="d-flex align-items-center"><i class="icofont-eye"></i> <a href="#!">Dibaca <?= hit($article['hit']) ?></a></li>
							</ul>
						</div>

						<div class="entry-content">
							<?= $article['isi'] ?>

							<?php for($i = 1; $i <= 3; $i++) : ?>
								<?php if($article['gambar'.$i] && is_file(LOKASI_FOTO_ARTIKEL.'sedang_'.$article['gambar'.$i])) : ?>
									<img src="<?= AmbilFotoArtikel($article['gambar'.$i],'sedang') ?>" alt="<?= $article['nama'] ?>" title="<?= $article['nama'] ?>" class="img-fluid">
								<?php endif ?>
							<?php endfor ?>

						</div>

						<div class="entry-footer clearfix">

							<div class="float-left">
								<p>Bagikan Artikel</p>
							</div>

							<div class="float-right share">
								<a href="http://twitter.com/share?url=<?= site_url('artikel/'.buat_slug($article)) ?>" title="Share on Twitter" target="_blank"><i class="icofont-twitter"></i></a>
								<a href="http://www.facebook.com/sharer.php?u=<?= site_url('artikel/'.buat_slug($article))?>" title="Share on Facebook" target="_blank"><i class="icofont-facebook"></i></a>
								<a href="https://telegram.me/share/url?url=<?= site_url('artikel/'.buat_slug($article))?>&text=<?= $article["judul"]; ?>" title="Share on Telegram" target="_blank"><i class="icofont-telegram"></i></a>
								<a href="https://api.whatsapp.com/send?text=<?= site_url('artikel/'.buat_slug($article))?>" target="_blank"><i class="icofont-whatsapp"></i></a>
							</div>

						</div>

					</article><!-- End blog entry -->

					<?php if($article['dokumen']) : ?>
						<div class="blog-author clearfix">
							<img src="<?= base_url($this->theme_folder . '/' . $this->theme) ?>/assets/images/dokumen.png" class="rounded-circle float-left" alt="dokumen">
							<h4>Dokumen Lampiran</h4>
							<br>
							<div class="social-links">
								<a href="<?= base_url(LOKASI_DOKUMEN.$article['dokumen']) ?>"><i class="icofont-download"> <?= $article['link_dokumen'] ?></i></a>
							</div>
						</div>
					<?php endif ?>

					<div class="blog-comments">

						<h4 class="comments-count"><?= count($komentar) ?> Komentar</h4>

						<?php $this->load->view($folder_themes . '/partials/list_komentar') ?>

						<?php if($article['boleh_komentar'] == 1) : ?>
							<?php $this->load->view($folder_themes . '/partials/form_komentar', [ 'post_komen_id' => $article['id'] ]) ?>
						<?php endif ?>

					</div><!-- End blog comments -->

				</div><!-- End blog entries list -->

				<div class="col-lg-4">

					<div class="sidebar">

						<?php $this->load->view($folder_themes . '/widgets/pencarian') ?>

						<div style="overflow: hidden; height: 7px;"></div>
						<?php $this->load->view($folder_themes . '/widgets/menu_kategori') ?>

						<div style="overflow: hidden; height: 7px;"></div>
						<?php $this->load->view($folder_themes . '/widgets/arsip_artikel') ?>

						<div style="overflow: hidden; height: 7px;"></div>
						<?php $this->load->view($folder_themes . '/widgets/aparatur_desa') ?>

						<div style="overflow: hidden; height: 7px;"></div>
						<?php $this->load->view($folder_themes . '/widgets/statistik_pengunjung') ?>

					</div>

				</div>

			</div>

		</div>

	</section>
</main>