  <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container">
        <?php if(isset($variable[1])): ?>
          <div class="alert alert-success"><?php echo $variable[1] ?></div>
        <?php elseif(isset($variable[0])): ?>
          <div class="alert alert-danger"><?php echo $variable[0] ?></div>
        <?php endif ?>
        <div class="row wow fadeInUp">
          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h5>COMMUNICATION ET MEDIA CONSULTING</h5>
              <p>
                COMMUNICATION ET MEDIA CONSULTING vous apporte des solutions susceptibles de donner aux médias du Bénin, tous les attributs d’entreprises de presse solides et viables.
              </p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <!-- <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> -->
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>Immeuble BABA en face du Campus d'Abomey calavi</p>
              </div>

              <div>
                <i class="ion-ios-email-outline"></i>
                <p>contact@communicationetmedia.net</p>
              </div>

              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>+229 53 31 31 92</p>
              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 ml-5">
            <div class="form">
              <form action="/contact" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Envoyer</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright, All Rights Reserved
          </div>
          <div class="credits">
            Designed by <a href="#">ANGELE STARTUP</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="/" class="scrollto">Accueil</a>
            <a href="/a-propos" class="scrollto">A Propos</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->


  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>
  
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
