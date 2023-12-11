<!-- BLOC FORMULAIRE DE CONTACT -->
<div class="wrapper">
    <div class="row justify-content-center my-5">
        <div class="col-12 col-md-8 col-lg-6">

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

            <!-- DEBUT DU FORMULAIRE -->
            <form method="post" action="<?php echo site_url('Welcome');?>">

                <legend>
                    <h2 class="text-center py-3">Contactez-nous</h2>
                </legend>

                <!-- SECTION NOM ET PRENOMS -->
                <div class="form-group row">
                    <div class="col">
                        <label for="input-nom">Nom</label>
                        <input id="input-nom" class="form-control" type="text" required name="nom" value="<?php echo set_value('nom'); ?>">
                    </div>
                    
                    <div class="col">
                        <label for="input-prenoms">Prénoms</label>
                        <input id="input-prenoms" class="form-control" type="text" required name="prenoms" value="<?php echo set_value('prenoms'); ?>">
                    </div>
                </div>

                <!-- SECTION NUMERO DE TELEPHONE -->
                <div class="form-group row">
                    <div class="col">
                        <label for="input-phone">Téléphone</label>
                        <input id="input-phone" class="form-control" type="text" required name="phone" value="<?php echo set_value('phone'); ?>">
                    </div>
                    
                    <div class="col">
                        <label for="input-mail">Email</label>
                        <input id="input-mail" class="form-control" type="email" required name="email" value="<?php echo set_value('email'); ?>">
                    </div>
                </div>

                <!-- SECTION MESSAGE -->
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" class="form-control" name="message" rows="3"></textarea>
                </div>

                <!-- SECTION BOUTON DE VALIDATION -->
                <div class="form-group row">
                    <div class="col">
                        <button class="btn btn-success btn-block" type="reset">Réinitialiser</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary btn-block" type="submit">Valider</button>
                    </div>
                </div>
            </form>  
            <!-- FIN DU FORMULAIRE -->
        </div>
    </div>
</div>