
<?php foreach($komentar as $row): ?>
	<div id="comment-1" class="comment clearfix">
		<h5><a href="#!"><?= $row['owner'] ?></a></h5>
		<time datetime="<?= date('Y-m-d') ?>"><?= tgl_indo2($row['tgl_upload'])?></time>
		<p>
			<?= $row['komentar'] ?>
		</p>
	</div>
<?php endforeach ?>