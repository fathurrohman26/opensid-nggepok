<?php 
$pages = array();
for($i=$paging->start_link; $i<=$paging->end_link; $i++) {
  array_push($pages, $i);
}
?>

<div class="blog-pagination">
  <ul class="justify-content-center">
    <?php if($paging->start_link) : ?>
      <li class="">
        <a href="<?= site_url('first/'.$paging_page.'/'.$paging->start_link)?>"><i class="fa fa-angle-double-left"></i></a>
      </li>
    <?php endif ?>
    <?php if($paging->prev) : ?>
      <li class="">
        <a href="<?= site_url('first/'.$paging_page.'/'.$paging->prev.$paging->suffix)?>"><i class="fa fa-chevron-left"></i></a>
      </li>
    <?php endif ?>
    <?php foreach($pages as $page) : ?>
      <li class="<?php ($p == $page) and print('active') ?>">
        <a href="<?= site_url('first/'.$paging_page.'/'.$page.$paging->suffix)?>"><?= $page ?></a>
      </li>
    <?php endforeach ?>
    <?php if($paging->next) : ?>
      <li class="">
        <a href="<?= site_url('first/'.$paging_page.'/'.$paging->next.$paging->suffix)?>"><i class="fa fa-chevron-right"></i></a>
      </li>
    <?php endif ?>
    <?php if($paging->end_link) : ?>
      <li class="">
        <a href="<?= site_url('first/'.$paging_page.'/'.$paging->end_link)?>"><i class="fa fa-angle-double-right"></i></a>
      </li>
    <?php endif ?>
  </ul>
</div>