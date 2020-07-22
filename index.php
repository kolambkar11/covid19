<?php
    include 'logic.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta name="title" content="Covid-19 Tracker">
	<meta name="description" content="A coronavirus is a common virus that causes an infection in your nose, sinuses, or upper throat. COVID-19 is a novel strain of coronavirus that causes mild flu-like symptoms, but severe cases can be fatal. Get the latest on everything there is to know about the new coronavirus and protect yourself today.">
	<meta name="keywords" content="coronavirus symptoms, symptoms of coronavirus, covid 19 symptoms, symptoms of covid 19, symptoms of covid-19, covid-19 symptoms">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="English">
	<meta name="revisit-after" content="1 days">
	<meta name="author" content="Ashutosh Kolambkar">

	<link rel="shortcut icon" href="covid19.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <!-- Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/996973c893.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- My Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <title>Covid-19 Tracker</title>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-158284366-3"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-158284366-3');
	</script>

</head>
<body>
    <div class="container-fluid bg-light p-5 text-center my-3">
        <h1 class="">Covid-19 Tracker</h1>
		<h5 class="text-info">"Prevention is the Cure."</h5>
        <p class="text-muted">Stay Indoors Stay Safe.</p>
    </div>

    <div class="container my-5">
        <div class="row text-center">
            <div class="col-4 text-warning">
                <h5>Confirmed</h5>
                <?php echo $total_confirmed;?>
            </div>
            <div class="col-4 text-success">
                <h5>Recovered</h5>
                <?php echo $total_recovered;?>
            </div>
            <div class="col-4 text-danger">
                <h5>Deceased</h5>
                <?php echo $total_deaths;?>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-bordered" id="myTable">

                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Countries</th>
                        <th scope="col">Confirmed</th>
                        <th scope="col">Recovered</th>
                        <th scope="col">Deceased</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($data as $key => $value){
                            $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'];
                    ?>
                        <tr>
                            <th scope="row"><?php echo $key?></th>
                            <td>
                                <?php echo $value[$days_count]['confirmed'];?>
                                <?php if($increase != 0){ ?>
                                    <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>  
                                <?php } ?>    
                            </td>
                            <td><?php echo $value[$days_count]['recovered'];?></td>
                            <td><?php echo $value[$days_count]['deaths'];?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="footer mt-auto pt-3 pb-4 bg-light">
        <div class="container text-center">
				<p class="text-muted">Developed by <br><a href="http://ashutoshkolambkar.000webhostapp.com/" class="footer-icons" target="_blank">Ashutosh Kolambkar</a></p>
				<p class="text-muted">Be Social With Me.</p>
				<a href="https://www.facebook.com/ashutosh.kolambkar"><i class="footer-icons fa fa-facebook-official w3-hover-opacity"></i></a>
				<a href="https://www.instagram.com/k_o_l_i_g_r_a_p_h_y/">  <i class="footer-icons fa fa-instagram w3-hover-opacity"></i></a>
				<a href="https://kolambkar11.tumblr.com">  <i class="footer-icons fa fa-tumblr w3-hover-opacity"></i></a>
				<a href="https://twitter.com/10Ashutosh10">  <i class="footer-icons fa fa-twitter w3-hover-opacity"></i></a>
				<a href="https://www.linkedin.com/in/ashutosh-kolambkar-23257a102/">  <i class="footer-icons fa fa-linkedin w3-hover-opacity"></i></a>
				<a href="https://wa.me/918692805802">  <i class="footer-icons fa fa-whatsapp w3-hover-opacity"></i></a>
			
        </div>
</footer>

	<script>
		$(document).ready( function () {
			$('#myTable').DataTable( {
				responsive: true
			} );
		} );
	</script>
</body>
</html>
