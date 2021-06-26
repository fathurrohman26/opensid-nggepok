<?php
$title = (!empty($judul_kategori))? $judul_kategori: 'Artikel Terkini';
if(is_array($title)){
	foreach($title as $item){
		$title = $item;
	}
}

if (empty($this->input->get('cari')) AND ((count($slide_galeri) > 0 || count($slide_artikel) > 0)) AND $this->uri->segment(2) != 'kategori') {
	$this->load->view($folder_themes .'/partials/slider');
}
?>

<main id="main">
	<section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
		<div class="container">

			<div class="section-title">
				<h2><i class="fa fa-newspaper-o"></i> <?= $title ?></h2>
			</div>

			<div class="row">

				<div class="col-lg-8 entries">

					<?php 
					
					if ($artikel) {
						foreach ($artikel as $data) {
							$this->load->view($folder_themes . '/partials/list_artikel', ['article' => $data]);
						}
					} else {
						$this->load->view($folder_themes . '/partials/empty_artikel', [ 'title' => $title ]);
					}

					$this->load->view($folder_themes . '/commons/pagination');

					?>

				</div>
				<!-- End blog entries list -->

				<div class="col-lg-4">
					<?php $this->load->view($folder_themes . '/partials/sidebar') ?>
				</div>
				<!-- End blog sidebar -->

			</div><!-- End .row -->

		</div><!-- End .container -->

	</section>
</main>