<?php $this->load->view('partials/head');?>
<div class="wrapper">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-12 col-md-8 col-lg-4">
                <form method="post" action="<?php echo site_url('ReinitCtrl/send_reinit_mail');?>">
                    <?php if( $this->session->flashdata('msg')):?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('msg'); ?>
                    </div>
                    <?php endif;?>

                    <div class="form-group">
                        <h1 class="text-center">LOGO</h1>
                    </div>
                    <div class="form-group ">
                      <label for="login">Entrez votre adresse mail</label>
                      <input type="e-mail" name="email" id="login-input" class="form-control">
                      <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-12">
                            <button class="btn btn-primary btn-block" type="submit">Réinitialiser</button>
                        </div>
                    </div>
                </form>
                <div class="text-center">
                    <a href="<?php echo site_url('ConnexionCtrl/');?>">Se connecter</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('partials/foot');?>
