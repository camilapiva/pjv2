<?php if(!class_exists('Rain\Tpl')){exit;}?><br><br><br><br><div class="container">
              <div class="row">
                <div class="col-md-6 d-flex "><!-- Textos da seção -->
                  <div class="align-self-center" style="margin-top: 20%;margin-bottom: 5%;">
                    <h1 class="display-1 ">Seu <f style="color: #57AAAA;">próximo amigo</f> pode estar te esperando!</h1>
                                        
                  </div>
                </div><!--/fim textos da seção -->
                <div class="col-md-6 d-none d-md-block" style="margin-top: -20%;margin-bottom: 5%; margin-left:60%">
                  <img style="width:70%" src="/res/site/img/inicio.png">
                </div>
              </div>
            </div>
			  
	<div class="slider-area">
        	<!-- Slider-->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="/res/site/img/h4-slide.png" alt="Slide">
						<div class="caption-group" style="text-align: right;">
							<h2 class="caption title">
								   Adote! E faça um Pet feliz. <br></span>
							</h3>
							<!--<h4 class="caption subtitle">school supplies & backpacks.*</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Comprar</a>
						</div>-->
						</div>
					</li>
					<li><img src="/res/site/img/h4-slide2.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								    Camiseta personalizada.</h2>
							<!--<h4 class="caption subtitle">school supplies & backpacks.*</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Comprar</a>
						</div>-->
					</li>
					<li><img src="/res/site/img/h4-slide3.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								Vai um cafezinho ai?
							</h2>
							<!--<h4 class="caption subtitle">Select Item</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Comprar</a>
						</div>-->
					</li>
					<li><img src="/res/site/img/h4-slide4.png" alt="Slide">
						<div class="caption-group">
						  <h2 class="caption title">
								Personalize sua bolsas com nossos bottons.
							<!--<h4 class="caption subtitle">& Phone</h4></h2>
							<a class="caption button-radius" href="#"><span class="icon"></span>Comprar</a>
						</div>-->
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
	<br><br><br>
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Produtos</h2>
                        <div class="product-carousel">
                            <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
                                    <div class="product-hover">
                                        <a href="/cart/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/add" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Comprar</a>
                                        <a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="view-details-link"><i class="fa fa-link"></i> Ver Detalhes</a>
                                    </div>
                                </div>
                                
                                <h2><a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>R$<?php echo formatPrice($value1["vlprice"]); ?></ins>
                                </div> 
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
<br><br><br>
    <div class="brands-area">
	
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
				<h2 class="section-title">ONGs</h2>
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="/res/site/img/brand1.png" alt="">
                            <img src="/res/site/img/brand2.png" alt="">
                            <img src="/res/site/img/brand3.png" alt="">
                            <img src="/res/site/img/brand4.png" alt="">
                            <img src="/res/site/img/brand5.png" alt="">
                            <img src="/res/site/img/brand6.png" alt="">
                            <img src="/res/site/img/brand1.png" alt="">
                            <img src="/res/site/="img/brand2.png" alt="">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area --><br><br><br><br>