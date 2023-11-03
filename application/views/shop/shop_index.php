<?php $this->load->view('partials/head-shop');?>
    <!-- SLIDESHOW -->
    <div class="wrapper my-2">
        <div class="container">
            <div id="carouselId" class="carousel slide"data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselId" data-slide-to="1"></li>
                    <!-- <li data-target="#carouselId" data-slide-to="2"></li> -->
                </ol>
                <div class="carousel-inner"  style="height:300px;"  role="listbox">
                    <div class="carousel-item active">
                        <img src="<?php echo base_url();?>assets/images/wallpaper-1.jpg" class="img-fluid" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url();?>assets/images/wallpaper-3.jpg" class="img-fluid" alt="Second slide">
                    </div>
                    <!-- <div class="carousel-item">
                        <img  src="<?php echo base_url();?>assets/images/wallpaper-3.jpg" alt="Third slide">
                    </div> -->
                </div>
                <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!-- SLIDESHOW END -->

    <div class="wrapper my-4">
        <div class="container">
            <div class="row">
                <div class="col-12 py-3">
                  <h2 class="text-center font-weight-bold">Produits Populaires</h2>
                </div> 
            </div>
            <!-- PRODUITS POPULAIRES -->
            <div class="row py-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body p-0">
                            <a href="<?php echo site_url('ShopCtrl/product_details');?>">
                                <img src="<?php echo base_url();?>assets/images/produits/shirt.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="card-footer">
                            <p class="card-text text-center"><a href="<?php echo site_url('ShopCtrl/product_details');?>">Nom Produit</a></p>
                            <p class="card-text text-center">10 000 FCFA</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body p-0">
                            <a href="<?php echo site_url('ShopCtrl/product_details');?>">
                                <img src="<?php echo base_url();?>assets/images/produits/shirt.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="card-footer">
                            <p class="card-text text-center"><a href="<?php echo site_url('ShopCtrl/product_details');?>">Nom Produit</a></p>
                            <p class="card-text text-center">10 000 FCFA</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body p-0">
                            <a href="<?php echo site_url('ShopCtrl/product_details');?>">
                                <img src="<?php echo base_url();?>assets/images/produits/shirt.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="card-footer">
                            <p class="card-text text-center"><a href="<?php echo site_url('ShopCtrl/product_details');?>">Nom Produit</a></p>
                            <p class="card-text text-center">10 000 FCFA</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body p-0">
                            <a href="<?php echo site_url('ShopCtrl/product_details');?>">
                                <img src="<?php echo base_url();?>assets/images/produits/shirt.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="card-footer">
                            <p class="card-text text-center"><a href="<?php echo site_url('ShopCtrl/product_details');?>">Nom Produit</a></p>
                            <p class="card-text text-center">10 000 FCFA</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body p-0">
                            <a href="<?php echo site_url('ShopCtrl/product_details');?>">
                                <img src="<?php echo base_url();?>assets/images/produits/shirt.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="card-footer">
                            <p class="card-text text-center"><a href="<?php echo site_url('ShopCtrl/product_details');?>">Nom Produit</a></p>
                            <p class="card-text text-center">10 000 FCFA</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body p-0">
                            <a href="<?php echo site_url('ShopCtrl/product_details');?>">
                                <img src="<?php echo base_url();?>assets/images/produits/shirt.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="card-footer">
                            <p class="card-text text-center"><a href="<?php echo site_url('ShopCtrl/product_details');?>">Nom Produit</a></p>
                            <p class="card-text text-center">10 000 FCFA</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body p-0">
                            <a href="<?php echo site_url('ShopCtrl/product_details');?>">
                                <img src="<?php echo base_url();?>assets/images/produits/shirt.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="card-footer">
                            <p class="card-text text-center"><a href="<?php echo site_url('ShopCtrl/product_details');?>">Nom Produit</a></p>
                            <p class="card-text text-center">10 000 FCFA</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body p-0">
                            <a href="<?php echo site_url('ShopCtrl/product_details');?>">
                                <img src="<?php echo base_url();?>assets/images/produits/shirt.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="card-footer">
                            <p class="card-text text-center"><a href="<?php echo site_url('ShopCtrl/product_details');?>">Nom Produit</a></p>
                            <p class="card-text text-center">10 000 FCFA</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BLOC TOUS LES PRODUITS -->
            <div class="row">
                <div class="col-12 py-3 text-right">
                    <a href="<?php echo site_url('ShopCtrl/show_all_product');?>"><strong>Tous les produits <i class="fa fa-chevron-right"></i></strong></a>
                </div>
            </div>
            <!-- BLOCK DE TEXTE PERSONNALISE -->
            <div class="row py-3">
                <div class="col-12">
                    <img class="img-fluid" src="<?php echo base_url();?>assets/images/produits/encart_graphique.jpg" alt="">
                </div>
                <div class="col-12 py-4">
                    <h1 class="text-center">Custom Text Block</h1>
                    <h4 class="text-center">sous-titre</h4>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus a magni maiores fugit, itaque dolorum! Labore, ea nostrum? Eius suscipit optio delectus veritatis? Tempore labore cupiditate illo nihil facilis voluptatem commodi, unde, sunt, possimus atque at delectus. Quos, eveniet! Non accusamus dolorum temporibus dolorem sapiente architecto error minus modi dolore.</p>
                </div>
            </div>
            <!-- BLOCK NEWSLETTER -->
            <div class="row py-4 justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <p class="mt-3">Recevez nos offres speciales</p>
                        </div>
                        <div class="col-12 col-md-8">
                            <form class="form-inline my-2 my-lg-0">
                                <div class="input-group input-group-lg col">
                                    <input class="form-control " type="text" placeholder="Votre E-mail">
                                    <div class="input-group-append">
                                        <!-- <span class="input-group-text">Text</span> -->
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> S'Abonner </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('partials/footer-shop');?>
    <?php $this->load->view('partials/foot');?>
