@extends('master')

    @section('contacte')

            <section class="w3l-contact-breadcrum">
              <div class="breadcrum-bg">
                <div class="container py-5">
                  <h2>Contactez-Nous</h2>
                  <p><a href="/accueil">Accueil</a> &nbsp; / &nbsp; Contactez-nous</p>
                </div>
              </div>
            </section>
            <section class="w3l-contact-2 py-5" id="contact">
                <div class="contact-infubd section-gap py-lg-5 py-md-4">
                    <div class="container">
                        <div class="contact-grids d-grid">
                            <div class="contact-left">
                                <h4>Laissez votre message</h4>
                                <h6>Pour plus d'informations sur le forum, n'hésitez pas de nous contacter.</h6>
                                <div class="hours">
                                    <h6 class="info mt-3">Email:</h6>
                                    <p> <a href="mailto:info@africafintech.org">
                                        info@africafintech.org</a></p>
                                    <h6 class="info mt-3">Adresse:</h6>
                                    <p> Plateaux, Abidjan, Cote d'Ivoire.</p>
                                    <h6 class="info mt-3">Contact:</h6>
                                    <p class="margin-top"><a href="tel:+225 59 87 69 98">+225 59 87 69 98</a></p>
                                </div>
                            </div>
                            <div class="contact-right">
                                <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                                    <div class="input-grids">
                                        <input type="text" name="w3lName" id="w3lName" placeholder="Votre Nom*" class="contact-input">
                                        <input type="email" name="w3lSender" id="w3lSender" placeholder="Votre Email*" class="contact-input" required="">
                                        <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Objet*" class="contact-input">
                                    </div>
                                    <div class="form-input">
                                        <textarea name="w3lMessage" id="w3lMessage" placeholder="Saisir votre message ici *" required=""></textarea>
                                    </div>
                                    <button class="btn btn-secondary btn-theme2 submit">Soumettre</button>
                                </form>
                            </div>

                        </div>
                    </div>
            </div></section>
            <!-- contact -->
            <section class="w3l-contacts-12" id="">
                <div class="contact-top">
                 
                    <!-- map -->
                    <div class="map map mt-md-0 mt-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d63561.75648707533!2d-4.058591581226118!3d5.3234024739597485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0xfc1eba131366553%3A0xbb6747e85334c6ea!2sPlateau%2C%20Abidjan%2C%20C%C3%B4te%20d&#39;Ivoire!3m2!1d5.3233179999999996!2d-4.0235718!4m5!1s0xfc1eba131366553%3A0xbb6747e85334c6ea!2sPlateau%2C%20Abidjan%2C%20C%C3%B4te%20d&#39;Ivoire!3m2!1d5.3233179999999996!2d-4.0235718!5e0!3m2!1sen!2sin!4v1615377797735!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <!-- //map -->
                </div>
            </section>
            <!-- //contact -->

    @stop