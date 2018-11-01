<!-- Page Content -->
<div class="container">

  <div class="row">

    <div class="col-lg-3">
      <h1 class="my-4"><?php echo $site['name'] ?></h1>
      <?php echo $site['address'] ?>
      <!-- Embedded Google Map -->
      <iframe class="d-none d-md-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3766882439686!2d106.80573461433409!3d-6.345241095408204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ee8671654a4f%3A0x76896de473825b41!2sDAWENG+MOTOR!5e0!3m2!1sid!2sid!4v1540830982912" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
      <p class="mt-2">
        <a class="btn btn-lg btn-success btn-block" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $site['phone'] ?>?text=Dawenk%Motor">
          <i class="fa fa-lg fa-whatsapp"></i>&nbsp;Whatsapp
        </a>
      </p>
    </div>
    <!-- /.col-lg-3 -->

    <div class="col-lg-9">
      <div class="card mt-4">
        <div id="carouselControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="card-img-top img-fluid" src="http://placehold.it/700x400" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="card-img-top img-fluid" src="http://placehold.it/700x400" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="card-img-top img-fluid" src="http://placehold.it/700x400" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="card-body">
          <h3 class="card-title"><?php echo $product->name ?></h3>
          <h4><strong class="text-primary">Harga Rp.<?php echo $product->price ?></strong></h4>
          <div class="card-text">
            <p>
              <?php echo $product->description ?>
            </p>
            <p><strong>Uang Muka Rp.
              <?php echo $product->down_payment ?></strong>
            </p>
            <p>
              <div class="row justify-content-center">
                <div class="col-lg-6">
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover table-sm">
                      <caption>Pembiayaan melalui <?php echo $product->lease->name ?></caption>
                      <thead class="thead-light text-center">
                        <tr>
                          <th scope="col">Tenor</th>
                          <th scope="col">Angsuran</th>
                          <th scope="col">Flat</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach($product->product_credit as $procre) {
                            ?>
                        <tr>
                          <td class="text-center">
                            <?php echo $procre->credit->tenor ?>x</td>
                          <td class="text-right">Rp.
                            <?php echo $procre->installment ?>
                          </td>
                          <td class="text-center">
                            <?php echo $procre->flat ?>%
                          </td>
                        </tr>
                        <?php
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </p>
            <a class="btn btn-success" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $site['phone'] ?>&text=<?php echo rawurlencode(sprintf('Halo %s, Saya tertarik dengan %s. Apakah ini masih tersedia?', $site['name'], $product->name)) ?>">
              <i class="fa fa-lg fa-whatsapp"></i>
            </a>
            &nbsp;
            <a class="btn btn-primary" href="<?php echo base_url('kredit/' . $product->slug) ?>">
                <i class="fa fa-thumbs-up"></i>&nbsp;Ajukan Kredit !
            </a>
          </div>
        </div>
      </div>
      <!-- /.card -->

      <div class="card card-outline-secondary my-4">
        <div class="card-header">
          Rekomendasi Unit Kendaraan Lainnya
        </div>
        <div class="card-body">
          <?php
            foreach($related as $product_related) {
              ?>
                <div class="row">
                  <div class="col-md-7">
                    <a href="#">
                      <?php echo anchor('unit_kendaraan/' . $product_related->slug, img([
                            'src' => 'http://placehold.it/700x400',
                            'class' => 'img-fluid rounded mb-3 mb-md-0',
                            'alt' => $product_related->name
                          ]))
                        ?>
                    </a>
                  </div>
                  <div class="col-md-5">
                    <h3><?php echo anchor('unit_kendaraan/' . $product_related->slug, $product_related->name) ?></h3>
                    <p><strong class="text-danger">Rp.
                      <?php echo $product_related->price ?></strong>
                    </p>
                  </div>
                </div>
                <!-- /.row -->
                <hr>
              <?php
            }
          ?>

        </div>
      </div>
      <!-- /.card -->

    </div>
    <!-- /.col-lg-9 -->

  </div>

</div>
<!-- /.container -->
