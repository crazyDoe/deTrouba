<?php include_once'back/fonctions.php'; ?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About - Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Le Troubadour </div>
    <div class="address-bar">Moeskroenstraat 108930 Menen</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Accueil</a>
                    </li>
                    <li>
                        <a href="carte.php">Carte</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>La Maison vous propose : </strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive img-border-left" src="img/trouba3.png" alt="">
                </div>
                <div class="col-md-6">
                    <p>Nous avons sélectionné pour vous un panel des meilleures bières de Belgique, que vous pourrez déguster à un prix attractif. </p>
                    <p>Servies au bar ou en salle, tout est prévu pour satisfaire les amateurs de bière. En pression ou en bouteille, 
                        sans oublier les autres alcools et les softs, il y en a pour tous les goûts.
                     </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Notre Carte </strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-sm-6 text-center">
                    
                    <h3>Les bières
                        <small>bouteilles</small>
                    </h3>
                    <p>
                        <table class="table ">
                            <thead>
                            </thead>
                            <tbody>
                                <?php
                                $lesBieres = getBeers();
                                    foreach($lesBieres as $uneBiere)
                                    { echo
                                        (   
                                        '<tr>
                                            <td>'.$uneBiere['nom'].'</td>
                                            <td>'.$uneBiere['prix'].' €</td>
                                         </tr>'

                                         );

                                    }
                                ?>
                            </tbody>
                        </table>
                    </p>
                </div>
                <div class="col-sm-6 text-center">
                    <h3>Nos Alcools 
                        <small> au verre</small>
                    </h3>
                    <p>
                        <table class="table">
                            <thead>
                            </thead>
                            <tbody>
                               <?php
                                $lesAclools = getAlchool();
                                    foreach($lesAclools as $uneBiere)
                                    { echo
                                        (   
                                        '<tr>
                                            <td>'.$uneBiere['nom'].'</td>
                                            <td>'.$uneBiere['prix'].' €</td>
                                         </tr>'

                                         );

                                    }
                                ?>
                            </tbody>
                        </table>
                    </p>
                </br>
                    <h3>Softs 
                        <small>Chauds et Froids </small>
                    </h3>
                    <p>
                        <table class="table">
                            <thead>
                            </thead>
                            <tbody>
                                 <?php
                                $lesSofts = getSofts();
                                    foreach($lesSofts as $uneBiere)
                                    { echo
                                        (   
                                        '<tr>
                                            <td>'.$uneBiere['nom'].'</td>
                                            <td>'.$uneBiere['prix'].' €</td>
                                         </tr>'

                                         );

                                    }
                                ?>
                            </tbody>
                        </table>
                    </p>
                </div>
                    
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>De Troubadour MENEN</p>
                    <h5> <a href="login.php"> Administration </a> </h5>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>