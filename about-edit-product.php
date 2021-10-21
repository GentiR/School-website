<?php
    session_start();
    include 'autoload.php';

    $errors = [];

    $id = $_SESSION['product_id'];
    $products = new About;
    
    if($id > 0)
    $product = $products->get($id);

    if(isset($_POST['update_product_btn'])){
        $name = $_POST['name'];
        $description = $_POST['description'];
        $primaryImage = $_POST['primary_image'];

        if(!empty($name) && !empty($description) && !empty($primaryImage)){
            if($products->update($id , ['name'=>$name, 'description'=>$description, 'image'=>$primaryImage]))
                header("Location: aboutadminpanel.php");
            else{
                $errors[] = "Product wasn't updated.";
                print_r($errors);
            }
        }
        else{
            $errors[] = "All fields are required.";
            print_r($errors);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/adminpanel.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="assets/img/favicon.png">
    <title>Admin Panel | Menu</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="form">
                <!-- Create Product -->
                <h2>Edit Product</h2>
                <form method="POST">
                    <div class="form-group">
                        <label for="price">Image</label>
                        <input type="file" name="primary_image" id="primary_image" value="<?= $product['Image'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="title">Name</label>
                        <input type="text" name="name" id="title" value="<?= $product['Name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" rows="5" value="<?= $product['Description'] ?>"></textarea>
                    </div>
                    <button type="submit" name="update_product_btn">Save</button>
                </form>
            </div>
        </div>
        
</body>
</html>