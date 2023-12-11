<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-mail</title>
    <!-- <link rel="stylesheet" href="<?php #echo base_url();?>assets/css/bootstrap.min.css" > -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
        body{
            background: #dfe6e9;
            font-family: 'Open Sans', sans-serif;
        }

        table{
            width: 700px;
            margin:auto;
        }

        table>thead{
            text-align: center;
        }

        table>tbody{
            background: #ffffff; 
        }

        table>tbody td{
            padding: 15px 20px 15px 20px; 
            border-color: #eee none #eee none;
        }

        .content-td{
            width:70%;
        }

        table>tfoot{
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <thead> 
            <tr>
                <td colspan="2">
                    <h1>LOGO</h1>
                </td>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td colspan="2"><h3>Quelqu'un souhaite prendre contact avec vous</h3></td>
            </tr>
            <tr>
                <td><span> Nom & Prénoms : </span></td>
                <td class="content-td">
                    <span>
                        <?php echo $data;?>
                    </span>
                </td>
            </tr>
            <tr>
                <td><span>Email : </span></td>
                <td class="content-td">
                    <span>
                        <?php echo $data;?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>
                    <span> Numero : </span>
                </td>
                <td class="content-td">
                    <span>
                        <?php echo $data;?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>
                    <span> Message : </span>
                </td>
                <td class="content-td">
                    <span>
                        <?php echo $data;?>
                    </span>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2"><h2>Nom Entreprise</h2></td>
            </tr>
            <tr>
                <td colspan="2"><span>Lorem ipsum dolor sit amet.</span></td>
            </tr>
            <tr>
                <td colspan="2"><span>Lorem ipsum dolor sit amet.</span></td>
            </tr>
            <tr>
                <td colspan="2"><span>Lorem ipsum dolor sit amet.</span></td>
            </tr>
        </tfoot>
    </table>
    
</body>
</html>