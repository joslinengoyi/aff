
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title> Africa Fintech Forum | AFF 2021</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="shortout icon" href="{{ asset('images/logo fintech.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style-starter.css') }} ">
  </head>
  <body>

<!--w3l-header-->

<header class="w3l-header-nav">
	<!--/nav-->
	<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
		<div class="container">
			<a class="navbar-brand" href="/accueil">AFRICA FINTECH <span>FORUM</span></a>
			  
						<a class="navbar-brand" href="/accueil">
							<img src="{{asset('images/logo fintech.png')}} " alt="Logo Africa Fintech" title="Logo Africa Fintech" style="height:35px;" />
						</a>
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa icon-expand fa-bars"></span>
				<span class="fa icon-close fa-times"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto pl-lg-5">
					<li class="nav-item @@home__active">
						<a class="nav-link" href="/accueil">Accueil</a>
					</li>
					<li class="nav-item @@about__active">
						<a class="nav-link" href="/about">Présentation</a>
					</li>
					<li class="nav-item @@services__active">
						<a class="nav-link" href="/services">Services</a>
					</li>
					
					<li class="nav-item @@contact__active">
						<a class="nav-link" href="/contact">Contact</a>
					</li>
				</ul>
				
                <!--/search-right-->
				<div class="search-right">
					<a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
					<!-- search popup -->
					<div id="search" class="pop-overlay">
						<div class="popup">

							<form action="#" method="post" class="search-box">
								<input type="search" placeholder="Tapez la recherche" name="search" required="required"
									autofocus="">
								<button type="submit" class="btn"><span class="fa fa-search" aria-hidden="true"></span></button>
							</form>

						</div>
						<a class="close" href="#close">×</a>
					</div>
					<!-- /search popup -->
				</div>
				<!--//search-right-->
				
			</div>
		</div>
	</nav>
	<!--//nav-->
</header>
<!-- //w3l-header -->
@yield('accueil')
@yield('aboutme')
@yield ('contacte')
 
@yield('service')


<!-- grids block 5 FOOTER  -->
<section class="w3l-footer-29-main">
  <div class="footer-29">
      <div class="container">
          <div class="d-grid grid-col-4 footer-top-29">
              <div class="footer-list-29 footer-1">
                  <h6 class="footer-title-29">Contactez-nous</h6>
                  <ul>
                      <li><p><span class="fa fa-map-marker"></span> Plateaux, Abidjan, Cote d'Ivoire</p></li>
                      <li><a href="tel:+225 59 87 69 98"><span class="fa fa-phone"></span> +225 59 87 69 98</a></li>
                      <li><a href="mailto:info@africafintech.org" class="mail"><span class="fa fa-envelope-open-o"></span> info@africafintech.org</a></li>
                  </ul>
                  <div class="main-social-footer-29">
                      <a href="https://www.facebook.com/affintech/" class="facebook"><span class="fa fa-facebook"></span></a>
                      <a href="https://twitter.com/affintechforum?s=21" class="twitter">
                        <span class="fa fa-twitter"></span></a>
                      <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                      <a href="######" class="whatsapp"><span class="fa fa-whatsapp"></span></a>
                  </div>
              </div>
              <div class="footer-list-29 footer-2">
                  <ul>
                      <h6 class="footer-title-29">Liens en Vedette</h6>
                      <li><a href="/accueil">Notre Mission</a></li>
                      <li><a href="/accueil">Notre Vision</a></li>
                      <li><a href="/accueil">Nos partenaires</a></li>
                  </ul>
              </div>
              <div class="footer-list-29 footer-3">
                 
                  <h6 class="footer-title-29">Newsletter </h6>
                  <p class="mb-3">Recevez dans votre messagerie nos dernieres infos</p>
          <form action="#" class="subscribe" method="post">
            <input type="email" name="email" placeholder="Email" required="">
            <button><span class="fa fa-envelope-o"></span></button>
          </form>
          <p>Abonnez-vous au newsleter</p>
          <p>Votre courriel reste confidentiel</p>
        
              </div>
              <div class="footer-list-29 footer-4">
                  <ul>
                      <h6 class="footer-title-29">Lien rapide</h6>
                      <li><a href="/accueil">Accueil</a></li>
                      <li><a href="/about">Présentation</a></li>
                      <li><a href="/services">Services</a></li>
                      <li><a href="/contact">Contact</a></li>
                  </ul>
              </div>
          </div>
          <div class="d-grid grid-col-2 bottom-copies">
              <p class="copy-footer-29">© 2021 AFRICA FINTECH. All rights reserved | Designed by <a href="https://www.ultimatecorporationrdc.org">Ultimate Corporation</a></p>
               <ul class="list-btm-29">
                      <li><a href="/accueil">Politique privée</a></li>
                      <li><a href="/accueil">Termes</a></li>
                      
                  </ul>
          </div>
      </div>
  </div>
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</section>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- //footer-28 block -->
</section>
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<!-- Template JavaScript -->
<script src="assets/js/all.js"></script>
<!-- Smooth scrolling -->
<!-- <script src="assets/js/smoothscroll.js"></script> -->
<script src="assets/js/owl.carousel.js"></script>

<!-- script for -->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->

</body>

</html>
<!-- // grids block 5 -->


