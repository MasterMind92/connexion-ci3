<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 3 Test</title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .stats-resume{
            display: flex;
            margin:15px 0;
        }

        .stats-text-fancy{
            color:rgba(155, 89, 182,1.0);
        }   

        .stats-bg-fancy{
            background:rgba(155, 89, 182,0.2);
            border:5px solid rgba(155, 89, 182,1.0);
        }

        .stats-text-danger{
            color:rgba(231, 76, 60,1.0);
        }   

        .stats-bg-danger{
            background:rgba(231, 76, 60,0.2);
            border:5px solid rgba(231, 76, 60,1.0);
        }

        .stats-text-success{
            color:rgba(46, 204, 113,1.0);
        }   

        .stats-bg-success{
            background:rgba(46, 204, 113,0.2);
            border:5px solid rgba(46, 204, 113,1.0);
        }

        .stats-resume>.stats-resume-bg{
            flex:1;
        }

        .stats-resume>.stats-resume-bg>div{
            height:100%;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .stats-resume>.stats-resume-text{
            flex:3;
            padding-left: 15px;
        }

    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-4 stats-resume">
                    <div class="stats-resume-bg">
                        <div class="stats-bg-success  stats-text-success">
                            <span><i class="fa fa-check"></i></span>
                        </div>
                    </div>
                    <div class="stats-resume-text stats-text-success">
                        <h3>0</h3>
                        <h4>libellé statistiques</h4>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4 stats-resume">
                    <div class="stats-resume-bg">
                        <div class="stats-bg-fancy stats-text-fancy">
                            <span><i class="fa fa-check"></i></span>
                        </div>
                    </div>
                    <div class="stats-resume-text stats-text-fancy">
                        <h3>0</h3>
                        <h4>libellé statistiques</h4>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4 stats-resume">
                    <div class="stats-resume-bg">
                        <div class="stats-bg-danger  stats-text-danger">
                            <span><i class="fa fa-check"></i></span>
                        </div>
                    </div>
                    <div class="stats-resume-text stats-text-danger">
                        <h3>0</h3>
                        <h4>libellé statistiques</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>