<h3 class="sidebar-title"><i class="fa fa-user"></i> Aparatur <?= ucwords($this->setting->sebutan_desa)?></h3>
<div class="sidebar-item">
	<div class="card">
		<div class="card-body">
			<div id="aparatur_desa">
				<div id="carouselAparaturDesa" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<?php $i=0; foreach ($aparatur_desa['daftar_perangkat'] as $data): ?>
						<div class="carousel-item __aparaturWidget <?php ($i === 0) and print('active') ?>" data-nama="<?= $data['nama'] ?>" data-jabatan="<?= $data['jabatan'] ?>" data-nip="<?= $data['pamong_niap'] ?>">
							<img src="<?= $data['foto'] ?>" class="d-block w-100" alt="<?= $data['nama'] ?>">
						</div>
						<?php $i++; endforeach ?>
					</div>
					<a class="carousel-control-prev" href="#carouselAparaturDesa" role="button" data-slide="prev">
						<span class="text-dark"><i class="fa fa-chevron-left"></i></span>
					</a>
					<a class="carousel-control-next" href="#carouselAparaturDesa" role="button" data-slide="next">
						<span class="text-dark"><i class="fa fa-chevron-right"></i></span>
					</a>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<div>
				<h5 class="text-center" id="__aparaturNama"></h5>
				<p class="text-muted text-center"><span id="__aparaturJabatan"></span> <br><?= $this->setting->sebutan_nip_desa ?>: <span id="__aparaturNIP"></span></p>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function (){
		$(document).ready(function(){
			var aparatur = $(".carousel-item.__aparaturWidget.active");

			$('#__aparaturNama').text(aparatur.data('nama'));
			$('#__aparaturJabatan').text(aparatur.data('jabatan'));
			$('#__aparaturNIP').text(aparatur.data('nip'));

			$("#carouselAparaturDesa").on('slide.bs.carousel', function(e){
				var carousel = $(this);
				var aparatur = $(e.relatedTarget);

				$('#__aparaturNama').text(aparatur.data('nama'));
				$('#__aparaturJabatan').text(aparatur.data('jabatan'));
				$('#__aparaturNIP').text(aparatur.data('nip'));
			});
		});
	});
</script>