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
                <h3><?php echo anchor('unit_kendaraan/' . $slider->slug, $slider->name) ?></h3>
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

  <h1 class="my-4">Unit Kendaraan</h1>
  <!-- Portfolio Section -->
  <div class="row">
    <?php foreach($latests as $latest) { ?>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#">
            <img class="card-img-top" src="http://placehold.it/700x400" alt="<?php echo $latest->name ?>">
          </a>
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

  <hr>

  <!-- Call to Action Section -->
  <div class="row mb-4">
    <div class="col-md-8">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
    </div>
    <div class="col-md-4">
      <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
    </div>
  </div>

</div>
<!-- /.container -->
