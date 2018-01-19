<?php 

	include_once("header.php");

?>

<section>

	<div class="container" id="destaque-produtos-container" ng-controller="destaque-controller">

		<div id="destaque-produtos" class="owl-carousel" >
			
			<div class="item" ng-repeat="produto in produtos">
				
				<div class="col-sm-6 col-imagem">
					<img src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}">
				</div>
				<div class="col-sm-6 col-descricao">
					<h2>{{produto.nome_prod_longo}}</h2>
					<div class="box-valor">
						<div class="text-noboleto text-arial-cinza">no boleto</div>
						<div class="text-por text-arial-cinza">por</div>
						<div class="text-reais text-roxo">R$</div>
						<div class="text-valor text-roxo">{{produto.preco}}</div>
						<div class="text-valor-centavos text-roxo">,{{produto.centavos}}</div>
						<div class="text-parcelas text-arial-cinza">ou em até {{produto.parcelas}}x de R$ {{produto.parcela}}</div>
						<div class="text-total text-arial-cinza">total a prazo R$ {{produto.total}}</div>	
					</div>
					<a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> compre agora</a>
				</div>

			</div>


		</div>

		<button type="button" id="btn-destaque-prev"><i class="fa fa-angle-left"></i></button>
		<button type="button" id="btn-destaque-next"><i class="fa fa-angle-right"></i></button>

	</div>

	<div id="promo" class="container">
		
		<div class="row">
			<div class="col-md-2">
				
				<div class="box-promo box-1">
					<p>Escolha por desconto</p>
				</div>

			</div>
			<div class="col-md-10">
				
				<div class="row-fluid">
					<div class="col-md-3">
						<div class="box-promo">
							<div class="text-ate">até</div>
							<div class="text-numero">40</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="box-promo">	
							<div class="text-ate">até</div>
							<div class="text-numero">60</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>			
						</div>
					</div>
					<div class="col-md-3">
						<div class="box-promo">					
							<div class="text-ate">até</div>
							<div class="text-numero">80</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>		
						</div>
					</div>
					<div class="col-md-3">
						<div class="box-promo">
							<div class="text-ate">até</div>
							<div class="text-numero">85</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	

	</div>

	<div id="mais-buscados" class="container">

		<div class="row text-center title-default-roxo">
			<h2>os mais buscados</h2>
			<hr>
		</div>


		<div class="row">

			<div class="col-md-3">

				<div class="box-produto-info">

					<a href="#">
						<img src="img/produtos/iphone.jpg" alt="Iphone" class="produto-img">
						<h3>Iphone Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, magni!</h3>
						<div class="stars" data-score="5"></div>
						<div class="text-qtd-reviews text-arial-cinza">(300)</div>
						<div class="text-valor text-roxo">501,00</div>
						<div class="text-parcelado text-arial-cinza">10x de R$ 50,00 sem juros.</div>
					</a>

				</div>

			</div>

			<div class="col-md-3">

				<div class="box-produto-info">

					<a href="#">
						<img src="img/produtos/iphone.jpg" alt="Iphone" class="produto-img">
						<h3>Iphone Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, magni!</h3>
						<div class="stars" data-score="2.5"></div>
						<div class="text-qtd-reviews text-arial-cinza">(300)</div>
						<div class="text-valor text-roxo">501,00</div>
						<div class="text-parcelado text-arial-cinza">10x de R$ 50,00 sem juros.</div>
					</a>

				</div>

			</div>

			<div class="col-md-3">

				<div class="box-produto-info">

					<a href="#">
						<img src="img/produtos/iphone.jpg" alt="Iphone" class="produto-img">
						<h3>Iphone Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, magni!</h3>
						<div class="stars" data-score="4"></div>
						<div class="text-qtd-reviews text-arial-cinza">(300)</div>
						<div class="text-valor text-roxo">501,00</div>
						<div class="text-parcelado text-arial-cinza">10x de R$ 50,00 sem juros.</div>
					</a>

				</div>

			</div>

			<div class="col-md-3">

				<div class="box-produto-info">

					<a href="#">
						<img src="img/produtos/iphone.jpg" alt="Iphone" class="produto-img">
						<h3>Iphone Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, magni!</h3>
						<div class="stars" data-score="1"></div>
						<div class="text-qtd-reviews text-arial-cinza">(300)</div>
						<div class="text-valor text-roxo">501,00</div>
						<div class="text-parcelado text-arial-cinza">10x de R$ 50,00 sem juros.</div>
					</a>

				</div>

			</div>

		</div>

	</div>

</section>

<?php 

	include_once("footer.php");

?>

<script>

	angular.module("shop", []).controller("destaque-controller", function($scope){

		$scope.produtos = [];

		$scope.produtos.push({
			nome_prod_longo:"Smartphone Motorola Moto X Play Dual Chip Desbloqueado Andoid 5.1",
			foto_principal:"moto-x.png",
			preco:"1.259",
			centavos:"10",
			parcelas:8,
			parcela:"174,88",
			total:"1.399,00"
		});	

		$scope.produtos.push({
			nome_prod_longo:"Iphone",
			foto_principal:"moto-x.png",
			preco:"1.259",
			centavos:"10",
			parcelas:8,
			parcela:"174,88",
			total:"1.399,00"
		});	

	});
	
	$(function(){

		var owlDestaque = $("#destaque-produtos");

		owlDestaque.owlCarousel({

			autoplay: true,
  			autoplayTimeout:5000,
			items: 1,
  			singleItem: true,
  			loop: true

		});

		$('#btn-destaque-prev').on("click", function(){
		  owlDestaque.trigger('prev.owl.carousel');
		});

		$('#btn-destaque-next').on("click", function(){
		  owlDestaque.trigger('next.owl.carousel');
		});

		$('.stars').each(function(){

			$(this).raty({
				starHalf:    'lib/raty/lib/images/star-half.png',                                // The name of the half star image.
				starOff:     'lib/raty/lib/images/star-off.png',                                 // Name of the star image off.
				starOn:      'lib/raty/lib/images/star-on.png',                                  // Name of the star image on.
				score: 		 parseFloat($(this).data("score"))
			});

		});

	});



</script>