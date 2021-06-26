<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view($folder_themes . '/commons/meta') ?>
	<?php $this->load->view($folder_themes . '/commons/css_init') ?>
</head>
<body>
	<?php $this->load->view($folder_themes .'/commons/header') ?>
	<main id="main">
		<section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
			<div class="container-fluid">

				<div class="row">

					<div class="col-lg-8 entries">
						<article class="entry entry-single">
							<h2 class="entry-title">
								<a href="#!"><?= $heading ?></a>
							</h2>
							<div class="entry-content">
								<?php $statis =  str_replace('web/halaman_statis', 'statis', $halaman_statis); ?>
								<?php $this->load->view($folder_themes . '/partials/' . $statis) ?>
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
	<?php $this->load->view($folder_themes .'/commons/footer') ?>
	<?php $this->load->view($folder_themes . '/commons/js_init') ?>
</body>
</html>