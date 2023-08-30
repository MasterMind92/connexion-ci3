<!doctype html>
<html lang="en">
    <head>
        <title>Accueil</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/sidebar/sidebar.css" >
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/sidebar/dropdown.css" >
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/checkbox-ui.css">
        <!-- <style type="text/css">
            .ul-style {
                padding: 0;
                list-style-type: none;
            }

            .navbar .megamenu{ padding: 1rem; }
            /* ============ desktop view ============ */
            @media all and (min-width: 992px) {
                
                .navbar .has-megamenu{position:static!important;}
                .navbar .megamenu{left:0; right:0; width:100%; margin-top:0;  }
                
            }	
            /* ============ desktop view .end// ============ */


            /* ============ mobile view ============ */
            @media(max-width: 991px){
                .navbar.fixed-top .navbar-collapse, .navbar.sticky-top .navbar-collapse{
                    overflow-y: auto;
                    max-height: 90vh;
                    margin-top:10px;
                }
            }
            /* ============ mobile view .end// ============ */
        </style>

        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function(){
                /////// Prevent closing from click inside dropdown
                document.querySelectorAll('.dropdown-menu').forEach(function(element){
                    element.addEventListener('click', function (e) {
                        e.stopPropagation();
                    });
                })
            }); 
            // DOMContentLoaded  end
        </script> -->

    </head>
    <body>

    <?php $this->load->view('partials/menu')?>
