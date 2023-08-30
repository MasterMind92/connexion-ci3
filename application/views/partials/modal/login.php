<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css"> -->
<style>
    .placeicon {
     font-family: fontawesome
    }

 .custom-control-label::before {
     background-color: #dee2e6;
     border: #dee2e6
 }

</style>
<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Connectez-vous</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Container containing all contents -->
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <!-- White Container -->
                            <div class="container bg-white rounded mt-2 mb-2 px-0">
                                <div class="pt-3 pb-3">
                                    <form class="form-horizontal">
                                        <!-- User Name Input -->
                                        <div class="form-group row justify-content-center px-3">
                                            <div class="col-10 px-0"> 
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="my-addon"> <i class="fa fa-user" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input class="form-control border-primary" type="text" name="text" placeholder="Votre Adresse E-mail">
                                                </div>
                                               
                                             </div>
                                        </div> <!-- Password Input -->
                                        <div class="form-group row justify-content-center px-3">
                                            <div class="col-10 px-0"> 
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="my-addon"> <i class="fa fa-key" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input class="form-control border-primary" type="password" name="password" placeholder="Votre Mot de Passe">
                                                </div>
                                            </div>
                                        </div> <!-- CheckBox Remember Me-->
                                        <div class="form-group row justify-content-center px-3">
                                            <div class="col-10">
                                                <div class="row">
                                                    <div class="col-6 px-0">
                                                        <div class="custom-control custom-checkbox mb-3"> <input id="customCheck1" type="checkbox" class="custom-control-input checkbox-muted"> <label for="customCheck1" class="custom-control-label text-muted">Se Souvenir de Moi</label> </div>
                                                    </div> <!-- Forgot Password Link -->
                                                    <div class="col-6 px-0 text-right"> <span><a href="#" class="text-danger"><b>Mot de passe oublié?</b></a></span> </div>
                                                </div>
                                            </div>
                                        </div> <!-- Log in Button -->
                                        <div class="form-group row justify-content-center">
                                            <div class="col-6 px-3"> <input type="submit" value="Connexion" class="btn btn-block btn-primary"> </div>
                                        </div>
                                    </form>
                                    <div class="row justify-content-center">
                                        <h5>Pas de Compte ?<span><a data-toggle="modal" data-target="#register" data-dismiss="modal" class="text-danger"> Inscrivez-vous!</a></span></h5>
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
    