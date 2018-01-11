<?php 

	require_once("header.php")

 ?>

 <link rel="stylesheet" href="plyr/dist/plyr.css">
 
		<section>

			<div id="call-to-action">

				<div class="container">

					<div class="row text-center">
						<h2>Videos</h2>
						<hr>
					</div>

					<div class="row">
						
						<video poster="img/highlights.jpg" controls>
						  <source src="mp4/highlights.mp4" type="video/mp4">
						  <track kind="captions" label="Português (Brasil)" src="vtt/legendas.vtt" srclang="pt-br" default>
						</video>

					</div>

			<div id="news" class="container" style="top: 0">

				<div class="row text-center">
					<h2>Latest News</h2>
					<hr>
				</div>

				<div class="row thumbnails owl-carousel">
					<div class="col-md-3 item" data-video="highlights">
						
						<img src="img/highlights.jpg" alt="Highlights">
						<h3>Highlights</h3>

					</div>
					<div class="col-md-3 item" data-video="Orlando_City_Foundation_2015">

						<img src="img/Orlando_City_Foundation_2015.jpg" alt="Foundation">
						<h3>Orlando City Foundation 2015</h3>
						
					</div>
					<div class="col-md-3 item" data-video="highlights">
						
						<img src="img/highlights.jpg" alt="Highlights">
						<h3>Highlights</h3>

					</div>
					<div class="col-md-3 item" data-video="Orlando_City_Foundation_2015">

						<img src="img/Orlando_City_Foundation_2015.jpg" alt="Foundation">
						<h3>Orlando City Foundation 2015</h3>
						
					</div>
					<div class="col-md-3 item" data-video="highlights">
						
						<img src="img/highlights.jpg" alt="Highlights">
						<h3>Highlights</h3>

					</div>
					<div class="col-md-3 item" data-video="Orlando_City_Foundation_2015">

						<img src="img/Orlando_City_Foundation_2015.jpg" alt="Foundation">
						<h3>Orlando City Foundation 2015</h3>
						
					</div>
					<div class="col-md-3 item" data-video="highlights">
						
						<img src="img/highlights.jpg" alt="Highlights">
						<h3>Highlights</h3>

					</div>
					<div class="col-md-3 item" data-video="Orlando_City_Foundation_2015">

						<img src="img/Orlando_City_Foundation_2015.jpg" alt="Foundation">
						<h3>Orlando City Foundation 2015</h3>
						
					</div>
				
				</div>

			</div>

				</div>

			</div>

		</section>

<?php 

	require_once("footer.php")

 ?>
		
		<script src="plyr/dist/plyr.js"></script>
		<script src="js/efeitos.js"></script>
		<script>plyr.setup();</script>
		<script>
				
				$(function(){

					$(".thumbnails .item").on("click", function(){

						$("video").attr({
							"src": "mp4/"+$(this).data('video')+".mp4",
							"poster": "img/"+$(this).data('video')+".jpg"
						});

					});

				});

		</script>

	</body>
</html>