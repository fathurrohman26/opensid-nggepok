<h3 class="sidebar-title"><i class="fa fa-bar-chart"></i> Statistik <?= ucwords($this->setting->sebutan_desa),' ', $desa["nama_desa"] ?></h3>
<div class="sidebar-item card">
	<div id="__widgetStatistik" style="width: 100%; height: 300px; margin: 0 auto"></div>
</div>

<script type="text/javascript">
	$(function() {
		var chart_widget;
		$(document).ready(function(){
			chart_widget = new Highcharts.Chart(
			{
				chart:
				{
					renderTo: '__widgetStatistik',
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false
				},
				title:
				{
					text: 'Jumlah Penduduk'
				},
				yAxis:
				{
					title:
					{
						text: 'Jumlah'
					}
				},
				xAxis:
				{
					categories:
					[
					<?php foreach($stat_widget as $data): ?>
						<?php if ($data['jumlah'] != "-" AND $data['nama']!= "JUMLAH"): ?>
							['<?= $data['jumlah']?> <br> <?= $data['nama']?>'],
						<?php endif; ?>
					<?php endforeach; ?>
					]
				},
				legend:
				{
					enabled:false
				},
				plotOptions:
				{
					series:
					{
						colorByPoint: true
					},
					column:
					{
						pointPadding: 0,
						borderWidth: 0
					}
				},
				series: [
				{
					type: 'column',
					name: 'Populasi',
					data: [
					<?php foreach ($stat_widget as $data): ?>
						<?php if ($data['jumlah'] != "-" AND $data['nama']!= "JUMLAH"): ?>
							['<?= $data['nama']?>',<?= $data['jumlah']?>],
						<?php endif; ?>
					<?php endforeach; ?>
					]
				}]
			});
		});
	});
</script>