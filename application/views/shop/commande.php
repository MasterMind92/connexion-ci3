<?php $this->load->view('partials/head');?>
<div class="wrapper my-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <div class="d-flex justify-content-between" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h5><i class="fa fa-check text-success"></i><span class="font-weight-bold"> INFORMATIONS PERSONNELLES</span></h5>
                            </div>
                        </div>
                        <!--  -->
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <!--  -->
                                <form method="post" action="">
                                    <!-- LIGNE DU FORMULAIRE -->
                                    <div class="form-group row">
                                        <div class="col-3 text-right">
                                            <label class="my-2" for="">Titre</label>
                                        </div>
                                        <div class="col py-2">
                                            <label class="">
                                                <input type="radio" name="titre"> M
                                            </label>
                                        
                                            <label class="">
                                                <input type="radio" name="titre"> Mme
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            
                                        </div>
                                    </div>
                                    <!-- LIGNE DU FORMULAIRE -->
                                    <div class="form-group row">
                                        <div class="col-3 text-right">
                                            <label class="my-2" for="">Prénoms</label>
                                        </div>
                                        <div class="col">
                                            <input type="text" name="f_name" id="" class="form-control col" placeholder=""
                                                aria-describedby="">
                                            <small id="" class="text-muted"></small>
                                        </div>
                                        <div class="col-3">
                                            <span></span>
                                        </div>
                                    </div>
                                    <!-- LIGNE DU FORMULAIRE -->
                                    <div class="form-group row">
                                        <div class="col-3 text-right">
                                            <label class="my-2" for="">Nom</label>
                                        </div>
                                        <div class="col">
                                            <input type="text" name="l_name" id="" class="form-control col" placeholder=""
                                                aria-describedby="">
                                            <small id="" class="text-muted"></small>
                                        </div>
                                        <div class="col-3">
                                            <span></span>
                                        </div>
                                    </div>
                                    <!-- LIGNE DU FORMULAIRE -->
                                    <div class="form-group row">
                                        <div class="col-3 text-right">
                                            <label class="my-2" for="">E-mail</label>
                                        </div>
                                        <div class="col">
                                            <input type="e-mail" name="" id="" class="form-control col" placeholder=""
                                                aria-describedby="" required="required">
                                            <small id="" class="text-muted"></small>
                                        </div>
                                        <div class="col-3">
                                            
                                        </div>
                                    </div>
                                    <!-- LIGNE DU FORMULAIRE -->
                                    <div class="form-group row">
                                        <div class="col-3 text-right">
                                            <label class="my-2" for="">Téléphone</label>
                                        </div>
                                        <div class="col">
                                            <input type="text" name="" id="" class="form-control col" placeholder=""
                                                aria-describedby="">
                                            <small id="" class="text-muted"></small>
                                        </div>
                                        <div class="col-3">
                                        <span>Optionnel</span>
                                        </div>
                                    </div>
                                    <!-- LIGNE DU FORMULAIRE -->
                                    <div class="form-group row">
                                        <div class="col-3 text-right">
                                            <label class="my-2" for="">Date de Naissance</label>
                                        </div>
                                        <div class="col">
                                            <input type="date" name="" id="" class="form-control col" placeholder=""
                                                aria-describedby="">
                                            <small id="" class="text-muted">(Ex. : 31/05/1970) </small>
                                        </div>
                                        <div class="col-3">
                                            <span>Optionnel</span>
                                        </div>
                                    </div>
                                    <!-- LIGNE DU FORMULAIRE -->
                                    
                                </form>
                                <div class="text-right">
                                    <a type="button" class="text-muted">
                                        <span> <i class="fa fa-pen"></i> modifier </span>
                                    </a>
                                </div>
                                
                                <!--  -->
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <div class="d-flex justify-content-between"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h5><i class="fa fa-check text-success"></i><span class="font-weight-bold"> PAIEMENT</span></h5>
                            </div>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <form method="get" action="">

                                    <!-- LIGNE DU FORMULAIRE -->
                                    <div class="form-group row">
                                        <div class="col-3 text-right">
                                            <label class="my-2" for="">Moyen de Paiement</label>
                                        </div>
                                        <div class="col py-2">
                                            <label id="mob_money" class="mr-2">
                                                <input id="mob_money" type="radio" checked="checked" data-toggle="collapse" data-target="#mobile_money" name="paiement">Mobile Money
                                            </label>
                                        
                                            <label class="mr-2">
                                                <input type="radio" data-toggle="collapse" data-target="#credit_card" name="paiement">Visa
                                            </label>
                                        
                                            <label class="">
                                                <input type="radio" data-toggle="collapse" data-target="#credit_card_2" name="paiement">Mastercard
                                            </label>
                                        </div>
                                        
                                    </div>
                                    <div id="collapsible" class="">
                                        <!-- LIGNE DU FORMULAIRE -->
                                        <div id="mobile_money" class="collapse show" data-parent="#collapsible">
                                            <div class="form-group row">
                                                <div class="col-3 text-right">
                                                    <label class="my-2" for="">Téléphone <span class="text-danger">(*)</span></label>
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="" id="" class="form-control col" placeholder=""
                                                        aria-describedby="">
                                                    <small id="" class="text-muted"> </small>
                                                </div>
                                                <div class="col-3">
                                                    <!-- <span class="text-danger">Obligatoire</span> -->
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12 col-md-6 offset-lg-5 col-lg-4">
                                                    <button class="btn btn-info btn-block" data-toggle="modal" data-target="" type="submit">Valider</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- LIGNE DU FORMULAIRE -->
                                        <div id="credit_card" class="form-group row justify-content-center collapse" data-parent="#collapsible">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Carte de Crédit</strong>
                                                    <small>Entrez les détails de votre Carte</small>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="name">Nom</label>
                                                                <input class="form-control" id="name" type="text" placeholder="Entrez votre nom">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="ccnumber">Numéro Carte de Crédit</label>
                                                                <div class="input-group">
                                                                    <input class="form-control" type="text" placeholder="0000 0000 0000 0000" autocomplete="email">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text">
                                                                            <i class="mdi mdi-credit-card"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-sm-4">
                                                            <label for="ccmonth">Mois</label>
                                                            <select class="form-control" id="ccmonth">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="ccyear">Année</label>
                                                            <select class="form-control" id="ccyear">
                                                                <option>2014</option>
                                                                <option>2015</option>
                                                                <option>2016</option>
                                                                <option>2017</option>
                                                                <option>2018</option>
                                                                <option>2019</option>
                                                                <option>2020</option>
                                                                <option>2021</option>
                                                                <option>2022</option>
                                                                <option>2023</option>
                                                                <option>2024</option>
                                                                <option>2025</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label for="cvv">CVV/CVC</label>
                                                                <input class="form-control" id="cvv" type="text" placeholder="123">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <button class="btn btn-sm btn-success float-right" type="submit">
                                                        <i class="mdi mdi-gamepad-circle"></i> Continue</button>
                                                    <button class="btn btn-sm btn-danger" type="reset">
                                                        <i class="mdi mdi-lock-reset"></i> Réinitialiser</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- LIGNE DU FORMULAIRE -->
                                        <div id="credit_card_2" class="form-group row justify-content-center collapse" data-parent="#collapsible">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Carte de Crédit</strong>
                                                    <small>Entrez les détails de votre Carte</small>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="name">Nom</label>
                                                                <input class="form-control" id="name" type="text" placeholder="Entrez votre nom">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="ccnumber">Numéro Carte de Crédit</label>
                                                                <div class="input-group">
                                                                    <input class="form-control" type="text" placeholder="0000 0000 0000 0000" autocomplete="email">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text">
                                                                            <i class="mdi mdi-credit-card"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-sm-4">
                                                            <label for="ccmonth">Mois</label>
                                                            <select class="form-control" id="ccmonth">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="ccyear">Année</label>
                                                            <select class="form-control" id="ccyear">
                                                                <option>2014</option>
                                                                <option>2015</option>
                                                                <option>2016</option>
                                                                <option>2017</option>
                                                                <option>2018</option>
                                                                <option>2019</option>
                                                                <option>2020</option>
                                                                <option>2021</option>
                                                                <option>2022</option>
                                                                <option>2023</option>
                                                                <option>2024</option>
                                                                <option>2025</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label for="cvv">CVV/CVC</label>
                                                                <input class="form-control" id="cvv" type="text" placeholder="123">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <button class="btn btn-sm btn-success float-right" type="submit">
                                                        <i class="mdi mdi-gamepad-circle"></i> Continue</button>
                                                    <button class="btn btn-sm btn-danger" type="reset">
                                                        <i class="mdi mdi-lock-reset"></i> Réinitialiser</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{Nb} Articles </h5>
                        <a class="" href="#" data-toggle="collapse" data-target="#expand">Afficher les Articles <span><i class="fa fa-chevron-down"></i></span></a>
                        <div id="expand" class="container-fluid collapse">
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-light">
                                        <tbody>
                                            <!-- LIGNE DU PANIER  -->
                                            <tr>
                                                <td class="border-0 pt-3">
                                                    <div style="height:40px">
                                                        <img src="<?php echo base_url(); ?>assets/images/produits/shirt.jpg" alt="" class="img-fluid h-100">
                                                    </div>
                                                </td>
                                                <td class="border-0 pt-3 px-3">
                                                    <ul class="ul-style">
                                                        <li><h6 class="font-weight-bold">Titre Produit</h6></li>
                                                        <li> <span>Option 1</span> </li>
                                                        <li> <span>Option 2</span> </li>
                                                    </ul>
                                                </td>
                                                <td class="border-0 pt-3"><strong>10000</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col pl-4 text-left">
                                <span>Sous-Total</span>
                            </div>
                            <div class="col text-right">
                                <span>50000 FCFA</span>
                            </div>
                        </div>
                        
                        <div class="row my-2">
                            <div class="col pl-4 text-left">
                                <span class="font-weight-bold">Total</span>
                            </div>
                            <div class="col text-right">
                                <span class="font-weight-bold">50000 FCFA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('partials/foot');?>