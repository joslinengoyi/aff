@extends('master')

@section('accueil')
      <section class="w3l-service-breadcrum">
        <div class="breadcrum-bg">
          <div class="container py-5">
            <h2>Accueil</h2>
            <p><a href="/accueil">Bienvenu(e) sur Africa Fintech Forum</p>
          </div>
        </div>
      </section>
      <!-- /SECTION 1 - CONTENATNT LE CARROUSEL QUI NE S AFFICHE PAS -->

     <!-- <section class="w3l-main-slider" id="home">
       
                <div class="companies20-content"> 
                    <div class="owl-one owl-carousel owl-theme">
                          <div class="item" >
                            <li>

                              <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
                                
                                <div class="banner-info">
                                  <div class="container">
                                    <div class="banner-info-bg mx-auto text-center">
                                      <h5>Check Out Our Latests Tips & Tricks </h5>
                                     <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="services.html">Read More</a>
                                     <div class="scroll-button">
                                      <a href="#about" class="scroll">
                                        <div class="icon-scroll">
                                          <div class="mouse">
                                            <div class="wheel"></div>
                                          </div>
                                          <div class="icon-arrows">
                                            <span></span>
                                          </div>
                                        </div>
                                      </a>
                                    </div>
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
                            </li>
                          </div>
                          <div class="item">
                            <li>
                              <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
                                <div class="banner-info">
                                  <div class="container">
                                    <div class="banner-info-bg mx-auto text-center">
                                      <h5>The Largest business Expert in Newyork</h5>
                                      <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="/services">Read More</a>
                                      <div class="scroll-button">
                                        <a href="#about" class="scroll">
                                          <div class="icon-scroll">
                                            <div class="mouse">
                                              <div class="wheel"></div>
                                            </div>
                                            <div class="icon-arrows">
                                              <span></span>
                                            </div>
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </div>
                          <div class="item">
                            <li>
                              <div class="slider-info banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
                                <div class="banner-info">
                                  <div class="container">
                                    <div class="banner-info-bg mx-auto text-center">
                                      <h5>Check Out Our Latests Tips & Tricks </h5>
                                     <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="/service">Read More</a>
                                     <div class="scroll-button">
                                      <a href="#about" class="scroll">
                                        <div class="icon-scroll">
                                          <div class="mouse">
                                            <div class="wheel"></div>
                                          </div>
                                          <div class="icon-arrows">
                                            <span></span>
                                          </div>
                                        </div>
                                      </a>
                                    </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </div>
                          <div class="item">
                            <li>
                              <div class="slider-info banner-view banner-top3 bg bg2" data-selector=".bg.bg2">
                                <div class="banner-info">
                                  <div class="container">
                                    <div class="banner-info-bg mx-auto text-center">
                                      <h5>The Largest business Expert in Newyork</h5>
                                      <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="services.html">Read More</a>
                                      <div class="scroll-button">
                                        <a href="#about" class="scroll">
                                          <div class="icon-scroll">
                                            <div class="mouse">
                                              <div class="wheel"></div>
                                            </div>
                                            <div class="icon-arrows">
                                              <span></span>
                                            </div>
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </div>
                    </div>
                </div>

                  <script src="assets/js/owl.carousel.js"></script>
                 
                  <script>
                    $(document).ready(function () {
                      $('.owl-one').owlCarousel({
                        loop: true,
                        margin: 0,
                        nav: false,
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
                          
      </section> -->
      
      <!-- /FIN SECTION 1 - CARROUSEL ET SCRIPT-->

        <!-- /SECTION 2 - LES CORPS DU TEXTE -->
        <section class="w3l-features-4">
        	<!-- /features -->
        		<div class="features py-5" id="about">
                    <div class="container py-lg-5">
                      <div class="feat-top row">
                        <div class="feat-top-left col-lg-4">
                        	<h4 class="sub-title">??Ouvrir l'industrie mondiale de la fintech en Afrique??</h4>
                        	<p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt primis in faucibus orci luctus et ultrices posuere primis in faucibus</p>
                        	<a class="btn btn-secondary btn-theme2 mt-4" href="services.html"> See More Services  &rarr;</a>
                        </div>
                        			<div class="fea-gd-vv col-lg-8 row mt-lg-0 mt-5 pl-lg-5">	
                        			   <div class="float-lt feature-gd col-md-6">	
                        				<img src="{{ asset ('images/g5.jpg')}}" class="img-fluid" alt="">
                        					 <div class="icon-info">
                        						<h5 class="mt-3"><a href="#">Digital Innovation
                        							</a></h5>
                        						<p> Consectetur adipisicingelit, sed do eiusmod tempor incididunt primis in faucibus orci luctus et ultrices </p>
                        					</div>
                        					 
                        				</div>	
                        				<div class="float-mid feature-gd col-md-6 mt-md-0 mt-5">	
                        					<img src="{{ asset ('images/g3.jpg')}} " class="img-fluid" alt="">
                        					 <div class="icon-info">
                        						<h5 class="mt-3"><a href="#">Branding Strategy
                        						</a></h5>
                        						<p> Consectetur adipisicingelit, sed do eiusmod tempor incididunt primis in faucibus orci luctus et ultrices </p>
                        					</div>
                        			 </div> 
                        						 				 
                        		  </div> 
                        		</div>
                        		 </div>
                        	   </div>
           <!-- //features -->
        </section>
        <div class="w3l-open-block-services py-5" id="services">
        		<div class="container py-lg-5 pt-4">
        			<div class="heading text-center mx-auto">
        				<h3 class="head">Designed for you</h3>
        				<p class="my-3 head"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
        				  Nulla mollis dapibus nunc, ut rhoncus
        				  turpis sodales quis. Integer sit amet mattis quam.</p>
        				  
        			  </div>
        			<div class="row pt-5 mt-3">
        				<div class="col-lg-3 col-md-6">
        					<div class="card text-center">
        						<div class="icon-holder">
        							<span class="fa fa-ravelry service-icon" aria-hidden="true"></span>
        						</div>
        						<h4 class="mission">Consulting</h4>
        						<div class="open-description">
        							<p>Maecenas sodales eu commodo ligula eget dolor dolor sit amet ligula</p>
        							<a href="#read">Read More</a>
        						</div>
        					</div>
        				</div>
        				<div class="col-lg-3 col-md-6 mt-md-0 mt-3 pt-md-0 pt-3">
        					<div class="card text-center">
        						<div class="icon-holder">
        							<span class="fa fa-send-o service-icon" aria-hidden="true"></span>
        						</div>
        						<h4 class="mission">Valuable Ideas</h4>
        						<div class="open-description">
        							<p>Maecenas sodales eu commodo ligula eget dolor dolor sit amet ligula</p>
        							<a href="#read">Read More</a>
        						</div>
        					</div>
        				</div>
        				<div class="col-lg-3 col-md-6 mt-lg-0 mt-3 pt-lg-0 pt-3">
        					<div class="card text-center">
        						<div class="icon-holder">
        							<span class="fa fa-clock-o service-icon" aria-hidden="true"></span>
        						</div>
        						<h4 class="mission">Excellent Timing</h4>
        						<div class="open-description">
        							<p>Maecenas sodales eu commodo ligula eget dolor dolor sit amet ligula</p>
        							<a href="#read">Read More</a>
        						</div>
        					</div>
        				</div>
        				<div class="col-lg-3 col-md-6 mt-lg-0 mt-3 pt-lg-0 pt-3">
        					<div class="card text-center">
        						<div class="icon-holder">
        							<span class="fa fa-money service-icon" aria-hidden="true"></span>
        						</div>
        						<h4 class="mission">Budget Friendly</h4>
        						<div class="open-description">
        							<p>Maecenas sodales eu commodo ligula eget dolor dolor sit amet ligula</p>
        							<a href="#read">Read More</a>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        </div>
        <section class="w3l-index6 py-5">
          <div class="container py-md-3 text-center">
            <div class="heading text-center mx-auto">
        				<h3 class="head text-white">Developing first class solutions
                  for our clients.</h3>
        				<p class="my-3 head text-white"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
        				  Nulla mollis dapibus nunc, ut rhoncus
        				  turpis sodales quis. Integer sit amet mattis quam.</p>
        				  
        			  </div>
            <div class="buttons mt-5">
              <a href="/contact" class="btn btn-outline-primary mr-2 theme-button lft-btn">Contactez-nous</a>
              <a href="/contact" class="btn btn-primary theme-button ml-2">Get Started</a>
            </div>
          </div>
        </section>
        <section class="w3l-testimonials" id="testimonials">
          <div class="customers-6-content py-5">
            <div class="container py-lg-3">
              <div class="heading text-center mx-auto">
                <h3 class="head">What They Says</h3>
                <p class="my-3 head "> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                  Nulla mollis dapibus nunc, ut rhoncus
                  turpis sodales quis. Integer sit amet mattis quam.</p>
              </div>
             
              <div id="customerhnyCarousel" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                  <li data-target="#customerhnyCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#customerhnyCarousel" data-slide-to="1"></li>
                              
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner pb-5">

                  <div class="carousel-item active">
                    <div class="customer row py-5 mt-3">
                      <div class="col-lg-4 col-md-6">
                        <div class="card">
                         
                          <div class="card-body">
                            <img class="card-img-top img-responsive" src="{{ asset ('images/c1.jpg')}} " alt="">
                            <h3 class="card-title mt-2">Henry Nicholas</h3>
                            <p class="sub-title mb-3">Cofounder</p>
                            <p class="card-text">  "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore"
                            </p>
                          
                            
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 off-testi-2">
                        <div class="card">
                        
                          <div class="card-body">
                            <img class="card-img-top img-responsive" src="{{ asset ('images/c2.jpg')}} " alt="">
                            <h3 class="card-title mt-2">Mark Waugh</h3>
                            <p class="sub-title mb-3">Web Designer</p>
                            <p class="card-text">  "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore"
                            </p>
                            
                          
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 off-testi">
                        <div class="card">
                          
                          <div class="card-body">
                            <img class="card-img-top img-responsive" src="{{ asset ('images/c3.jpg')}} " alt="">
                            <h3 class="card-title mt-2">Sarina Willams</h3>
                            <p class="sub-title mb-3">Graphic Designer</p>
                            <p class="card-text">  "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore"
                             </p>
                           
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--.item-->

                  <div class="carousel-item">
                    <div class="customer row py-5 mt-3">
                      <div class="col-lg-4 col-md-6">
                        <div class="card">
                         
                          <div class="card-body">
                            <img class="card-img-top img-responsive" src="{{ asset ('images/c2.jpg')}} " alt="">
                            <h3 class="card-title mt-2">Mark Waugh</h3>
                            <p class="sub-title mb-3">Graphic Designer</p>
                            <p class="card-text">  "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore"
                            </p>
                          
                          
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 off-testi-2">
                        <div class="card">
                         
                          <div class="card-body">
                            <img class="card-img-top img-responsive" src="{{ asset ('images/c3.jpg')}} " alt="">
                            <h3 class="card-title mt-2">Sarina Willams</h3>
                            <p class="sub-title mb-3">Web Designer</p>
                            <p class="card-text">  "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore"
                             </p>
                          
                            
                          </div>
                        </div>
                        
                        
                      </div>
                      <div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 off-testi">
                        <div class="card">
                         
                          <div class="card-body">
                            <img class="card-img-top img-responsive" src="{{ asset ('images/c1.jpg')}} " alt="">
                            <h3 class="card-title mt-2">Henry Nicholas</h3>
                            <p class="sub-title mb-3">Cofounder</p>
                            <p class="card-text"> "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore"
                            </p>
                           
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                   

                </div>
                <!--.carousel-inner-->
              </div>
            </div>
          </div>
          <!--//customers -->
        </section>
        <section class="w3l-services2" id="stats">
        			<div class="features-with-17_sur py-5">
        				   <div class="container py-md-3">
        					<div class="heading text-center mx-auto">
        						<h3 class="head text-white">What We Offer</h3>
        						<p class="my-3 head "> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
        						  Nulla mollis dapibus nunc, ut rhoncus
        						  turpis sodales quis. Integer sit amet mattis quam.</p>
        					  </div>
        				     <div class="row pt-5 mt-3">
        						<div class="col-lg-5 features-with-17-left_sur">
        							<h4 class="lft-head">We???re Offering Unmatched Services</h4>
        							<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc Integer sit amet mattis quam.</p>
        							<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam.</p>
        							<div class="stats-1">
        							<div class="stats-1-left">
        								<h4>2300</h4>
        								<h6>Clients</h6>
        							</div>
        							<div class="stats-1-left">
        								<h4>16</h4>
        								<h6>Awards</h6>
        							</div>
        							<div class="stats-1-left">
        								<h4>2536</h4>
        								<h6>Projects</h6>
        							</div>
        						</div>
        						</div>
        						<div class="col-lg-7 my-lg-0 my-5 align-self-center features-with-17-right_sur">
        							<div class="features-with-17-right-tp_sur">
        								<div class="features-with-17-left1">
        									<span class="fa fa-laptop s4"></span>		
        								</div>
        								<div class="features-with-17-left2">
        									<h6><a href="#url">SEO solutions</a></h6>
        									<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore.</p>		
        								</div>
        							</div>
        							<div class="features-with-17-right-tp_sur">
        								<div class="features-with-17-left1">
        										<span class="fa fa-database s5"></span>		
        								</div>
        								<div class="features-with-17-left2">
        										<h6><a href="#url">Social media</a></h6>
        										<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore.</p>			
        								</div>
        							</div>
        							<div class="features-with-17-right-tp_sur">
        								<div class="features-with-17-left1">
        									<span class="fa fa-lock s3"></span>		
        								</div>
        								<div class="features-with-17-left2">
        										<h6><a href="#url">Branding Identity</a></h6>
        										<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore.</p>	
        								</div>
        							</div>
        							<div class="features-with-17-right-tp_sur">
        								<div class="features-with-17-left1">
        										<span class="fa fa-codepen s2"></span>		
        								</div>
        								<div class="features-with-17-left2">
        										<h6><a href="#url">Content Marketing</a></h6>
        										<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore.</p>	
        								</div>
        							</div>
        							
        							
        						</div>
        					</div>
        				</div>
        			</div>
        </section>
        <section class="w3l-news" id="news">
          <section id="grids5-block" class="py-5">
            <div class="container py-lg-3">
              <div class="heading text-center mx-auto">
        				<h3 class="head">Recent posts and updates</h3>
        				<p class="my-3 head"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
        				  Nulla mollis dapibus nunc, ut rhoncus
        				  turpis sodales quis. Integer sit amet mattis quam.</p>
        			  </div>
              <div class="grid-view">
                <div class="row">
                  <div class="col-lg-4 col-md-6 mt-md-4 mt-4">
                    <div class="grids5-info">
                      <a href="#" class="d-block zoom"><img src="{{ asset ('images/g7.jpg')}} " alt="" class="img-fluid news-image"></a>
                      <div class="blog-info">
                        <ul class="news-top">
                           <li><a href="#">Corporate,</a></li>
                           <li><a href="#">Photography</a></li>
                        </ul>
                        <p class="date">Mar 29, 2020</p>
                        <h4><a href="#">Plant Trees While Searching The Web</a></h4>
                       
                        <p class="blog-text">Lorem ipsum dolor sit amet nostrum ad minus libero fugiat molestiae ullam ipsam quas unde earum...</p>
                        <a href="#" class="btn btn-news">Read More <span class="fa fa-angle-right pl-1"></span> </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mt-md-4 mt-5">
                    <div class="grids5-info">
                      <a href="#" class="d-block zoom"><img src="{{ asset ('images/g8.jpg')}} " alt="" class="img-fluid news-image"></a>
                      <div class="blog-info">
                        <ul class="news-top">
                          <li><a href="#">Art,</a></li>
                          <li><a href="#">Photography</a></li>
                       </ul>
                        <p class="date">Sep 28, 2020</p>
                        <h4><a href="#">Why Are Remarketing Ads Important?</a></h4>
                        
                        <p class="blog-text">Lorem ipsum dolor sit amet nostrum ad minus libero fugiat molestiae ullam ipsam quas unde earum...</p>
                        <a href="#" class="btn btn-news">Read More <span class="fa fa-angle-right pl-1"></span> </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 mt-md-4 mt-5">
                    <div class="grids5-info">
                      <a href="#" class="d-block zoom"><img src="{{ asset ('images/g9.jpg')}} " alt="" class="img-fluid news-image"></a>
                      <div class="blog-info">
                        <ul class="news-top">
                          <li><a href="#">Travel,</a></li>
                          <li><a href="#">Fashion</a></li>
                       </ul>
                        <p class="date">Dec 28, 2020</p>
                        <h4><a href="#">How to Build a Chatbot from Pitch to Promotion</a></h4>
                       
                        <p class="blog-text">Lorem ipsum dolor sit amet nostrum ad minus libero fugiat molestiae ullam ipsam quas unde earum...</p>
                        <a href="#" class="btn btn-news">Read More <span class="fa fa-angle-right pl-1"></span> </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </section>

@endsection