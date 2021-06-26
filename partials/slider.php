<section id="hero" class="d-flex justify-cntent-center align-items-center">
  <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

    <?php $no = 0; foreach($slider_gambar['gambar'] as $data): ?>
      <div class="carousel-item <?php ($no === 0) and print('active') ?>">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"><?= $data['judul'] ?></h2>
          <p class="animate__animated animate__fadeInUp"></p>
          <a href="<?= site_url('artikel/'.buat_slug($data)) ?>" class="btn-get-started animate__animated animate__fadeInUp">Selengkapnya</a>
        </div>
      </div>
    <?php $no++; endforeach ?>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
</section>