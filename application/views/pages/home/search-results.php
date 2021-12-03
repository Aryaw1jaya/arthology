<!-- List Item -->
<div class="container">
	<div class="row mt-5">
		<div class="col-lg-8" style="padding: 10px;">
            <span class="head">Hasil Pencaraian "<?= $_GET['search'] ?? '' ?>" 
            <?php
                if (array_key_exists('category', $_GET)) {
                    echo 'pada ' . $_GET['category'];
                }
            ?>        
        </span>
		</div>
        <div class="col-lg-4 d-flex justify-content-end align-items-center">
				<form style="width: fit-content;" action="<?= base_url('/home/search_product') ?>" method="GET">
					<input type="text" class="artho-search-box" name="search" placeholder="Find Product...">
                    <?php
						if(array_key_exists('category', $_GET)){ ?>
							<input type="text" name="category" readonly hidden value="<?= $_GET['category'] ?>">
                    <?php } ?>
					<input type="submit" class="artho-search-button btn-dark" value="Search" style="background-color: #3b200d;">
				</form>
        </div>
	</div>
    <hr>

    <?php
     if (count($products) > 0) {?>
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
    <?php }else{ ?>
    
        Sayang sekali data tidak ditemukan :(
        
    <?php } ?>
    
	
</div>
<!-- End of List Item -->

<!-- Footer -->
<?php $this->load->view('layouts/_footer') ?>
<!-- End of footer -->
