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
							<div class="table-responsive">
								<table class="table table-bordered table-striped">
									<thead>
										<tr class="text-white" style="background-color: #1e4356;">
											<th>No</th>
											<th>Nama Dusun</th>
											<th>Nama Kepala Dusun</th>
											<th>Jumlah RT</th>
											<th>Jumlah KK</th>
											<th>Jiwa</th>
											<th>Lk</th>
											<th>Pr</th>
										</tr>
									</thead>
									<?php if(count($main) > 0) : ?>
										<tbody>
											<?php $no=1; foreach($main as $data) : ?>
												<tr>
													<td class="text-center"><?= $no++ ?></td>
													<td><?= strtoupper(unpenetration(ununderscore($data['dusun']))) ?></td>
													<td class="text-center"><?= strtoupper(unpenetration($data['nama_kadus'])) ?></td>
													<td class="text-center"><?= $data['jumlah_rt'] ?></td>
													<td class="text-center"><?= $data['jumlah_kk'] ?></td>
													<td class="text-center"><?= $data['jumlah_warga'] ?></td>
													<td class="text-center"><?= $data['jumlah_warga_l'] ?></td>
													<td class="text-center"><?= $data['jumlah_warga_p'] ?></td>
												</tr>
											<?php endforeach ?>
										</tbody>
										<tfoot>
											<tr>
												<th colspan="3">TOTAL</th>
												<th><?= $total['total_rt'] ?></th>
												<th><?= $total['total_kk'] ?></th>
												<th><?= $total['total_warga'] ?></th>
												<th><?= $total['total_warga_l'] ?></th>
												<th><?= $total['total_warga_p'] ?></th>
											</tr>
										</tfoot>
									<?php else : ?>
										<tr><td colspan="6" class='text-center'>Daftar masih kosong</td></tr>
									<?php endif ?>
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
