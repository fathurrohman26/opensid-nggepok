<article class="entry entry-single">
	<h2 class="entry-title">
		Galeri Album <a href="<?= site_url('first/gallery') ?>"><?= $parrent['nama'] ?></a>
	</h2>
	<div class="entry-content portfolio">
		<?php if($gallery) : ?>
			<div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
				<?php foreach($gallery as $album) : ?>
					<?php if(is_file(LOKASI_GALERI . "kecil_" . $album['gambar'])) : ?>
						<?php $link = AmbilGaleri($album['gambar'],'sedang') ?>
						<div class="col-lg-4 col-md-6">
							<div class="portfolio-item">
								<img src="<?= AmbilGaleri($album['gambar'],'kecil') ?>" class="img-fluid" alt="<?= $album['nama'] ?>">
								<div class="portfolio-info">
									<h3><a href="<?= $link ?>" data-gall="portfolioGallery" class="venobox" title="<?= $data['nama'] ?>"><?= $data['nama'] ?></a></h3>
									<div>
										<a href="<?= $link ?>" data-gall="portfolioGallery" class="venobox" title="<?= $data['title'] ?>"><i class="bx bx-plus"></i></a>
										<a href="<?= site_url('first/gallery') ?>" title="<?= $parrent['nama'] ?>"><i class="bx bx-link"></i></a>
									</div>
								</div>
							</div>
						</div>
					<?php endif ?>
				<?php endforeach ?>
			</div>
		<?php endif ?>
	</div>
	<?php $data['paging_page'] = 'arsip' ?>
	<?php $this->load->view($folder_themes .'/commons/pagination', $data) ?>
</article>