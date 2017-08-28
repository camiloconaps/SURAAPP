<!DOCTYPE html>
<?php
$idsupervisor = $_GET[supervisor];
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SURA SEGUROS ICC</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             General
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr class="header-table">
                                            <th>Vendedor</th>
                                            <th>Ventas OK</th>
                                            <th>Devueltas</th>
                                            <th>Pendientes</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="body2-table">
                                            <td>2</td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                        </tr>
                                        <tr class="body2-table">
                                            <td>2</td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                        </tr>
                                        <tr class="body2-table">
                                            <td>2</td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                        </tr>
                                        <tr class="body2-table">
                                            <td>2</td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                        </tr>
                                        <tr class="body2-table">
                                            <td>2</td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                        </tr>
                                        <tr class="body2-table">
                                            <td>2</td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                        </tr>
                                        <tr class="body2-table">
                                            <td>2</td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                        </tr>
                                        <tr class="body2-table">
                                            <td>2</td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                            <td class="center"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
