<h3 class="sidebar-title"><i class="fa fa-calendar"></i> Agenda</h3>
<div class="sidebar-item recent-posts">
	<ul class="nav nav-tabs" id="agendaTabControll" role="tablist">
		<?php if (count($hari_ini) > 0): ?>
			<li class="nav-item" role="presentation">
				<a class="nav-link active" id="hari-ini-tab" data-toggle="tab" href="#hari-ini" role="tab" aria-controls="hari-ini" aria-selected="true">Hari ini</a>
			</li>
		<?php endif ?>
		<?php if (count($yad) > 0): ?>
			<li class="nav-item" role="presentation">
				<a class="nav-link <?php count($hari_ini) == 0 and print('active')?>" id="yad-tab" data-toggle="tab" href="#yad" role="tab" aria-controls="yad" aria-selected="false">Akan datang</a>
			</li>
		<?php endif ?>
		<?php if (count($lama) > 0): ?>
			<li class="nav-item" role="presentation">
				<a class="nav-link <?php count(array_merge($hari_ini, $yad)) == 0 and print('active')?>" id="lama-tab" data-toggle="tab" href="#lama" role="tab" aria-controls="lama" aria-selected="false">Lama</a>
			</li>
		<?php endif ?>
	</ul>
	<br>
	<div class="tab-content" id="agendaTab">
		<?php if (count(array_merge($hari_ini, $yad, $lama)) > 0): ?>
			<div id="hari-ini" class="tab-pane fade show active" role="tabpanel" aria-labelledby="hari-ini-tab">
				<ul>
					<?php foreach ($hari_ini as $agenda): ?>
						<li>
							<table id="table-agenda" width="100%">
								<tr>
									<td colspan="3"><a href="<?= site_url('artikel/'.buat_slug($agenda))?>"><?= $agenda['judul']?></a></td>
								</tr>
								<tr>
									<th id="label-meta-agenda" width="40%">Waktu</th>
									<td width="5%">:</td>
									<td id="isi-meta-agenda" width="55%"><?= tgl_indo2($agenda['tgl_agenda'])?></td>
								</tr>
								<tr>
									<th id="label-meta-agenda">Lokasi</th>
									<td>:</td>
									<td id="isi-meta-agenda"><?= $agenda['lokasi_kegiatan']?></td>
								</tr>
								<tr>
									<th id="label-meta-agenda">Koordinator</th>
									<td>:</td>
									<td id="isi-meta-agenda"><?= $agenda['koordinator_kegiatan']?></td>
								</tr>
							</table>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div id="yad" class="tab-pane fade show <?php count($hari_ini) == 0 and print('in active')?>" role="tabpanel" aria-labelledby="yad-tab">
				<ul>
					<?php if (count($yad) > 0): ?>
						<?php foreach ($yad as $agenda): ?>
							<li>
								<table id="table-agenda" width="100%">
									<tr>
										<td colspan="3"><a href="<?= site_url('artikel/'.buat_slug($agenda))?>"><?= $agenda['judul']?></a></td>
									</tr>
									<tr>
										<th id="label-meta-agenda" width="40%">Waktu</th>
										<td width="5%">:</td>
										<td id="isi-meta-agenda" width="55%"><?= tgl_indo2($agenda['tgl_agenda'])?></td>
									</tr>
									<tr>
										<th id="label-meta-agenda">Lokasi</th>
										<td>:</td>
										<td id="isi-meta-agenda"><?= $agenda['lokasi_kegiatan']?></td>
									</tr>
									<tr>
										<th id="label-meta-agenda">Koordinator</th>
										<td>:</td>
										<td id="isi-meta-agenda"><?= $agenda['koordinator_kegiatan']?></td>
									</tr>
								</table>
							</li>
						<?php endforeach ?>
					<?php endif ?>
				</ul>
			</div>

			<div id="lama" class="tab-pane fade show <?php count(array_merge($hari_ini, $yad)) == 0 and print('in active')?>" role="tabpanel" aria-labelledby="lama-tab">
				<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="up" width="100%" height="100" align="center" behavior="alternate">
					<ul>
						<?php foreach ($lama as $agenda): ?>
							<li>
								<table id="table-agenda" width="100%">
									<tr>
										<td colspan="3"><a href="<?= site_url('artikel/'.buat_slug($agenda))?>"><?= $agenda['judul']?></a></td>
									</tr>
									<tr>
										<th id="label-meta-agenda" width="40%">Waktu</th>
										<td width="5%">:</td>
										<td id="isi-meta-agenda" width="55%"><?= tgl_indo2($agenda['tgl_agenda'])?></td>
									</tr>
									<tr>
										<th id="label-meta-agenda">Lokasi</th>
										<td>:</td>
										<td id="isi-meta-agenda"><?= $agenda['lokasi_kegiatan']?></td>
									</tr>
									<tr>
										<th id="label-meta-agenda">Koordinator</th>
										<td>:</td>
										<td id="isi-meta-agenda"><?= $agenda['koordinator_kegiatan']?></td>
									</tr>
								</table>
							</li>
						<?php endforeach ?>
					</ul>
				</marquee>
			</div>
		<?php else: ?>
			<p class="text-center">Belum ada Agenda</p>
		<?php endif ?>
	</div>
</div>