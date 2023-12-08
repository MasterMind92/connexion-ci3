<?php $this->load->view('partials/head');?>
<?php $this->load->view('partials/admin/sidebar');?>
<div id="main">
    <div class="wrapper">

        <div class="container-fluid">
            <?php $this->load->view('partials/admin/header')?>

            <div class="row justify-content-center align-items-center" style="height:80vh">
                <div class="col-12 col-md-10 col-lg-8">
                    <?php if( $this->session->flashdata('msg')):?>
                    <div class="alert alert-info text-center" role="alert">
                        <?php echo $this->session->flashdata('msg'); ?>
                    </div>
                    <?php endif;?>

                    <?php if(!empty(validation_errors())):?>
                    <div class="alert alert-warning text-center" role="alert">
                        <?php echo validation_errors(); ?>
                    </div>
                    <?php endif;?>
                    <!-- <div class="d-flex justify-content-between">
                        <a href="<?php #echo site_url('userctrl/')?> " class="btn btn-primary" type="button">Revenir aux utilisateurs</a>
                        <a href="<?php #echo site_url('userctrl/import')?> " class="btn btn-info" type="button">Importer des utilisateurs</a>
                        <a href="#" class="btn btn-primary" type="button">Text</a>
                    </div> -->

                    <?php echo form_open('userctrl/inscription'); ?>
                        <div class="form-group">
                            <h1 class="text-center">Inscrivez vous</h1>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="nom-input">Nom</label>
                                <input type="text" name="nom" id="nom-input" class="form-control"  value="" placeholder="Entrez votre nom" required>
                                <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>
                            <div class="col">
                                <label for="prenoms-input">Prénoms</label>
                                <input type="text" name="prenoms" id="prenoms-input" class="form-control" value=""  placeholder="Entrez vos prénoms" required>
                                <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="adresse-input">Adresse</label>
                                <input type="text" name="adresse" id="adresse-input" class="form-control" value=""  placeholder="Entrez votre adresse" required>
                                <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>

                            <div class="col">
                                <label for="date_nais-input">Date de naissance</label>
                                <input type="date" name="date_nais" id="date_nais-input" class="form-control" value="" max="2005-12-01"  placeholder="Date de naissance" required>
                                <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email-input" class="form-control" value=""  placeholder="Entrez votre e-mail" required>
                                <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>

                            <div class="col">
                                <label for="phone">Téléphone</label>
                                <input type="text" name="phone" id="phone-input" class="form-control" value=""  placeholder="Entrez votre téléphone" required>
                                <!-- <small id="helpId" class="text-muted">Help text</small> -->
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

<?php $this->load->view('partials/foot');?>