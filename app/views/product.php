<!-- Page Content -->
<div class="container">

  <div class="row">

    <div class="col-lg-3">
      <h1 class="my-4">{sitename}</h1>
      {address}
    </div>
    <!-- /.col-lg-3 -->

    <div class="col-lg-9">
      <div class="card mt-4">
        <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
        <div class="card-body">
          <h3 class="card-title">{name}</h3>
          <h4>Rp. <?php echo $product->price ?></h4>
          <div class="card-text">
            <p><?php echo $product->description ?></p>
            <p>Uang Muka : Rp. <?php echo $product->down_payment ?></p>
          </div>
          <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
          4.0 stars
        </div>
      </div>
      <!-- /.card -->


    </div>
    <!-- /.col-lg-9 -->

  </div>

</div>
<!-- /.container -->
