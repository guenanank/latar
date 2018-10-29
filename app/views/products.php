<!-- Page Content -->
<div class="container">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4">Page Heading
    <small>Secondary Text</small>
  </h1>

  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid" src="http://placehold.it/750x500" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-3"><?php echo $products[0]->name ?></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
      <h3 class="my-3">Project Details</h3>
      <ul>
        <li>Lorem Ipsum</li>
        <li>Dolor Sit Amet</li>
        <li>Consectetur</li>
        <li>Adipiscing Elit</li>
      </ul>
    </div>

  </div>
  <!-- /.row -->

  <div class="row">
  <?php foreach($products as $product) { ?>
    <div class="col-sm-4 my-4">
      <div class="card">
        <img class="card-img-top" src="http://placehold.it/700x400" alt="">
        <div class="card-body">
          <h4 class="card-title">
            <?php echo anchor('unit_kendaraan/' . $product->slug, $product->name) ?>
          </h4>
          <p class="card-text"><span class="text-danger">Rp. <?php echo $product->price ?></span></p>
        </div>
        <div class="card-footer">
          <a href="kredit/{slug}" class="btn btn-primary">Ajukan Kredit !</a>
        </div>
      </div>
    </div>
  <?php } ?>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
