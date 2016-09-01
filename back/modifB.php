<?php
    session_start();
    if($_SESSION)
    { 
?>
<?php
    include_once('fonctions.php');
    $id = $_GET['id'];
    $laBiere = getBeer($id);
?>
<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TroubaAdmin</title>


    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">De Troubadour</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
 
                        <li class="divider"></li>
                        <li><a href="deconnect.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

                       <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Accueil</a>
                        </li>
                          <li>
                            <a href="ajoutAutre.php"><i class="fa fa-plus fa-fw"></i> Ajout</a>
                        </li>
                        <li>
                            <a href="modifPintes.php"><i class="fa fa-bar-chart-o fa-fw"></i> Bières </a>
                        </li>
                        <li>
                            <a href="modifAutre.php"><i class="fa fa-bar-chart-o fa-fw"></i> Alcools/Softs</a>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
        </nav>

        <div id="page-wrapper" style="min-height: 448px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bières</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Troubadour
                        </div>

    
                                        
                                  
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form action="modificationBiere.php" method="POST">
                               <div class="form-group">
                                    <label>Nom Bière : </label>
                                    <input type="text" class="form-control" value="<?php echo $laBiere['nom'] ?>" name="nom">
                                    <p class="help-block">Ex : Karmeliet</p>
                                 </div>
                                <div class="form-group">
                                    <label>Prix : </label>
                                    <input type="text" class="form-control" value="<?php echo $laBiere['prix'] ?>" name="prix">
                                    <input type="hidden" class="form-control" value="<?php echo $laBiere['id'] ?>" name="id">
                                 </div>
                                 <button type="submit" class="btn btn-outline btn-primary">Valider</button>
                            </form>

                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper --> 

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>




</body><iframe allowtransparency="true" frameborder="0" id="abs-top-frame" src="chrome-extension://flliilndjeohchalpbbcdekjklbdgfkk/html/top.html?1425924048635#minimized" style="position: fixed; z-index: 4294967295; overflow: hidden; top: 0px; left: 0px; right: 0px; width: 138px; height: 13px; max-height: none; min-height: 0px; margin: 0px auto; padding: 0px; border: 0px; display: block; background-color: transparent;"></iframe></html>
<?php }
else {
    echo 'Acces Refusé ';
}?>