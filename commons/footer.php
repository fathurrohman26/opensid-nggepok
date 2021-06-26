<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Link Terkait</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="<?= site_url('siteman') ?>" target="_blank">Login</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="<?= site_url('mandiri_web') ?>" target="_blank">Layanan Mandiri</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="https://opendesa.id/sistem-informasi-desa-opensid/" target="_blank">OpenSID</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="<?= THEME_URL ?>" target="_blank">Matzdes</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Kategori</h4>
          <ul>
            <?php foreach($menu_kiri as $row): ?>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= site_url('artikel/kategori/'.$row['slug']) ?>"><?= $row['kategori'] ?></a></li>
            <?php endforeach ?>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-contact">
          <h4>Hubungi Kami</h4>
          <p>
            <?= $desa['alamat_kantor']?><br>
            <?= ucwords($this->setting->sebutan_kecamatan." ".$desa['nama_kecamatan'])?> <?= ucwords($this->setting->sebutan_kabupaten." ".$desa['nama_kabupaten'])?> Provinsi <?= $desa['nama_propinsi']?> Kode Pos <?= $desa['kode_pos']?>
            <br><br>
            <strong>Phone:</strong> <?= $desa['telepon'] ?><br>
            <strong>Email:</strong> <?= $desa['email_desa'] ?><br>
          </p>

        </div>

        <div class="col-lg-3 col-md-6 footer-info">
          <h3><?= trim(ucwords($this->setting->sebutan_desa) . ' ' . $desa['nama_desa']) ?></h3>
          <p>Media Sosial</p>
          <div class="social-links mt-3">
            <?php foreach ($sosmed as $row): ?>
              <a target="_blank" href="<?= $row['link'] ?>" class="<?= strtolower($row['nama']) ?>"><i class="bx bxl-<?= strtolower($row['nama']) ?>"></i></a>
            <?php endforeach ?>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      Hak cipta &copy; <?= date('Y') ?> <?= trim(ucwords($this->setting->sebutan_desa) . ' ' . $desa['nama_desa']) ?> - <a href="<?= THEME_URL ?>" target="_blank">Tema Nggepok <?= THEME_VERSION ?></a> | <a href="https://github.com/opensid/opensid/" target="_blank">OpenSID <?= ambilVersi() ?></a>
    </div>
    <div class="credits">
      Template by <a href="https://bootstrapmade.com/" target="_blank">BootstrapMade</a>
    </div>
  </div>
</footer>