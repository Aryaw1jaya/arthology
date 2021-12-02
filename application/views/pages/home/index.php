<!-- Carousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<?php $no = 0;?>
		<?php foreach($banners as $b) : ?>
			<?php $no++;  ?>
			<div class="carousel-item <?php if($no <= 1) { echo "active"; } ?>">
				<img src="<?= base_url() ?>images/banner/<?= $b['image'] ?>" class="d-block w-100">
				<div class="carousel-caption d-none d-md-block  <?= $b['text_color'] ?>">
					<h3 class="text-uppercase"><?= $b['head'] ?></h3>
					<h5 class="mt-3"> <?= $b['content'] ?></h5>
					<a href="<?= base_url('home/detail/' . $b['product_id']) ?>" class="btn btn-success badge-pill mt-3" style="width:200px">ORDER NOW</a>
				</div>
			</div>
		<?php endforeach ?> 
	</div>
	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<!-- End of Carousel -->

<!-- List Item -->
<div class="container">
	<div class="row mt-5">
		<div class="col-lg-12">
			<h3 class="head mb-5">Our Product</h3>
			<div class="col-lg-12">
				<h4 class="mb-4">Shop  by Category</h4>
				<div class="row">
					<div class="ml-3"><button class="btn-dark" style="background-color: #3b200d;"><i class="fas fa-ring"></i><br>Accessories</button></div>
					<div class="ml-3"><button class="btn-dark" style="background-color: #3b200d;"><i class="fas fa-paint-brush"></i><br>Paintings</button></div>
					<div class="ml-3"><button class="btn-dark" style="background-color: #3b200d;"><i class="fas fa-stamp"></i><br>Sculptures</button></div>
					<div class="ml-3"><button class="btn-dark" style="background-color: #3b200d;"><i class="fas fa-couch"></i><br>Furniture</button></div>
				</div>
			</div>
			<hr>
		</div>
	</div>

	<div class="row mb-5">
		<?php foreach($products as $product) : ?>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mt-4">
				<div class="card">
					<img src="<?= base_url() ?>/images/product/<?= $product['image'] ?>" class="card-img-top" alt="<?= $product['name'] ?>">
					<div class="card-body">
						<h6 class="card-title font-weight-bold"><?= $product['name'] ?></h6>
						<h6 class="text-muted"><?= ucfirst($product['edition']) ?> Category</h6>
						<h3 class="text-right text-warning price mt-4">Rp.<?= number_format($product['price']); ?></h3>
						<a href="<?= base_url('home/detail/' . $product['id']) ?>" class="btn btn-sm btn-block mt-4" style="background: #3b200d; color: white; outline-color: #3b200d; outline-style: double; ">See More</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<!-- End of List Item -->

<!-- Footer -->
<?php $this->load->view('layouts/_footer') ?>
<!-- End of footer -->
