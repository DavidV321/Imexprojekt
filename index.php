<?php
    //nastaveni uvodni stranky
 

    //napojeni dat ze stranky kde vytvarim dynamicky seznam stranek
    require "./seznam-stranek.php";

    if (array_key_exists("id-stranky", $_GET)) {
        $id_stranky = $_GET["id-stranky"];
    }else {
        $id_stranky = "uvod";
    }


?>





<!DOCTYPE html>
<html lang="cs">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styly.css">
	<link rel="stylesheet" href="queries.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $pole_stranek[$id_stranky]->get_titulek(); ?></title>
	<link rel="icon" type="images/png" href="images/favicona.jpg">
	<!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />

	<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
    
    <script src="script.js"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7KJXM0YZ1T"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7KJXM0YZ1T');
</script>

</head>
<body>
	<header>
		<div class="header-img">
		<img src="images/imex-logo-black-white.png">
	 </div>

   
		<nav>
			
			<ul>
                <!-- vlozeni dynamickeho menu-->
                <?php
                require "./menu.php";
                ?>
			</ul>
			<div class="clearfix"></div> 

		</nav>

		<!-- ========= mobile navigation =========== -->

		<section class="mobile-nav">
		  <nav class="navbar navbar-light" style="background-color: #d4d4d4 ;">
			<div class="container-fluid">
			  <button
				class="navbar-toggler ms-auto"
				type="button"
				data-mdb-toggle="collapse"
				data-mdb-target="#navbarToggleExternalContent3"
				aria-controls="navbarToggleExternalContent3"
				aria-expanded="false"
				aria-label="Toggle navigation"
			  >
				<i class="fas fa-bars"></i>
			  </button>
			</div>
		  </nav>

		  <div class="collapse" id="navbarToggleExternalContent3">
			<div class="bg-dark shadow-3 p-4">
			 <a href="Index.html"><button class="btn link-light btn-block border-bottom m-0">Úvod</button></a> 
			 <a href="ucetnictvi.html"><button class="btn link-light btn-block border-bottom m-0">Účetnictví</button></a>
			 <a href="facility.html"><button class="btn link-light btn-block border-bottom m-0">Facility</button></a>
			 <a href="sluzby.html"><button class="btn link-light btn-block border-bottom m-0">Služby</button></a>
			 <a href="reference.html"><button class="btn link-light btn-block border-bottom m-0">Reference</button></a>
			 <a href="kontakty.html"><button class="btn link-light btn-block m-0">Kontakty</button></a>
			
			</div>
		  </div>
		</section>

	</header>

            <section>

                <?php
                    // napojeni obsahu stranek
                    echo $pole_stranek[$id_stranky]->get_obsah();



                ?>
            </section>

    
	<footer>
		 &copy; 2023  WebproDesign &copy; www.WebproDesign.cz
	</footer>

	<!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>

</body>
</html>