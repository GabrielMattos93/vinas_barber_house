
  <!-- ================ footer  ================= -->
  <footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">Sobre Nós</h3>
			<a class="navbar-brand logo_h" href="<?php $BASE_URL ?>"><img src="<?php $BASE_URL ?>assets/img/<?php echo $imagem['logo-dark']?>" alt=""></a>
            <p>Somos uma barbearia moderno, com cortes sofisticados e a gosto do cliente. Atendemos também a domicílio. </p>
            <div class="footer-social">
              <ul>
                <li><a href="https://www.facebook.com/brutecodedw" aria-label="Facebook"><i
                      class="fab fa-facebook-f"></i></a></li>
                <li><a href="##" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                </li>
                <li><a href="https://www.instagram.com/brutecodedw/" aria-label="Instagram"><i
                      class="fab fa-instagram"></i></a></li>
                <li><a href="https://github.com/GabrielMattos93" aria-label="Github"><i class="fab fa-github"></i></a></li>
              </ul>
            </div><!-- Redes social end -->
          </div><!-- Col end -->

          <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
            <h3 class="widget-title">Horário de Funcionamento</h3>
            <div class="working-hours">
             
Nosso horário de funcionamento padrão é de segunda a sábado, execeto aos feriados, em caso de dúvidas entre em contato conosco.
              <br><br> Segunda - Sexta: <span class="text-right">08:00 - 19:00 </span>
              <br> Sábado: <span class="text-right">08:00 - 16:00</span>
              <br> Domingos e Feriados: <span class="text-right">Não há atendimento</span>
            </div>
          </div><!-- Col end -->

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Serviços</h3>
            <ul class="list-arrow">
              <li><a href="##">Corte na Tesoura</a></li>
              <li><a href="##">Corte Navalhado</a></li>
              <li><a href="##">Barba Desenhada</a></li>
              <li><a href="##">Barba Tradicional</a></li>
              <li><a href="##">Corte na Máquina</a></li>
            </ul>
          </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12">
            <div class="copyright-info text-center">
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script>, Barbearia Vina´s Barber House - Um novo conceito em barbearia.  <a class="link-footer" href="https://brutecode.com.br/"></a></span>
            </div>
          </div>

          <div class="col-md-12">
            <div class="copyright-info text-center">
              <span>Desenvolvido por: <a class="link-footer" href="https://brutecode.com.br/">Brutecode | Desenvolvimento Web</a></span>
            </div>
          </div>

          <div class="col-md-12">
            <div class="footer-menu text-center">
              <ul class="list-unstyled mb-0">
                <li><a class="link-footer" href="sobre-nos">Sobre Nós</a></li>
                <li><a  class="link-footer" href="servicos">Servicos</a></li>
                <li><a  class="link-footer" href="equipe">Equipe</a></li>
                <li><a  class="link-footer" href="precos">Preços</a></li>
                <li><a class="link-footer" href="contato">Contato</a></li>
              </ul>
            </div>
          </div>
        </div><!-- Row end -->

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>

      </div><!-- Container end -->
    </div><!-- Copyright end -->
  </footer><!-- Footer end -->


  <!-- ================ Cookies ================= -->
    <link rel="stylesheet" type="text/css"
            href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
        <script>
        window.addEventListener("load", function() {
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#3a414e",
                        "text": "#ffff"
                    },
                    "button": {
                        "background": "#D9BF77"
                    }
                },
                "content": {
                    "message": "Usamos cookies para garantir que você obtenha a melhor experiência em nosso site.",
                    "link": "Leia mais",
                    "dismiss": "Compreendo!",
                    "href": "privacidade"
                }
            })
        });
        </script>

  <!-- ================ Vlibras - Plugin ================= -->
  
  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

 <!-- ================ API do Whatsapp ================= -->
<a href="https://wa.me/552184720221"
    target="_blank"
    style="position:fixed;bottom:20px;left:30px;">
    <svg enable-background="new 0 0 512 512" width="50" height="50" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104  l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z" fill="#4CAF50"/><path d="m405.02 361.5c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.62-127.46-112.58-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016 0.16 8.576 0.288 7.52 0.32 11.296 0.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744s-7.36 7.68-11.136 12.352c-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z" fill="#FAFAFA"/></svg>
</a>

  <script src="./assets/vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="./assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="./assets/vendors/OwlCarousel/owl.carousel.min.js"></script>
  <script src="./assets/vendors/sticky/jquery.sticky.js"></script>
  <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
	<script src="./assets/js/mail-script.js"></script>
  <script src="./assets/vendors/Magnific-Popup/jquery.magnific-popup.min.js"></script>	
  <script src="./assets/js/main.js"></script>
 
</body>
</html>