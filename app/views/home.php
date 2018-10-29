<header>
  <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <?php
        foreach($sliders as $indexIndicator => $sliderIndicator) {
          ?>
            <li data-target="#carouselIndicators" data-slide-to="<?php echo $indexIndicator ?>" class="<?php echo $indexIndicator == 0 ? 'active' : null ?>"></li>
          <?php
        }
      ?>
    </ol>
    <div class="carousel-inner" role="listbox">
      <?php
        foreach($sliders as $indexSlider => $slider) {
          ?>
            <div class="carousel-item <?php echo $indexSlider == 0 ? 'active' : null ?>" style="background-image: url('http://placehold.it/1900x1080')">
              <div class="carousel-caption">
                <h6><?php echo anchor('unit_kendaraan/' . $slider->slug, $slider->name) ?></h6>
              </div>
            </div>
          <?php
        }
      ?>
    </div>
    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>

<!-- Page Content -->
<div class="container">

  <h1 class="my-4">Unit Terbaru</h1>
  <!-- Portfolio Section -->
  <div class="row">
    <?php foreach($latests as $latest) { ?>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <?php echo anchor('unit_kendaraan/' . $latest->slug, img([
                'src' => 'http://placehold.it/700x400',
                'class' => 'card-img-top',
                'alt' => $latest->name
              ]))
            ?>
          <div class="card-body">
            <h4 class="card-title">
              <?php echo anchor('unit_kendaraan/' . $latest->slug, $latest->name) ?>
            </h4>
            <p class="card-text"><span class="text-danger">Rp. <?php echo $latest->price ?></span></p>
          </div>
        </div>
      </div>
      <?php
    }
  ?>
  </div>
  <!-- /.row -->

  <!-- Features Section -->
  <div class="row">
    <div class="col-lg-4 mb-4">
      <h3><?php echo $site['name'] ?></h3>
      <?php echo $site['address'] ?>
    </div>
    <div class="col-lg-8 mb-4">
      <!-- Embedded Google Map -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3766882439686!2d106.80573461433409!3d-6.345241095408204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ee8671654a4f%3A0x76896de473825b41!2sDAWENG+MOTOR!5e0!3m2!1sid!2sid!4v1540830982912" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
  <!-- /.row -->

  <hr>

  <!-- Call to Action Section -->
  <div class="row mb-4">
    <div class="col-md-8">
      <p><?php echo $site['desc'] ?> </p>
    </div>
    <div class="col-md-4">
      <a class="btn btn-lg btn-success btn-block" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $site['phone'] ?>?text=Dawenk%Motor">
        <i class="fa fa-lg fa-whatsapp"></i>&nbsp;Whatsapp
      </a>
    </div>
  </div>

</div>
<!-- /.container -->
