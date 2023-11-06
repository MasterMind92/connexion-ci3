<?php $this->load->view('partials/head');?>
<?php $this->load->view('partials/admin/sidebar');?>

<div id="main">

    <div class="wrapper">
        <div class="container-fluid">
        <?php $this->load->view('partials/admin/header')?>

            <?php if( $this->session->flashdata('msg')):?>
                <div class="alert alert-info" role="alert">
                    <?php echo $this->session->flashdata('msg'); ?>
                </div>
            <?php endif;?>
            <!-- CORPS DE L'ADMIN -->
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-end py-3">
                        <a id="" class="btn btn-primary" href="<?php echo site_url('userctrl/add'); ?>" title="Ajouter un utilisateur" role="button"> <i class="fa fa-plus"></i> Ajouter </a>
                        <a id="" class="btn btn-primary ml-3" href="<?php echo site_url('userctrl/import')?>" role="button" title="Ajouter plusieurs utilisateurs en une seule fois">Importer Fichier</a>
                        <!-- <a id="" class="btn btn-primary" href="#" role="button">Action</a> -->
                    </div>
                </div>
                <div class="col-12">
                    <table id="user_table" class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prenoms</th>
                                <th>Email</th>
                                <th>Etat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $key => $value):?>

                                <tr>
                                <td scope="row">1</td>
                                <td> <?php echo $value->lname;?> </td>
                                <td> <?php echo $value->fname;?> </td>
                                <td> <?php echo $value->email;?></td>
                                <?php 
                                    $libelle = [
                                        "lib"=> "",
                                        "fa_class"=> "",
                                        "txt_class"=> "",

                                    ];
                                

                                    switch ($value->etat_user) {
                                        case 'A':
                                            $libelle['lib']="Actif";
                                            $libelle['fa_class']="fa fa-check";
                                            $libelle['txt_class']="text-success";
                                            break;
                                        case 'I':
                                            $libelle['lib']="Inactif";
                                            $libelle['fa_class']="fa fa-times";
                                            $libelle['txt_class']="text-warning";
                                            break;
                                        case 'B':
                                            $libelle['lib']="Bloqué";
                                            $libelle['fa_class']="fa fa-exclamation-triangle";
                                            $libelle['txt_class']="text-danger";
                                            break; 
                                        case 'S':
                                            $libelle['lib']="Supprimé";
                                            $libelle['fa_class']="fa fa-trash";
                                            $libelle['txt_class']="text-danger";
                                            break;    
                                        default:
                                        case 'I':
                                            $libelle['lib']="Inactif";
                                            $libelle['fa_class']="fa fa-times";
                                            $libelle['txt_class']="text-warning";
                                            break;
                                    }
                                ?>
                                <?php?>
                                <td> <span class="<?php echo $libelle['txt_class'] ;?>"> <i class="<?php echo $libelle['fa_class'] ;?>"></i> <?php echo $libelle['lib'] ;?></span> </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Button group">
                                        <a class="btn btn-default" type="button" title="Activer utilisateur" href="<?php echo site_url('userctrl/activate_user/'.$value->id_user) ;?>" > <i class="fa fa-thumbs-up"></i> </a>
                                        <a class="btn btn-secondary" type="button" title="Desactiver utilisateur" href="<?php echo site_url('userctrl/deactivate_user/'.$value->id_user) ;?>" > <i class="fa fa-thumbs-down"></i> </a>
                                        <a class="btn btn-primary" type="button" title="Modifier utilisateur" href="<?php echo site_url('userctrl/modify/'.$value->id_user) ;?>" > <i class="fa fa-pen"></i> </a>
                                        <!-- <a class="btn btn-success" type="button"  href="<?php #echo site_url('connexionctrl/modify/'.$value->id_user) ;?>" > <i class="fa fa-list"></i> </a> -->
                                        <button class="btn btn-danger" id="delete_user" type="button" title="Bloquer l'utilisateur" data-id="<?php echo $value->id_user; ?>"> <i class="fa fa-trash"></i> </button>
                                    </div>    
                                </td>
                            </tr>

                            <?php endforeach;?>
                            
                            <?php?>
                            
                        </tbody>
                    </table>
                </div>
            </div>

            
            <!-- Modal -->
            <div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                            Body
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('partials/foot');?>