<?php 

	include_once("header.php");

?>

<section>

	<div class="container" id="destaque-produtos-container">

		<div id="destaque-produtos" class="owl-carousel" >
			
			<div class="item">

				<div class="col-sm-6 col-imagem">
					<img src="img/produtos/moto-x.png" alt="Nome do produto">
				</div>

				<div class="col-sm-6 col-descricao">
					<h2>Smartphone Motorola Moto X Play Dual Chipe Desbloqueado Android 5.1 </h2>
					<div class="box-valor">
						<div class="text-noboleto text-arial-cinza">no boleto</div>
						<div class="text-por text-arial-cinza">por</div>
						<div class="text-reais text-roxo">R$</div>
						<div class="text-valor text-roxo">1.259</div>
						<div class="text-valor-centavos text-roxo">,10</div>
						<div class="text-parcelas text-arial-cinza">ou em até 8x de R$ 174,88</div>
						<div class="text-total text-arial-cinza">total a prazo R$ 1.399,00</div>
					</div>

					<a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> compre agora</a>

				</div>
				
			</div>

			<div class="item">

				<div class="col-sm-6 col-imagem">
					<img src="img/produtos/moto-x.png" alt="Nome do produto">
				</div>

				<div class="col-sm-6 col-descricao">
					<h2>Smartphone Motorola Moto X Play Dual Chipe Desbloqueado Android 5.1 </h2>
					<div class="box-valor">
						<div class="text-noboleto text-arial-cinza">no boleto</div>
						<div class="text-por text-arial-cinza">por</div>
						<div class="text-reais text-roxo">R$</div>
						<div class="text-valor text-roxo">1.259</div>
						<div class="text-valor-centavos text-roxo">,10</div>
						<div class="text-parcelas text-arial-cinza">ou em até 8x de R$ 174,88</div>
						<div class="text-total text-arial-cinza">total a prazo R$ 1.399,00</div>
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

</section>

<?php 

	include_once("footer.php");

?>

<script>
	
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

	});



</script>