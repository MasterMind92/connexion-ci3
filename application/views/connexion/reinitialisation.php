<div class="wrapper">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-12 col-md-8 col-lg-4">
                <form method="post" action="<?php echo base_url();?>">
                    <div class="form-group">
                        <h1 class="text-center">LOGO</h1>
                    </div>
                    <div class="form-group ">
                      <label for="login">Login</label>
                      <input type="text" name="login" id="login-input" class="form-control" readonly >
                      <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>
                    <div class="form-group">
                      <label for="password">Mot de passe</label>
                      <input type="text" name="password" id="password-input" class="form-control" placeholder="Entrez votre mot de passe" >
                      <!-- <small id="helpId" class="text-muted"></small> -->
                    </div>
                    <div class="form-group">
                      <label for="confirm_password">Confirmer Password</label>
                      <input type="text" name="confirm_password" id="confirm_password-input" class="form-control" placeholder="Entrez votre mot de passe" >
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
                            <button class="btn btn-primary btn-block" type="submit">Réinitialiser</button>
                        </div>
                    </div>
                </form>
                <div class="text-center">
                    <a href="<?php echo site_url('connexionctrl/');?>">Se connecter</a>
                </div>
            </div>
        </div>
    </div>
</div>