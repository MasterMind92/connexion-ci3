
<?php $this->load->view('partials/head');?>
<div class="wrapper">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-12 col-md-8 col-lg-4">
                <!-- <form method="post" action="<?php #echo base_url();?>"> -->
                <!-- Fonction d'affichage des erreurs -->
                
                <!-- Fonction de redirection chemin relatif -->
                <?php echo form_open('ConnexionCtrl/'); ?>
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
                    
                    <div class="form-group">
                      <label for="login">Login</label>
                      <input type="text" name="login" id="login-input" class="form-control" placeholder="Entrez votre login" required value="<?php echo set_value('login');?>">
                      <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" id="password-input" class="form-control" placeholder="Entrez votre mot de passe" required  >
                      <!-- <small id="helpId" class="text-muted"></small> -->
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember-input" value=1> Se Souvenir de Moi
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <button class="btn btn-primary btn-block" type="submit">Connexion</button>
                        </div>
                    </div>
                </form>
                <div class="text-center">
                    <a href="<?php echo site_url('ReinitCtrl/')?>">Mot de Passe Oublié ?</a>
                </div>

            </div>
        </div>
    </div>
</div>

<?php $this->load->view('partials/foot');?>