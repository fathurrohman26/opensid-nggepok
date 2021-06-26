<header id="header" class="fixed-top">
  <div class="container">

    <div class="logo float-left">
      <h1 class="text-light">
        <a href="<?= site_url() ?>"><span><?= trim(ucwords($this->setting->sebutan_desa) . ' ' . $desa['nama_desa']) ?></span></a>
      </h1>
    </div>

    <nav class="nav-menu float-right d-none d-lg-block">
      <ul>
        <li><a href="<?= site_url() ?>">Beranda</a></li>
        <?php foreach($menu_atas as $data): ?>
          <?php if (count($data['submenu']) > 0): ?>
            <li class="drop-down">
              <a href="<?= $data['link'] ?>"><?= $data['nama'] ?></a>
              <ul>
                <?php foreach($data['submenu'] as $sub): ?>
                  <li><a href="<?= $sub['link'] ?>"><?= $sub['nama'] ?></a></li>
                <?php endforeach ?>
              </ul>
            </li>
          <?php else: ?>
            <li><a href="<?= $data['link'] ?>"><?= $data['nama'] ?></a></li>
          <?php endif ?>
        <?php endforeach ?>
      </ul>
    </nav><!-- .nav-menu -->

  </div>
</header>