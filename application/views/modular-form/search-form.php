<form method="post" action="<?php echo site_url($submit_link);?>" class="">
    <div class="form-group row">
        <!-- debut affichage par defaut -->
        <div class="col-12 col-md-4 col-lg-auto">
            <label class="mb-0" for="">Date de début</label>
            <input type="date" class="form-control" name="date_deb" id="date_deb" placeholder="">
            <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
        </div>
        <div class="col-12 col-md-4 col-lg-auto">
            <label class="mb-0" for="">Date de fin</label>
            <input type="date" class="form-control" name="date_fin" id="date_fin" placeholder="">
            <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
        </div>
        <!-- fin affichage par defaut -->
        <!-- parametres a pourvoir pour le select
            [
                :label
                :id             (identifiant du select)
                :class          (class pour le select)
                options: [      (liste des options sous formes de clef->valeur)
                    :option 0
                        .
                        .
                        .
                    option n
                ]
            ]
         -->
        
        <!-- Affichage pour chaque champ parametres renseigné -->
        <?php if(isset($select) AND !empty($select)): ?>

            <?php foreach ($select as $key => $value):?>
            <div class="col-12 col-md-4 col-lg-auto">

                <label for=""><?php echo $value['label'];?></label>

                <select id="<?php echo $value['id'];?>" 
                class="<?php if($value['class']) echo $value['class']; else echo "form-control";?>" name="<?php echo $value['name'];?>">
                
                    <?php foreach($value['options'] as $clef=> $valeur):?>   
                        <option value="<?php echo $valeur['value'];?>"><?php echo $valeur['label'];?></option>
                    <?php endforeach;?>

                </select>
            </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <div class="col-12 col-md-auto">
            <button class="btn btn-success mt-4" type="submit"> <i class="bi-check"></i> Rechercher</button>
        </div>
    </div>
</form>

