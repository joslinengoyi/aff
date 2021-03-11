@extends('master')

@section('aboutme')

		<section class="w3l-about-breadcrum">
		  <div class="breadcrum-bg">
		    <div class="container py-5">
		      <h2>Présentation</h2>
		      <p><a href="/accueil">Accueil</a> &nbsp; / &nbsp; Présentation</p>
		    </div>
		  </div>
		</section>

		<section class="w3l-features-4">
			<!-- /features -->
				<div class="features py-5" id="features">
		            <div class="container py-lg-5">
					
			<div class="feat-top row">

					<div class="fea-gd-vv col-lg-8 row mb-lg-0 mb-5 pr-lg-5">	
					   <div class="float-lt feature-gd col-md-6">	
						<img src="{{ asset('images/g5.jpg')}} " class="img-fluid" alt="">
							 <div class="icon-info">
								<h5 class="mt-3">Notre Mission</h5>
								<p> le principal objectif est d'échanger afin de contribuer au développement d'un écosystème complet en Afrique en général et en RDC en particulier. </p>
							</div>
							 
						</div>	
						<div class="float-mid feature-gd col-md-6 mt-md-0 mt-5">	
							<img src="{{ asset('images/g3.jpg')}} " class="img-fluid" alt="">
							 <div class="icon-info">
								<h5 class="mt-3">Notre Vision</h5>
								<p> Consectetur adipisicingelit, sed do eiusmod tempor incididunt primis in faucibus orci luctus et ultrices </p>
							</div>
					 </div> 
								 				 
				  </div> 
				  <div class="feat-top-left col-lg-4">
					<h6 class="sub-title">“We are always looking ahead to stay on top of the latest design & technology.”</h6>
					<p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt primis in faucibus orci luctus et ultrices posuere primis in faucibus</p>
					
				</div>
				</div>
				
				 </div>
			   </div>
		   <!-- //features -->
		</section>

		<!-- //content-with-photo4 block-->

			<section class="w3l-content-with-photo-4" id="about">
		    <div id="content-with-photo4-block" class="py-5"> 
		        <div class="container py-md-3">
		            <div class="cwp4-two row">
		               <div class="cwp4-image col-lg-6">
		                    <img src="{{ asset ('images/g5.jpg')}} " class="img-fluid" alt="" />
		                </div>
		                <div class="cwp4-text col-lg-6 pl-lg-5 mt-lg-0 mt-5">
		                        <h3>Qui sommes-nous?</h3>
		                   
		                  <p>AFRICA FINTECH FORUM est une organisation à but non lucratif,crée depuis 2016, la promotion de la finance digitale en sa qualité d’axe réel de développement de l’action publique, mais aussi de soutien aux acteurs économiques, en plus d’être un instrument de la vie quotidienne pour les populations.  </br>Depuis trois éditions AFRICA FINTECH TOUR a parcouru 24 pays, accompagné l’initiation de 6 associations pays et suscité la création de plus de 10 fintechs.
						  </p>
		                    <ul class="cont-4">
		                        <li><span class="fa fa-check"></span>Website Designing and Development</li>
		                        <li><span class="fa fa-check"></span>Android and iOs Apps Development </li>
		                        <li><span class="fa fa-check"></span>Successfully Providing Business Solution from 20 years</li>
		                        <li><span class="fa fa-check"></span>Excellence Records </li>
		                    </ul>
		                </div>
		                
		            </div>
		        </div>
		    </div>
			</section>

		<!-- //content-with-photo4 block-->

		<!-- //specifications-->
		<section class="w3l-specifications-9">
		    <div class="main-w3 py-5" id="stats">
		        <div class="container py-md-3">
		            
		           <div class="main-cont-wthree-fea row ">
		                <div class="grids-speci1 col-lg-3 col-6">
		                    <div class="spec-2 text-center">
		                     <span class="fa fa-hourglass"></span>
		                    <h3 class="title-spe">30</h3>
		                    <p>African, American, Asian and European countries</p>
		                </div>
		                </div>
		                <div class="grids-speci1 midd-eff-spe col-lg-3 col-6">
		                    <div class="spec-2 text-center">
		                        <span class="fa fa-folder"></span>
		                    <h3 class="title-spe">20</h3>
		                    <p>Exhibitors</p>
		                    </div>
		                </div>
		                <div class="grids-speci1 las-but col-lg-3 col-6  mt-lg-0 mt-4">
		                    <div class="spec-2 text-center">
		                        <span class="fa fa-smile-o"></span>
		                    <h3 class="title-spe">40</h3>
		                    <p>Speakers</p>
		                    </div>
		                </div>
		                <div class="grids-speci1 las-t col-lg-3 col-6  mt-lg-0 mt-4">
		                    <div class="spec-2 text-center">
		                        <span class="fa fa-trophy"></span>
		                        <h3 class="title-spe">150</h3>
		                        <p>FinTech startups, insurtech, regtech, agritech, esport</p>
		                        </div>
		                    </div>
		            </div>
		            
		        </div>
		    </div>
		    <!-- //specifications -->
		</section>

		<section class="w3l-team-main" id="team">
				<div class="team py-5">
					<div class="container py-lg-4">
						<div class="heading text-center mx-auto">
							<h3 class="head">Notre équipe</h3>
							<p class="my-3 head "> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
							  Nulla mollis dapibus nunc, ut rhoncus
							  turpis sodales quis. Integer sit amet mattis quam.</p>
						  </div>
						<div class="row team-row pt-3 mt-5">
							<div class="col-lg-3 col-6 team-wrap">
								<div class="team-info text-center">
									<div class="column position-relative">
										<a href="#url"><img src="{{ asset('images/team1.jpg')}}" alt="" class="img-fluid team-image"></a>
									</div>
									<div class="column">
										
										<h3 class="name-pos"><a href="#url">Micheal Wagou</a></h3>
										<p>Director</p>
										<div class="social">
											<div class="social-left">
												<a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
												<a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
												<a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
												
											</div>

										</div>
									</div>
								</div>
							</div>
							<!-- end team member -->

							<div class="col-lg-3 col-6 team-wrap">

								<div class="team-info text-center">
									<div class="column position-relative">
										<a href="#url"><img src="{{ asset('images/team2.jpg') }} " alt="" class="img-fluid team-image"></a>
									</div>
									<div class="column">
										
										<h3 class="name-pos"><a href="#url">Alex Mitchell</a></h3>
										<p>Manager</p>
										<div class="social">
											<div class="social-left">
												<a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
												<a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
												<a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
											</div>

										</div>
									</div>
								</div>
							</div>
							<!-- end team member -->

							<div class="col-lg-3 col-6 team-wrap">
								<div class="team-info text-center">
									<div class="column position-relative">
										<a href="#url"><img src="{{ asset('images/team3.jpg')}} " alt="" class="img-fluid team-image"></a>
									</div>
									<div class="column">
										
										<h3 class="name-pos"><a href="#url">Scott Colon</a></h3>
										<p>Supervisor</p>
										<div class="social">
											<div class="social-left">
												<a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
												<a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
												<a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
											</div>
										</div>
									</div>
								</div>

							</div>
							<!-- end team member -->
							<!-- end team member -->

							<div class="col-lg-3 col-6 team-wrap">
								<div class="team-info text-center">
									<div class="column position-relative">
										<a href="#url"><img src=" {{ asset('images/team4.jpg')}} " alt="" class="img-fluid team-image"></a>
									</div>
									<div class="column">
										
										<h3 class="name-pos"><a href="#url">John Harris</a></h3>
										<p>Consultant</p>
										<div class="social">
											<div class="social-left">
												<a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
												<a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
												<a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</section>

@stop