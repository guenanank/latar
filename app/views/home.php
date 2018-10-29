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
              <div class="carousel-caption d-none d-md-block">
                <h3><?php echo anchor(sprintf('unitKendaraan/%s', $slider->slug), sprintf('%s %s', $slider->brand->name, $slider->year)) ?></h3>
                <p>DP Mulai Rp. <?php echo $slider->down_payment ?></p>
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

  <!-- Portfolio Section -->
  <h1 class="my-4">Unit Terbaru</h1>

  <div class="row">
    <?php
      foreach($latests as $latest) {
        ?>
          <div class="col-lg-4 col-md-6 mb-4 portfolio-item">
            <div class="card h-100">
              <?php echo anchor(sprintf('unitKendaraan/%s', $latest->slug), img([
                    'src' => 'http://placehold.it/700x400',
                    'class' => 'card-img-top',
                    'alt' => $latest->brand->name
                  ]))
                ?>
              <div class="card-body">
                <h4 class="card-title">
                  <?php echo anchor(sprintf('unitKendaraan/%s', $latest->slug), $latest->brand->name) ?>
                </h4>
                <h5><?php echo $latest->price ?></h5>
                <p class="card-text"><?php echo word_limiter($latest->description, 7) ?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
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
    <div class="col-lg-6">
      <h2>Modern Business Features</h2>
      <p>The Modern Business template by Start Bootstrap includes:</p>
      <ul>
        <li>
          <strong>Bootstrap v4</strong>
        </li>
        <li>jQuery</li>
        <li>Font Awesome</li>
        <li>Working contact form with validation</li>
        <li>Unstyled page elements for easy customization</li>
      </ul>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
    </div>
    <div class="col-lg-6">
      <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
    </div>
  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
