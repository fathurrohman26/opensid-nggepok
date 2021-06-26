<article class="entry entry-single">
	<h2 class="entry-title">
		<a href="#!">Arsip Konten</a>
	</h2>
	<div class="entry-content">
		<div class="">
			<?php if (count($farsip) > 0): ?>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<td width="3%"><b>No.</b></td>
							<td width="20%"><b>Tanggal Artikel</b></td>
							<td><b>Judul Artikel</b></td>
							<td width="20%"><b>Penulis</b></td>
						</tr>
					</thead>
					<tbody>
						<?php foreach($farsip AS $data): ?>
							<tr>
								<td>
									<?= $data["no"]?>
								</td>
								<td>
									<?= tgl_indo($data["tgl_upload"])?>
								</td>
								<td>
									<a class="archive__link" href="<?= site_url('artikel/'.buat_slug($data))?>"><?= $data["judul"]?></a>
								</td>
								<td>
									<?= $data["owner"]?>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			<?php else: ?>
				<p>Belum ada arsip konten web.</p>
			<?php endif ?>
		</div>
	</div>
	<?php $data['paging_page'] = 'arsip' ?>
	<?php $this->load->view($folder_themes .'/commons/pagination', $data) ?>
</article>