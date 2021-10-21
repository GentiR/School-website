<?php
    session_start();
    include 'classes/autoload.php';
    $products = new Products;

    if(isset($_POST['single_item'])){
        $id = $_POST['product_id'];
        if($id > 0)
            $_SESSION['singleitem'] = $products->get($id);
            header("Location: singleitem");
            echo "<pre>";
            print_r($_SESSION['singleitem']);
    }

    function single_item($product){
        $product = [
            'id' => $product['id'],
            'name' => $product['Name'],
            'description' => $product['Description'],
            'image' => $product['Image'],
        ];
        $_SESSION['singleitem'] = $product;
    }
?>

<!DOCTYPE html>
<html>
<head>
<link  rel="stylesheet" href="CSS\services.css" type="text/css" >
	<title>PARTNERS</title>

</head>
<body>
	<div id="page">
		
		<?php include('navbar.php'); ?>

		</div class="content-container1">	
		<div id="content">
			<p id="textcontent">Already a partner?</p>
			<p id="textcontentu"><i>View the complete list of tools and resources available to our partners.</i></p>
			<a href="login.php">
				<button id="buttonlogin"><span class="spanlogin">Log in</span></button>  
			</a>
			<p id="textcontentb">Become a partner</p>
		
		<!--<div id="content1">
				 <div id="contentelement1">
					 
					<a href="register.html">
				 	<img  id="foto1content" src="image\Foto 1.jpg" alt="foto" width="250px" height="172px">
					 <p id="text1contet"><b>Value-added resellers</b><br/><br/>
					 </a>
					Sell and support products, services, and solutions for your customers.</p>
				</div>
			<div id="contentelement2">
				<a href="register.html">
				<img src="image\Foto 2.jpg" alt="foto" width="250px" height="172px">
				<p id="text2content"><b>Providers</b><br/><br/>
				</a>
				Build and deliver managed and cloud services.</p>
			</div>	
			<div id="contentelement3">
				<img src="image\Foto 3.jpg" alt="foto" width="250px" height="172px">
				<p id="text3content"><b>Consultants</b><br/><br/>
				Use your expertise to define business outcomes and deliver results.</p>
			</div>
		</div>

			<div id="content2">
			<div id="contentelement4">
				<img src="image\Foto 4.jpg" alt="foto" width="250px" height="172px">
				<p id="text4content"><b>ISVs and IHVs</b><br/><br/>
				Develop, test, market, sell, and connect with other channel partners.</p>
			</div>
			<div id="contentelement5">
				<img src="image\Foto 5.jpg" alt="foto" width="250px" height="172px">
				<p id="text5content"><b>Integrators</b><br/><br/>
				Design our products and solutions within your own solutions.</p>
			</div>
			<div id="contentelement6">
				<img src="image\Foto 6.jpg" alt="foto" width="250px" height="172px">
				<p id="text6content"><b>Lifecycle advisors</b><br/><br/>
				Help customers adopt, expand, and renew to see the value of solutions.</p>
			</div> -->
		</div>
			<div class="content-container">
				<?php foreach($products->all() as $product): ?>
				<div class="content">
					<img src="image\<?= $product['Image'] ?>" alt="foto" width="250px" height="172px">
					<p class="title"><b><?= $product['Name'] ?></b></p>
					<p class="description"><?= $product['Description'] ?></p>
				</div>
            	<?php endforeach; ?>
			</div>
			</div>
			<div id="footer">
					<p id="footertext">Kuhn Interactive © 1996-2020. All right reserved. Designed & supported by <b>Kezarth Group.</b></p>
					<img id="Fotofooter" src="image\Foto-footer.png" alt="foto footer">	
			</div>			
	</div>
</body>
</html>