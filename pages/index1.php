<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SERA - Systems Engineering Recovery and Automation</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- MetisMenu CSS 
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">-->

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <!-- <!-- <link href="../vendor/morrisjs/morris.css" rel="stylesheet"> -->

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!--<img src="../images/ser3.png" alt="SERA" class="navbar-brand">-->
    
    <div id="wrapper">

     
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              
        
            </div>
            </div>
            <!-- /.navbar-header -->

                    <img src="../images/Sera_Updated.png" alt="SERA" width="220" height="75" style="padding-left: 0px; padding-top: 10px; padding-bottom: 5px">

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                                 <!-- /.nav-second-level -->
                        </li>
                        
            <!-- /.navbar-static-side -->
        </nav>
<?php
 
// If there was no submit variable passed to the script (i.e. user has visited the page without clicking submit), display the form:
if(!isset($_POST["submit"]))
{
    ?>
    <form name="testForm" id="testForm" action="index1.php" method="post" />
        <input type="submit" class="btn btn-primary btn-lg" style="float: right" name="submit" id="submit" value="Get LERMS Status" />
    </form>
    <?php    
}
// Else if submit was pressed, check if all of the required variables have a value:
elseif((isset($_POST["submit"])))
{
    // Get the variables submitted by POST in order to pass them to the PowerShell script:
    //$username = $_POST["username"];
    // Best practice tip: We run out POST data through a custom regex function to clean any unwanted characters, e.g.:
    // $username = cleanData($_POST["username"]);
         
    // Path to the PowerShell script. Remember double backslashes:
    $psScriptPath = "..\Powershell\get-process.ps1";
 
    // Execute the PowerShell script, passing the parameters:
    $query = shell_exec("powershell -command $psScriptPath< NUL");
    echo $query;    
}
// Else the user hit submit without all required fields being filled out:
else
{
    echo "Sorry, you did not complete all required fields. Please go back and try again.";
}
?>



    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript 
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
</body>
</html>
 