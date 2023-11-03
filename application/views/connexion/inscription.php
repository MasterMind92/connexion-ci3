<?php $this->load->view('partials/head');?>
<div class="wrapper">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-12 col-md-10 col-lg-8">
                <form method="post" action="<?php echo site_url('UserCtrl/add');?>">
                    <div class="form-group">
                        <h1 class="text-center">LOGO</h1>
                    </div>
                    <?php if( $this->session->flashdata('msg')):?>
                    <div class="alert alert-warning" role="alert">
                        <?php echo $this->session->flashdata('msg'); ?>
                    </div>
                    <?php endif;?>

                    <?php if(!empty(validation_errors())):?>
                    <div class="alert alert-warning" role="alert">
                        <?php echo validation_errors(); ?>
                    </div>
                    <?php endif;?> 
                    <div class="form-group row">
                        <div class="col">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom-input" class="form-control" placeholder="Entrez votre nom" >
                            <!-- <small id="helpId" class="text-muted">Help text</small> -->
                        </div>
                        <div class="col">
                            <label for="prenoms">Prénoms</label>
                            <input type="text" name="prenoms" id="prenoms-input" class="form-control" placeholder="Entrez vos prénoms" >
                            <!-- <small id="helpId" class="text-muted">Help text</small> -->
                        </div>
                    </div>

                    <!-- <div class="form-group">
                      <label for="prenoms">Prénoms</label>
                      <input type="text" name="prenoms" id="prenoms-input" class="form-control" placeholder="Entrez votre " >
                      <small id="helpId" class="text-muted">Help text</small>
                    </div> -->

                    <div class="form-group row">
                        <div class="col">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email-input" class="form-control" placeholder="Entrez votre e-mail" >
                            <!-- <small id="helpId" class="text-muted">Help text</small> -->
                        </div>

                        <div class="col">
                            <label for="phone">Téléphone</label>
                            <input type="text" name="phone" id="phone-input" class="form-control" placeholder="Entrez votre téléphone" >
                            <!-- <small id="helpId" class="text-muted">Help text</small> -->
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="login">Login</label>
                        <input type="text" name="login" id="login-input" class="form-control" placeholder="Entrez votre login" >
                        <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>

                    <div class="form-group row">
                        <div class="col">
                            <label for="password">Mot de passe</label>
                            <input type="text" name="password" id="password-input" class="form-control" placeholder="Entrez votre mot de passe" >
                            <!-- <small id="helpId" class="text-muted"></small> -->
                        </div>
                        <div class="col">
                            <label for="confirm_password">Confirmer Password</label>
                            <input type="text" name="confirm_password" id="confirm_password-input" class="form-control" placeholder="Entrez votre mot de passe" >
                            <!-- <small id="helpId" class="text-muted"></small> -->
                        </div>
                    </div>
                    
                    <!-- <div class="form-group">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember-input" value=1> Se Souvenir de Moi
                            </label>
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <div class="col-12 col-md-6">
                            <button class="btn btn-success btn-block" type="reset">Reinitialiser</button>
                        </div>
                        <div class="col-12 col-md-6">
                            <button class="btn btn-primary btn-block" type="submit">Valider</button>
                        </div>
                    </div>
                </form>
                <!-- <div class="text-center">
                    <a href="#">Mot de Passe Oublié ?</a>
                </div> -->

            </div>
        </div>
    </div>
</div>
<?php $this->load->view('partials/foot');?>