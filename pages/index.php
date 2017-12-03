<?php
include "../process/connection.php";
if(getLoginType() != "pegawai" && isLoged()){
    location(currentPath());
}
$title = "Administrasi Puskesmas Kuta Selatan";
$aplikasi = "Booking Antrian Puskesmas";
$subAplikasi = "Puskesmas Kuta Selatan";

?>

<!DOCTYPE html>
<html>
<head>
	<?php
        include "part/header.php";
    ?>
	<title><?php echo $title; ?></title>
</head>
<body>

    <div id="wrapper">
        <!-- Navigation -->
        <?php include "part/navbar.php" ?>

        <div id="page-wrapper">
        	<!-- page content -->
        	
        <?php 
        // include for content
        	if(isLoged()){
       			include 'home.php';
       		}else{
                include "login.php";
        	}
        ?>

        	<!-- /page content -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

<?php include "part/footer.php"; ?>
</body>
</html>