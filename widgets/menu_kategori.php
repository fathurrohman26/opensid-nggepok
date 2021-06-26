<h3 class="sidebar-title"><i class="fa fa-bars"></i> Kategori</h3>
<div class="sidebar-item card card-body categories">
	<ul>
		<?php foreach($menu_kiri as $row): ?>
			<li><i class="bx bx-chevron-right"></i> <a href="<?= site_url('artikel/kategori/'.$row['slug']) ?>"><?= $row['kategori'] ?></a></li>
		<?php endforeach ?>
	</ul>
</div>