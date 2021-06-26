<main id="main">
	<section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
		<div class="container">

			<div class="row">

				<div class="col-lg-8 entries">

					<article class="entry entry-single">
						<h2 class="entry-title">
							<a href="#!"><center>Daftar Calon Pemilih Berdasarkan Wilayah (pada tgl pemilihan <?= $heading ?></center></a>
						</h2>

						<hr>

						<div class="entry-content">
							<div class="table-responsive">
								<table class="table table-bordered table-striped">
									<thead>
										<tr class="text-white" style="background-color: #1e4356;">
											<th>No</th>
											<th>Nama Dusun</th>
											<th>RW</th>
											<th>Jiwa</th>
											<th>Lk</th>
											<th>Pr</th>
										</tr>
									</thead>
									<tbody>
										<?php $i=0; ?>
										<?php foreach($main as $data): ?>
											<tr>
												<td class="text-center"><?= $data['no'] ?></td>
												<td><?= strtoupper($data['dusun']) ?></td>
												<td><?= strtoupper($data['rw']) ?></td>
												<td><?= $data['jumlah_warga'] ?></td>
												<td><?= $data['jumlah_warga_l'] ?></td>
												<td><?= $data['jumlah_warga_p'] ?></td>
											</tr>
											<?php $i = $i+$data['jumlah']; ?>
										<?php endforeach; ?>
									</tbody>
								</table>
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
