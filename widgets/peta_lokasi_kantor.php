<style type="text/css">
	button[aria-expanded=true] .fa-chevron-down {
		display: none;
	}

	button[aria-expanded=false] .fa-chevron-up {
		display: none;
	}

	.tabel-info, tr {
		border-bottom: 1px;
		border: 0px solid;
	}
</style>

<h3 class="sidebar-title"><i class="fa fa-map-marker"></i> <?= "Lokasi Kantor ".ucwords($this->setting->sebutan_desa) ?></h3>
<div class="sidebar-item card">
	<div id="map_canvas" style="height:200px;"></div>
	<div style="overflow: hidden; height: 15px;"></div>
	<a class="btn btn-success btn-block" href="https://www.openstreetmap.org/#map=15/<?=$data_config['lat']."/".$data_config['lng']?>" style="color:#fff;" target="_blank">Buka Peta</a>
	<button class="btn btn-success btn-block" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
		Detail
		<i class="fa fa-chevron-up pull-right"></i>
		<i class="fa fa-chevron-down pull-right"></i>
	</button>
	<div class="collapse" id="collapse2">
		<?php if (is_file(FCPATH . LOKASI_LOGO_DESA . $desa['kantor_desa'])): ?>
			<img class="img-responsive" src="<?=gambar_desa($desa['kantor_desa'], TRUE)?>" alt="Kantor Desa">
			<hr>
		<?php endif ?>
		<table class="table-info">
			<tr>
				<td width="25%">Alamat</td>
				<td>:</td>
				<td width="70%"><?=$desa['alamat_kantor']?></td>
			</tr>
			<tr>
				<td width="25%"><?=ucwords($this->setting->sebutan_desa)." "?></td>
				<td>:</td>
				<td width="70%"><?=$desa['nama_desa']?></td>
			</tr>
			<tr>
				<td width="25%"><?=ucwords($this->setting->sebutan_kecamatan)?></td>
				<td>:</td>
				<td width="70%"><?=$desa['nama_kecamatan']?></td>
			</tr>
			<tr>
				<td width="25%"><?=ucwords($this->setting->sebutan_kabupaten)?></td>
				<td>:</td>
				<td width="70%"><?=$desa['nama_kabupaten']?></td>
			</tr>
			<tr>
				<td width="25%">Kodepos</td>
				<td>:</td>
				<td width="70%"><?=$desa['kode_pos']?></td>
			</tr>
			<tr>
				<td width="25%">Telepon</td>
				<td>:</td>
				<td width="70%"><?=$desa['telepon']?></td>
			</tr>
			<tr>
				<td width="25%">Email</td>
				<td>:</td>
				<td width="70%"><?=$desa['email_desa']?></td>
			</tr>
		</table>
	</div>
</div>

<script>
	//Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
	<?php if (!empty($data_config['lat']) && !empty($data_config['lng'])): ?>
	var posisi = [<?=$data_config['lat'].",".$data_config['lng']?>];
	var zoom = <?=$data_config['zoom'] ?: 10?>;
	<?php else: ?>
		var posisi = [-1.0546279422758742,116.71875000000001];
		var zoom = 10;
	<?php endif; ?>

	var lokasi_kantor = L.map('map_canvas').setView(posisi, zoom);

	//Menampilkan BaseLayers Peta
	var baseLayers = getBaseLayers(lokasi_kantor, '<?=$this->setting->google_key?>');

	L.control.layers(baseLayers, null, {position: 'topright', collapsed: true}).addTo(lokasi_kantor);

	//Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
	<?php if (!empty($data_config['lat']) && !empty($data_config['lng'])): ?>
	var kantor_desa = L.marker(posisi).addTo(lokasi_kantor);
<?php endif; ?>
</script>