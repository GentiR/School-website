<?php
    session_start();
    include 'classes/autoload.php';
    $products = new About;

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
	<link  rel="stylesheet" href="CSS\about.css" type="text/css" >
	<title>ABOUT</title>
</head>
<body>

	<?php include("navbar.php"); ?>

		<div id="content">
			<?php foreach($products->all() as $product): ?>
				<div class="contents">
					<div class="contentholder">
						<div class="image-container">
							<img src="image\<?= $product['Image'] ?>" alt="foto">
						</div>
						<div class="text-container">
							<h1 class="title"><b><?= $product['Name'] ?></h1>
							<p class="description"><?= $product['Description'] ?></p>
						</div>
					</div>
				</div>
            <?php endforeach; ?>
		</div>

		<div id="footer">
			<p id="footertext">Kuhn Interactive © 1996-2020. All right reserved. Designed & supported by <b>Kezarth Group.</b></p>
			<img id="Fotofooter" src="image\Foto-footer.png" alt="foto">	
		</div>
</body>
</html>