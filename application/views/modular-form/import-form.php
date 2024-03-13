<div class="row justify-content-center py-5" >
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
        <div class="d-flex justify-content-between">
            <a href="<?php echo site_url('userctrl/')?> " class="btn btn-primary" type="button">Revenir aux utilisateurs</a>
            <!-- <a href="#" class="btn btn-primary" type="button">Text</a> -->
        </div>
        
        <form action="<?php echo site_url('userctrl/bulk_add'); ?>" id="import-form" method="post" enctype="multipart/form-data" ></form>
        <?php #echo form_open('userctrl/bulk_add'); ?>
            <div class="form-group">
                <h1 class="text-center py-5">Ajouter un lot d'utilisateur</h1>
            </div>
            <div class="form-group row">
                <div class="col">
                    <label for="nom_file">Libellé fichier</label>
                    <input type="text" name="nom_file" id="nom_file-input" class="form-control"  value="<?php echo set_value(''); ?>" placeholder="Entrez le libellé du fichier" >
                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                </div>
                <div class="col">
                    <label for="file">Fichier</label>
                    <input type="file" name="userfile" id="file-input" class="form-control" value="<?php echo set_value(''); ?>" >
                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                </div>
                <div class="col">
                    <label for="file">&nbsp;</label>
                    <button type="button" class="btn btn-primary btn-block" title="Afficher contenu du fichier importé sans valider">Preview</button>
                </div>
                <div class="col">
                    <label for="file">&nbsp;</label>
                    <button type="button" class="btn btn-success btn-block"> Valider</button>
                </div>
            </div>

        </form>
        <div id="preview-table">
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>Nom</th>
                        <th>Prenoms</th>
                        <th>Telephone</th>
                        <th>Login</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody id="data-preview">
                    <tr>
                        <td>Dalo</td>
                        <td>Marc</td>
                        <td>0747427163</td>
                        <td>MAD225</td>
                        <td>dalomarc92@gmail.com</td>
                        <td>atofotemefieryalamortdedans</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nom</th>
                        <th>Prenoms</th>
                        <th>Telephone</th>
                        <th>Login</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- <div class="text-center">
            <a href="#">Mot de Passe Oublié ?</a>
        </div> -->

    </div>
</div>