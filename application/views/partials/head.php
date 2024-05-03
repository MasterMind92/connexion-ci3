<!doctype html>
<html lang="en">
    <head>
        <title>Accueil</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="<?= $this->security->get_csrf_hash(); ?>">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/sidebar/sidebar.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/sidebar/dropdown.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins/datatable.css">
        
        <style>
            ul>li{
                float:left;
                padding: 10px;
            }

            .ul-style {
                padding: 0;
                list-style-type: none;
            }
        </style>
    </head>
    <body>

    <?php #$this->load->view('partials/menu')?>
