<?php if(!class_exists('Rain\Tpl')){exit;}?>    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
		
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>Abrace um Pet</h2>
                        <p>A lojinha Abrace um Pet foi desenvolvida no decorrer do segundo semestre de 2019, por um grupo de colegas da instituição SATC em um projeto que tem como objetivo arrecadar fundos para auxiliar ongs de animais e facilitar a busca de ongs próximas para adoção de algum pet.  </p>
                        <div class="footer-social">
                            <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="https://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Navegação </h2>
                        <ul>
                            <li><a href="#">Minha Conta</a></li>
                            <li><a href="#">Meus Pedidos</a></li>
                            <li><a href="#">Lista de Desejos</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categorias</h2>
                        <ul>
                            <?php require $this->checkTemplate("categories-menu");?>
                            <li><a href="#">Categoria Um</a></li>
                            
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Fique por dentro</h2>
                        <p>Preencha o campo abaixo para receber novidades das ONGs.!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" style="color:#000" placeholder="Insira seu email">
                                <input type="submit" value="Inscreva-se Já!">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>Abrace um Pet © 2019. Todos os direitos reservados.<div class="linkabaixosite"><a  href="http://www.abraceumpet.com.br" target="_blank">abraceumpet.com.br</li></div></p>
                    </div>
                </div>
					<div class="linkabaixosite">
						<div class="col-md-4">
							<div class="footer-card-icon">
								<i class="fa fa-cc-discover"></i>
								<i class="fa fa-cc-mastercard"></i>
								<i class="fa fa-cc-paypal"></i>
								<i class="fa fa-cc-visa"></i>
							</div>
						</div>
						<p class="logobottom"> <img src="/res/site/img/logo2.png" alt="abraceumpet"><p>
					</div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="/res/site/js/owl.carousel.min.js"></script>
    <script src="/res/site/js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="/res/site/js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="/res/site/js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="/res/site/js/bxslider.min.js"></script>
	<script type="text/javascript" src="/res/site/js/script.slider.js"></script>
  </body>
</html>