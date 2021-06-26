<h3 class="sidebar-title"><i class="fa fa-archive"></i> <a href="<?= site_url('arsip') ?>" style="color: #36657d;">Arsip Artikel</a></h3>
<div class="sidebar-item recent-posts">
	<ul class="nav nav-tabs" id="arsipArtikelTabControll" role="tablist">
		<li class="nav-item" role="presentation">
			<a class="nav-link active" id="terkini-tab" data-toggle="tab" href="#terkini" role="tab" aria-controls="terkini" aria-selected="true">Terkini</a>
		</li>
		<li class="nav-item" role="presentation">
			<a class="nav-link" id="populer-tab" data-toggle="tab" href="#populer" role="tab" aria-controls="populer" aria-selected="false">Populer</a>
		</li>
		<li class="nav-item" role="presentation">
			<a class="nav-link" id="acak-tab" data-toggle="tab" href="#acak" role="tab" aria-controls="acak" aria-selected="false">Acak</a>
		</li>
	</ul>
	<br>
	<div class="tab-content" id="arsipArtikelTab">
		<?php foreach (array('terkini' => 'arsip_terkini', 'populer' => 'arsip_populer', 'acak' => 'arsip_acak') as $jenis => $jenis_arsip) : ?>
			<div id="<?= $jenis ?>" class="tab-pane fade show <?php ($jenis == 'terkini') and print('active') ?>" role="tabpanel" aria-labelledby="<?= $jenis ?>-tab">
				<?php foreach ($$jenis_arsip as $arsip): ?>
					<?php 
					if (is_file(LOKASI_FOTO_ARTIKEL."kecil_".$arsip['gambar'])) {
						$gambar = base_url(LOKASI_FOTO_ARTIKEL."kecil_".$arsip['gambar']);
					} else {
						$gambar = base_url($this->theme_folder.'/'.$this->theme .'/assets/images/placeholder.png');
					}
					?>
					<div class="post-item clearfix">
						<img src="<?= $gambar ?>" alt="<?= $arsip['judul'] ?>">
						<h4><a href="<?= site_url('artikel/'.buat_slug($arsip)) ?>"><?= $arsip['judul'] ?></a></h4>
						<time datetime="<?= date('Y-m-d') ?>"><?= tgl_indo($arsip['tgl_upload']) ?></time>
					</div>
				<?php endforeach ?>
			</div>
		<?php endforeach ?>
	</div>
</div>