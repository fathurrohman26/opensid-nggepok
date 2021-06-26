<script>
	const dataStats = Object.values(<?= json_encode($stat) ?>);
</script>

<main id="main">
	<section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
		<div class="container">

			<div class="row">

				<div class="col-lg-8 entries">

					<article class="entry entry-single">
						<h2 class="entry-title">
							<a href="#!"><center>Demografi Berdasar <?= $heading ?></center></a>
						</h2>

						<hr>

						<div class="entry-content">
							<div class="d-flex justify-content-end">
								<div class="btn-group" role="group" aria-label="Graph Controlls">
									<button class="btn btn-info button__switch" data-type="column">Bar Graph</button>
									<button class="btn btn-secondary button__switch button__switch--active" data-type="pie">Pie Graph</button>
								</div>
							</div>
							<div id="statistics__graph"></div>
							<h3 class="entry-title">Tabel <?= $heading ?></h3>
							<div class="table-responsive">
								<table class="table table-bordered table-striped">
									<thead>
										<tr class="text-white" style="background-color: #1e4356;">
											<th rowspan="2">No</th>
											<th rowspan="2">Kelompok</th>
											<th colspan="2">Jumlah</th>
											<?php if($jenis_laporan == 'penduduk'): ?>
												<th colspan="2">Laki-laki</th>
												<th colspan="2">Perempuan</th>
											<?php endif; ?>
										</tr>
										<tr class="text-white" style="background-color: #1e4356;">
											<th>n</th>
											<th>%</th>
											<?php if($jenis_laporan == 'penduduk'):?>
												<th>n</th>
												<th>%</th>
												<th>n</th>
												<th>%</th>
											<?php endif ?>
										</tr>
									</thead>
									<tbody>
										<?php $i=0; $l=0; $p=0; $hide=""; $h=0; $jm1=1; $jm = count($stat);?>
										<?php foreach ($stat as $data):?>
											<?php $jm1++; if (1):?>
											<?php $h++; if ($h > 12 AND $jm > 10): $hide="lebih"; ?>
										<?php endif;?>
										<tr class="<?=$hide?>">
											<td>
												<?php if ($jm1 > $jm - 2):?>
													<?=$data['no']?>
													<?php else:?>
														<?=$h?>
													<?php endif;?>
												</td>
												<td><?=$data['nama']?></td>
												<td class="<?php ($jm1 <= $jm - 2) and ($data['jumlah'] == 0) and print('nol')?>"><?=$data['jumlah']?>
											</td>
											<td><?=$data['persen']?></td>
											<?php if ($jenis_laporan == 'penduduk'):?>
												<td><?=$data['laki']?></td>
												<td><?=$data['persen1']?></td>
												<td><?=$data['perempuan']?></td>
												<td><?=$data['persen2']?></td>
											<?php endif;?>
										</tr>
										<?php $i += $data['jumlah'];?>
										<?php $l += $data['laki']; $p += $data['perempuan'];?>
									<?php endif;?>
								<?php endforeach;?>
							</tbody>
						</table>
						<div class="d-flex justify-content-between">
							<button class="btn btn-primary" id='showData'>Selengkapnya...</button>
							<button id="tampilkan" onclick="showHideToggle();" class="btn btn-primary">Tampilkan Nol</button>
						</div>
						<?php if (in_array($st, array('bantuan_keluarga', 'bantuan_penduduk'))):?>
							<script>
								const bantuanUrl = '<?= site_url('first/ajax_peserta_program_bantuan')?>';
							</script>
							<h3 class="entry-title mt-4 mb-2">Daftar <?= $heading ?></h3>
							<input id="stat" type="hidden" value="<?=$st?>">
							<div class="">
								<table class="table table-striped table-bordered" id="peserta_program">
									<thead>
										<tr>
											<th>No</th>
											<th>Program</th>
											<th>Nama Peserta</th>
											<th>Alamat</th>
										</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>
						<?php endif ?>
					</div>
				</div>
					</article>

				</div>

				<div class="col-lg-4">
					<?php $this->load->view($folder_themes . '/partials/sidebar') ?>
				</div>
			</div>
		</div>
	</section>
</main>