<?php $this->load->view('partials/head-shop');?>

<div class="wrapper my-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="breadcrumb bg-light">
                    <a class="breadcrumb-item" href="#">Home</a>
                    <a class="breadcrumb-item" href="#">Catégories</a>
                    <span class="breadcrumb-item active">Tous Les produits</span>
                </nav>
            </div>
        </div>
        <div class="row">
            <!-- SIDEBAR -->
            <div class="col-12 col-lg-3">
                <div class="card mb-4 shadow">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Tous Les Produits</strong></h5>
                    </div>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title"><strong>FILTRER PAR</strong></h5>
                        <div>
                            <h5 class="py-4">Filtre 1</h5>
                            <!-- FILTRE -->
                            <label class="container-checkbox"> 
                                <span class="mb-2 d-block">Option 1</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>

                            <!-- FILTRE -->
                            <label class="container-checkbox"> 
                                <span class="mb-2 d-block">Option 1</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>

                            <!-- FILTRE -->
                            <label class="container-checkbox"> 
                                <span class="mb-2 d-block">Option 1</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>

                        </div>
                        <div>
                            <h5 class="py-4">Filtre 2</h5>
                            <!-- FILTRE -->
                            <label class="container-checkbox"> 
                                <span class="mb-2 d-block">Option 1</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>

                            <!-- FILTRE -->
                            <label class="container-checkbox"> 
                                <span class="mb-2 d-block">Option 1</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>

                            <!-- FILTRE -->
                            <label class="container-checkbox"> 
                                <span class="mb-2 d-block">Option 1</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>

                        </div>
                        <div>
                            <h5 class="py-4">Filtre 2</h5>
                            <div class="form-group">
                                <input type="number" name="min" id="" value="" min="0" class="form-control" placeholder="Prix Min">
                            </div>
                            <div class="form-group">
                                <input type="number" name="max" id="" value="" min="5000" class="form-control" placeholder="Prix Max">
                            </div>
                        </div>
                        <!-- <p class="card-text">Content</p> -->
                    </div>
                </div>
                
            </div>
            <!-- CONTENT -->
            <div class="col-12 col-lg-9">
                <!-- JUMBOTRON -->
                <div class="jumbotron">
                    <h2 class="font-weight-bold">Title</h2>
                    <p class="lead">Bacon ipsum dolor amet tail t-bone chicken ball tip spare ribs tenderloin sausage leberkas ham hock brisket sirloin. Boudin swine kielbasa, buffalo frankfurter pork belly shankle.</p>
                </div>


                <div class="row justify-content-between">
                    <div class="col-12 col-md-4">
                        <a href="" class="">
                            Il y a Nb articles
                        </a>
                    </div>
                    <div class="col-12 col-md-4">
                        <form method="get" action="">
                            <div class="form-group row">
                                <div class="col-12 col-md-4">
                                    <label for="trier" class="py-2">Trier Par</label>
                                </div>
                                <div class="col-12 col-md-8">
                                    <select id="trier" class="form-control" name="">
                                        <option>Ordre Alphabetique A-Z</option>
                                        <option>Ordre Alphabetique Z-A</option>
                                        <option>Prix Croissant</option>
                                        <option>Prix Décroissant</option>
                                        <option>Meilleures Ventes</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <!-- BLOC PRODUIT -->
                <div class="row py-3">
                    <div class="col-12 col-md-6 col-lg-3"><div class="card">
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
                    <div class="col-12 col-md-6 col-lg-3"><div class="card">
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
                    <div class="col-12 col-md-6 col-lg-3"><div class="card">
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
                    <div class="col-12 col-md-6 col-lg-3"><div class="card">
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
                <div class="row py-3 justify-content-center">
                    <div class="col-12 col-md-4 text-right py-2 px-0">
                        <span class="text-dark font-weight-bold">
                            Affichage de {Nb} Produits sur {Total}
                        </span>
                    </div>
                    <div class="col-12 col-md-5">

                    
                        <div class="btn-group btn-block" role="group" aria-label="Button group">
                            <a href="<?php echo base_url()?>" class="btn btn-primary mr-2" type="button"><i class="fa fa-chevron-left"></i></a>
                            <a class="btn btn-primary" href="<?php echo base_url()?>" type="button">1</a>
                            <a class="btn btn-primary" href="<?php echo base_url()?>" type="button">2</a>
                            <a class="btn btn-primary" href="<?php echo base_url()?>" type="button">3</a>
                            <a class="btn btn-primary" href="<?php echo base_url()?>" type="button">4</a>
                            <a href="<?php echo base_url()?>" class="btn btn-primary ml-2" type="button"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 text-right px-0">
                        <form method="get" action="">
                            <div class="form-group">
                                <select id="my-select" class="form-control" name="">
                                    <option value="-1">Afficher par groupe de</option>
                                    <option value="6">6</option>
                                    <option value="12">12</option>
                                    <option value="24">24</option>
                                </select>
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