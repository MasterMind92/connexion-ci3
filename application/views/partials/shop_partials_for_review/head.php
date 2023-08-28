<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script> -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<!-- <script src="<?php #echo base_url();?>assets/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/checkbox-ui.css">
    <title>Title</title>
    <style type="text/css">
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
    </script>
</head>

<body>
