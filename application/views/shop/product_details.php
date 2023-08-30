<?php $this->load->view('partials/head-shop');?>

<div class="wrapper my-5">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Catégorie 1</a></li>
                <li class="breadcrumb-item"><a href="#">Catégorie 2</a></li>
                <li class="breadcrumb-item active">Produit</li>
            </ol>    
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div>
                    <img src="<?php echo base_url();?>assets/images/produits/shirt-1.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-12 col-md-6">
               <div>
                   <h2 class="font-weight-bold"> Titre Produit</h2>
                   <div> <strike> 10 000FCFA</strike> </div>
                    <div class="py-3"> <strong> 10 000FCFA</strong> </div>
                    <div class="py-3">
                        <p>
                            Description: Lorem ipsum dolor sit amet consectetur adipisicing edivt. Dolore voluptatem totam nemo soluta ipsum necessitatibus.
                        </p>
                    </div>
                    <div class="py-2"><h4>Caractéristique 1</h4></div>
                    <div class="py-2"> 
                        <select name="" class="form-control col-12 col-md-4" id="">
                            <option value="">option 1</option>
                            <option value="">option 2</option>
                            <option value="">option 3</option>
                            <option value="">option 4</option>
                        </select>
                    </div>
                    <div class="py-2"><h4>Caractéristique 2</h4></div>
                    <div class="py-2 d-flex">

                        <div class="btn-group-toggle mr-3" data-toggle="buttons">
                            <label class="btn btn-info">&nbsp;&nbsp;
                                <input type="checkbox"> 
                            </label>
                        </div>

                        <div class="btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-danger">&nbsp;&nbsp;
                                <input type="checkbox"> 
                            </label>
                        </div>
                    </div> 
                    <div class="py-2">
                        <h4>Quantité</h4>
                        <div class="row">
                            <div class="col-12 col-md-2">
                                <input type="number" name="" id="input" class="form-control" value="1" min="1" max="" title="">
                            </div>
                            <div class="col-12 col-md-8">
                                <button class="btn btn-info" type="button" data-toggle="modal" data-target="#recap"> <i class="fa fa-cart-plus" aria-hidden="true"></i> <strong>Ajouter au Panier</strong></button>
                            </div>
                        </div>
                    </div>                   
               </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="recap" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">

            <div class="modal-header text-center">
                <h5 class="modal-title col" id="my-modal-title">Produit Ajouté au panier avec succès <i class="fa fa-check text-success"></i> </h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-lg-5">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div style="height:200px;">
                                        <img src="<?php echo base_url();?>assets/images/produits/shirt-1.jpg" alt="" class="img-fluid h-100">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div>
                                        <h5 class="font-weight-bold"> Titre Produit</h5>
                                        <div class="py-2"> <strong> 10 000FCFA</strong> </div>
                                        <div class="py-2"><h6>Caractéristique 1 : <strong>option 3</strong></h6></div>
                                        <div class="py-2"><h6>Caractéristique 2 : <strong>option 2</strong></h6></div>
                                        <div class="py-2">
                                            <h6>Quantité : <strong>3</strong></h6>
                                        </div>                   
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-12 col-md-6 col-lg-5">
                            <div>
                                <h5 class="font-weight-bold"> Il y'a 3 produits dans votre panier.</h5>
                                <div class="py-2 row"> 
                                    <div class="text-left col">
                                        <strong>Sous-total</strong>
                                    </div>
                                    <div class="text-right col">
                                        <strong>30000 FCFA</strong>
                                    </div>    
                                </div>
                                <div class="py-2 row"> 
                                    <div class="text-left col">
                                        Transport
                                    </div>
                                    <div class="text-right col">
                                        Gratuit
                                    </div>    
                                </div>
                                <div class="pt-2 pb-3 row"> 
                                    <div class="text-left col">
                                        <strong>Total TTC</strong>
                                    </div>
                                    <div class="text-right col">
                                        <strong>30000 FCFA</strong>
                                    </div>    
                                </div>
                                <div class="row"> 
                                    <div class="col">
                                        <a href="<?php echo base_url();?>products" class="btn btn-dark btn-block"><strong>Continuer Mes Achats</strong></a>
                                    </div>
                                    <div class="col">
                                        <a href="<?php echo base_url();?>commande" class="btn btn-primary btn-block"><strong><i class="fa fa-check"></i> Commander</strong></a>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php $this->load->view('partials/footer-shop');?>
<?php $this->load->view('partials/foot');?>