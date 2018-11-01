<!-- Page Content -->
<div class="container">
  <?php $first_product = array_shift($products) ?>
  <!-- Portfolio Item Heading -->
  <h1 class="my-4">Unit Kendaraan Terbaru</h1>

  <div class="row">

    <div class="col-md-8">
      <?php echo anchor('unit_kendaraan/' . $first_product->slug, img([
          'src' => 'http://placehold.it/700x400',
          'alt' => $first_product->name,
          'class' => 'img-fluid'
        ])) ?>
    </div>

    <div class="col-md-4">
      <h3 class="my-3">
        <?php echo anchor('unit_kendaraan/' . $first_product->slug, $first_product->name) ?>
      </h3>
      <p><strong class="text-danger">Rp.
        <?php echo $first_product->price ?></strong>
      </p>
      <p>
        <?php echo word_limiter($first_product->description, 7) ?>
      </p>
      <p>
        <a class="btn btn-success" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $site['phone'] ?>&text=<?php echo rawurlencode(sprintf('Halo %s, Saya tertarik dengan %s. Apakah ini masih tersedia?', $site['name'], $first_product->name)) ?>">
          <i class="fa fa-lg fa-whatsapp"></i>
        </a>
        &nbsp;
        <a class="btn btn-primary" href="<?php echo base_url('kredit/' . $first_product->slug) ?>">
            <i class="fa fa-thumbs-up"></i>&nbsp;Ajukan Kredit !
        </a>
      </p>
    </div>

  </div>
  <!-- /.row -->

  <div class="row">

    <?php
  foreach($products as $product) {
    ?>
    <div class="col-sm-4 my-4">
      <div class="card">
        <?php echo anchor('unit_kendaraan/' . $product->slug, img([
            'src' => 'http://placehold.it/700x400',
            'alt' => $product->name,
            'class' => 'card-img-top'
          ])) ?>
        <div class="card-body">
          <h4 class="card-title">
            <?php echo anchor('unit_kendaraan/' . $product->slug, $product->name) ?>
          </h4>
          <p class="card-text"><span class="text-danger">Rp. <?php echo $product->price ?></span></p>
        </div>
        <div class="card-footer">
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
    <?php } ?>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
