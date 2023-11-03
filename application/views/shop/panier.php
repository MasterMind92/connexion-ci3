<?php $this->load->view('partials/head-shop');?>
<div class="wrapper my-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-8">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="font-weight-bold">PANIER</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <!-- LIGNE DU PANIER  -->
                                    <tr>
                                        <td class="border-0">
                                            <div style="height:100px">
                                                <img src="<?php echo base_url(); ?>assets/images/produits/shirt.jpg" alt="" class="img-fluid h-100">
                                            </div>
                                        </td>
                                        <td class="border-0">
                                            <ul class="ul-style">
                                                <li><h5 class="font-weight-bold">Titre Produit</h5></li>
                                                <li> <span>10000 FCFA</span> </li>
                                                <li> <span>Caracteristique 1</span> </li>
                                                <li> <span>Caracteristique 2</span> </li>
                                            </ul>
                                        </td>
                                        <td class="border-0 row justify-content-center">
                                            <input type="number" class="form-control col-4" name="" min="1" value="1" id=""/>
                                        </td>
                                        <td class="border-0"><strong>10000 FCFA</strong></td>
                                        <td class="border-0">
                                            <button type="button" data-toggle="modal" data-target="#Delete" class="btn btn-dark">
                                                <span><i class="fa fa-trash"></i></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- LIGNE DU PANIER  -->
                                    <tr>
                                        <td class="border-0">
                                            <div style="height:100px">
                                                <img src="<?php echo base_url(); ?>assets/images/produits/shirt.jpg" alt="" class="img-fluid h-100">
                                            </div>
                                        </td>
                                        <td class="border-0">
                                            <ul class="ul-style">
                                                <li><h5 class="font-weight-bold">Titre Produit</h5></li>
                                                <li> <span>10000 FCFA</span> </li>
                                                <li> <span>Caracteristique 1</span> </li>
                                                <li> <span>Caracteristique 2</span> </li>
                                            </ul>
                                        </td>
                                        <td class="border-0 row justify-content-center">
                                            <input type="number" class="form-control col-4" name="" min="1" value="1" id=""/>
                                        </td>
                                        <td class="border-0"><strong>10000 FCFA</strong></td>
                                        <td class="border-0">
                                            <button type="button" data-toggle="modal" data-target="#Delete" class="btn btn-dark">
                                                <span><i class="fa fa-trash"></i></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- LIGNE DU PANIER  -->
                                    <tr>
                                        <td class="border-0">
                                            <div style="height:100px">
                                                <img src="<?php echo base_url(); ?>assets/images/produits/shirt.jpg" alt="" class="img-fluid h-100">
                                            </div>
                                        </td>
                                        <td class="border-0">
                                            <ul class="ul-style">
                                                <li><h5 class="font-weight-bold">Titre Produit</h5></li>
                                                <li> <span>10000 FCFA</span> </li>
                                                <li> <span>Caracteristique 1</span> </li>
                                                <li> <span>Caracteristique 2</span> </li>
                                            </ul>
                                        </td>
                                        <td class="border-0 row justify-content-center">
                                            <input type="number" class="form-control col-4" name="" min="1" value="1" id=""/>
                                        </td>
                                        <td class="border-0"><strong>10000 FCFA</strong></td>
                                        <td class="border-0">
                                            <button type="button" data-toggle="modal" data-target="#Delete" class="btn btn-dark">
                                                <span><i class="fa fa-trash"></i></span>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="py-3"><a href="<?php echo site_url('ShopCtrl/show_all_product');?>"><i class="fa fa-chevron-left"></i>  Continuer Mes Achats</a></div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col text-left">
                                <span>Nb Articles</span>
                            </div>
                            <div class="col text-right">
                                <span>50000 FCFA</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-left">
                                <span>Livraison</span>
                            </div>
                            <div class="col text-right">
                                <span>Gratuite</span>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col text-left">
                                <span class="font-weight-bold">Total</span>
                            </div>
                            <div class="col text-right">
                                <span class="font-weight-bold">50000 FCFA</span>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col">
                                <a href="<?php echo site_url('ShopCtrl/commande');?>" class="btn btn-info btn-block" type="button"> <strong>COMMANDER</strong> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="Delete" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p>Voulez vous retirer <span class="text-info"><strong>Nom Produit</strong></span> de votre panier ? </p>
            </div>
            <div class="modal-footer">
                <div class="row justify-content-end">
                    <div class="col">
                        <button id="supprimer" class="btn btn-danger btn-block" data-dismiss="modal" data-toggle="modal" data-target="#Delete-success" type="button">Supprimer</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-dark btn-block" data-dismiss="modal" type="button">Annuler</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="Delete-success" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p class="text-success text-center">Le produit <span ><strong>Nom Produit</strong></span> a été retiré avec success </p>
            </div>
            <div class="modal-footer">
                <div class="row justify-content-end">
                    
                    <div class="col">
                        <button class="btn btn-dark btn-block" data-dismiss="modal" type="button">Terminer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('partials/footer-shop');?>
<?php $this->load->view('partials/foot');?>