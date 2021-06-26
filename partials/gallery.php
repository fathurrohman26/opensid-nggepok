<article class="entry entry-single">
	<h2 class="entry-title">
		Galeri Album <a href="<?= site_url('first/gallery') ?>"><?= $parrent['nama'] ?></a>
	</h2>
	<div class="entry-content portfolio">
		<?php if($gallery) : ?>
			<div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
				<?php foreach ($gallery as $album): ?>
					<?php if(is_file(LOKASI_GALERI . "kecil_" . $album['gambar'])) : ?>
						<?php $link = site_url('first/sub_gallery/'.$album['id']) ?>
						<div class="col-lg-4 col-md-6">
							<div class="portfolio-item">
								<a href="<?= $link ?>">
									<img class="img-fluid" src="<?= AmbilGaleri($album['gambar'],'kecil') ?>" alt="<?= $album['nama'] ?>" title="<?= $album['nama'] ?>">
								</a>
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