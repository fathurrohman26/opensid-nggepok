<style type="text/css">
	#dengut-dengut img
	{
		max-width: 100%;
		max-height: 100%;
		transition: all 0.5s;
		-o-transition: all 0.5s;
		-moz-transition: all 0.5s;
		-webkit-transition: all 0.5s;
	}

	#dengut-dengut img:hover
	{
		transition: all 0.3s;
		-o-transition: all 0.3s;
		-moz-transition: all 0.3s;
		-webkit-transition: all 0.3s;
		transform: scale(1.5);
		-moz-transform: scale(1.5);
		-o-transform: scale(1.5);
		-webkit-transform: scale(1.5);
		box-shadow: 2px 2px 6px rgba(0,0,0,0.5);
	}
</style>

<h3 class="sidebar-title"><i class="fa fa-camera"></i> Galeri Foto</h3>
<hr>
<div class="sidebar-item" id="dengut-dengut">
	<div class="row">
		<?php foreach ($w_gal As $data): ?>
			<?php if (is_file(LOKASI_GALERI . "sedang_" . $data['gambar'])): ?>
				<div class="col-md-6 mb-4">
					<div class="img-thumbnail">
						<a href="<?= site_url('first/sub_gallery/'.$data['id']) ?>" title="<?= 'Album : ' . $data['nama'] ?>">
							<img width="100%" src="<?= AmbilGaleri($data['gambar'],'kecil') ?>" alt="<?= 'Album : ' . $data['nama'] ?>" >
						</a>
					</div>
				</div>
			<?php endif ?>
		<?php endforeach ?>
	</div>
</div>