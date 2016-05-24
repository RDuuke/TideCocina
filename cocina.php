<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tide</title>
	<link rel="stylesheet" href="css/ed-grid.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
</head>
<body>
	<div class="ed-container">
		<div class="ed-item web-70 tablet-70 no-padding p-relativa">
			<div class="slider_horizontal">
				<div class="slide"><img src="images/casade.png"></div>
				<div class="slide"><img src="images/casade-liquido.png"></div>
				<div class="slide"><img src="images/cesto.png"></div>
				<div class="slide"><img src="images/guantes.png"></div>
				<div class="slide"><img src="images/jarros.png"></div>
				<div class="slide"><img src="images/lavadora.png"></div>
				<div class="slide"><img src="images/lavaplatos.png"></div>
				<div class="slide"><img src="images/lavaplatos-gris.png"></div>
				<div class="slide"><img src="images/matera.png"></div>
				<div class="slide"><img src="images/tide.png"></div>
				<div class="slide"><img src="images/tideultra.png"></div>
				<div class="slide"><img src="images/tohallas.png"></div>
				<div class="slide"><img src="images/utencilios.png"></div>
			</div>
		</div>
		<div class="ed-item web-30 tablet-30 no-padding"> 
			<div class="slider_vertical">
				<div class="slide"><img src="images/1.jpg"></div>
				<div class="slide"><img src="images/2.jpg"></div>
				<div class="slide"><img src="images/3.jpg"></div>
			</div>
		</div>
	</div>
</body>
<script src="js/lib/jquery.min.js"></script>
<script src="js/jquery.bxslider.js"></script>
<script>
	$(document).ready(function(){
  		$('.slider_vertical').bxSlider({
	    	mode: 'vertical',
	    	slideWidth: 400,
	   		minSlides: 3,
	    	slideMargin: 10
  		});	
  		$('.slider_horizontal').bxSlider({
		    slideWidth: 450,
		    minSlides: 6,
		    maxSlides: 6,
		    slideMargin: 10
		});
		$(".slider_vertical").parent().addClass('myclase');
	});
</script>
</html>