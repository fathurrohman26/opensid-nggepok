<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view($folder_themes . '/commons/meta') ?>
  <?php $this->load->view($folder_themes . '/commons/css_init') ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha512-Dop/vW3iOtayerlYAqCgkVr2aTr2ErwwTYOvRFUpzl2VhCMJyjQF0Q9TjUXIo6JhuM/3i0vVEt2e/7QQmnHQqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.1.1/highcharts.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.1.1/highcharts-3d.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.5.0/jquery.marquee.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <?php $this->load->view($folder_themes . '/commons/header') ?>
  <main id="main">
    <section class="map">
      <div class="container-fluid">
        <div class="card mb-5">
          <div class="card-body">
           <?php $this->load->view($folder_themes . '/partials/statis/peta') ?>
          </div>
       </div>
     </div>
   </section>
 </main>
 <br><br>
 <?php $this->load->view($folder_themes . '/commons/footer') ?>
 <script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/nggepok.js")?>"></script>

 <script>
  $(document).ready(function(){
    AOS.init({
      duration: 1000,
      once: true
    });

    $("#footer").removeAttr('data-aos');
    $("#header").removeClass('fixed-top');
  });

  $('.fetched-data').on('DOMNodeInserted', 'link[rel=stylesheet]', function () {
    $(this).remove();
  });
</script>
</body>
</html>