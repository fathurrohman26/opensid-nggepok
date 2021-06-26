<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view($folder_themes . '/commons/meta') ?>
	<?php $this->load->view($folder_themes . '/commons/css_init') ?>
	<script>
		const enable3d = <?=$this->setting->statistik_chart_3d ?> ? true : false;
	</script>
</head>
<body>
	<?php 
	switch ($tipe) {
		case '0':
			$page = '/partials/stats/default';
			break;
		case '3':
			$page = '/partials/stats/regions';
			break;
		case '4':
			$page = '/partials/stats/voters';
			break;
		default:
			$page = '/commons/404';
			break;
	}

	if ($page == '/commons/404') {
		$this->load->view($folder_themes .'/commons/404');
	} else {
		$this->load->view($folder_themes .'/commons/header');
		$this->load->view($folder_themes . $page);
		$this->load->view($folder_themes .'/commons/footer');
		$this->load->view($folder_themes .'/commons/js_init');
	}
	?>
</body>
</html>