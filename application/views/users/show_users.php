<?php $this->load->view('partials/head');?>
<?php $this->load->view('partials/admin/sidebar');?>    
<div id="main">
    <div class="wrapper">
        <div class="container-fluid">
            <?php $this->load->view('partials/admin/header');?>

            <div class="row justify-content-center align-items-center" style="height:100vh">
                <div class="col-12 col-md-10 col-lg-8">


                <?php if( $this->session->flashdata('msg')):?>
                <div class="alert alert-info" role="alert">
                    <?php echo $this->session->flashdata('msg'); ?>
                </div>
                <?php endif;?>

                <?php if(!empty(validation_errors())):?>
                <div class="alert alert-warning" role="alert">
                    <?php echo validation_errors(); ?>
                </div>
                <?php endif;?>

                <div class="d-flex">
                    <a href="<?php echo site_url('userctrl/')?> " class="btn btn-primary" type="button">Revenir aux utilisateurs</a>
                    <a href="<?php echo site_url('userctrl/import')?> " class="btn btn-info mx-2" type="button">Importer des utilisateurs</a>
                    <!-- <a href="#" class="btn btn-primary" type="button">Text</a> -->
                </div

                
                <?php echo form_open('userctrl/modify/'.$user->id_user); ?>
                        <!-- <input type="hidden" name=""> -->
                        <div class="form-group">
                            <h1 class="text-center py-4">Modifier un utilisateur</h1>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="nom">Nom</label>
                                <input type="text" name="nom" id="nom-input" class="form-control" value="<?php echo $user->lname;?> " placeholder="Entrez votre nom" >
                                <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>
                            <div class="col">
                                <label for="prenoms">Prénoms</label>
                                <input type="text" name="prenoms" id="prenoms-input" class="form-control" value="<?php echo $user->fname;?> " placeholder="Entrez vos prénoms" >
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
                                <input type="email" name="email" id="email-input" class="form-control" value="<?php echo $user->email; ?> " placeholder="Entrez votre e-mail" >
                                <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>

                            <div class="col">
                                <label for="phone">Téléphone</label>
                                <input type="text" name="phone" id="phone-input" class="form-control"  value="<?php echo $user->phone; ?> " placeholder="Entrez votre téléphone" >
                                <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="login">Login</label>
                            <input type="text" name="login" id="login-input" class="form-control" value="<?php echo $user->login; ?> " placeholder="Entrez votre login" >
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label for="password">Mot de passe</label>
                                <input type="password" name="password" id="password-input" class="form-control" value="" placeholder="Entrez votre mot de passe" >
                                <!-- <small id="helpId" class="text-muted"></small> -->
                            </div>
                            <div class="col">
                                <label for="confirm_password">Confirmer Password</label>
                                <input type="password" name="confirm_password" id="confirm_password-input" class="form-control" placeholder="Entrez votre mot de passe" >
                                <!-- <small id="helpId" class="text-muted"></small> -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label for="etat">Etat Utilisateur</label>
                                <select id="etat" class="form-control" name="etat">
                                    <option selected value="A">Actif</option>
                                    <option value="I">Inactif</option>
                                    <option value="B">Bloqué</option>
                                    <option value="S">Supprimé</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="role">Role Utilisateur</label>
                                <select id="role" class="form-control" name="role">
                                    <option selected value="admin">Administrateur</option>
                                    <option value="standard">Standard</option>
                                    <option value="employe">Employé</option>
                                </select>
                            </div>
                        </div>
                        
                        
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

</div>

<?php $this->load->view('partials/footer');?>
<?php $this->load->view('partials/foot');?>