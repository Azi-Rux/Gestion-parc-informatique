
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Parc Informatique ENSAS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="js/chartinator.js" ></script>
    


<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	

   <div class="left-content">
	   <div class="mother-grid-inner">

            <?php include("Menu.php") ?>

<!--inner block start here-->

<div class="inner-block">

<!--market updates updates-->
	 <div class="market-updates">
			<div class="col-md-6 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
						<h3>83</h3>
						<h4>Registered User</h4>
						<p>Other hand, we denounce</p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-file-text-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>

			<div class="col-md-6 market-update-gd">
				<div class="market-update-block clr-block-2">
				 <div class="col-md-8 market-update-left">
					<h3>135</h3>
					<h4>Daily Visitors</h4>
					<p>Other hand, we denounce</p>
				  </div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
	
		   <div class="clearfix"> </div>
		</div>
<!--market updates end here-->


<div class="market-updates" style="margin-top: 50px;">
      <div class="col-md-6 market-update-gd">
        <div class="market-update-block clr-block-1">
          <div class="col-md-8 market-update-left">
            <h3>83</h3>
            <h4>Registered User</h4>
            <p>Other hand, we denounce</p>
          </div>
          <div class="col-md-4 market-update-right">
            <i class="fa fa-file-text-o"> </i>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>

      <div class="col-md-6 market-update-gd">
        <div class="market-update-block clr-block-2">
         <div class="col-md-8 market-update-left">
          <h3>135</h3>
          <h4>Daily Visitors</h4>
          <p>Other hand, we denounce</p>
          </div>
          <div class="col-md-4 market-update-right">
            <i class="fa fa-eye"> </i>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
      
       <div class="clearfix"> </div>
    </div>





<!--mainpage chit-chating-->
<div class="chit-chat-layer1">
	<div class="col-md-6 chit-chat-layer1-left">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                  Listes des techniciens
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Nom</th>
                                      <th>Email</th>                                   
                                                                        
                                      <th>Telephone</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php

                            try {
                                      include("../Login/Model/ConnexionDb.php");
                                       $dbh=Connect();
                                        $stmt=$dbh->prepare("SELECT * FROM technicien") ;
                                        $stmt->execute();
                                    }catch(PDOException $e)
                                    {
                                         echo  $e->getMessage();
                                    }
                            while($ligne=$stmt->fetch()){
                              echo "<tr>";
                              echo "<td>".$ligne["id_tech"]."</td>";
                              echo "<td>".$ligne["nom_tech"]."</td>";
                              echo "<td>".$ligne["email_tech"]."</td>";
                              echo "<td>".$ligne["tel_tech"]."</td>";
                              echo '<td>' ;
              echo "<a href='Contoller/suppression.php?id_tech=".$ligne["id_tech"]." ' onclick='return confirm(\"Voulez vous supprimer?\");' ><img src='supr.png' /></a>";
              echo"</td>";
                              echo "</tr>";
                               
                            }

                                                                
                              ?>

                          </tbody>
                      </table>
                  </div>
             </div>
      </div>
      
     <div class="clearfix"> </div>
</div>
<!--main page chit chating end here-->
</div>
<!--inner block end here-->



<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>

<?php include("sidebarMenu.php")  ?>


<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     