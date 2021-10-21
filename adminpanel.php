<?php
    session_start();
    include 'autoload.php';

    if(isset($_SESSION['is_admin']) || isset($_COOKIE['is_admin'])) {
        if($_SESSION['is_admin'] != 1) {
            die("You are not allowed to view this page!");
        }
    }

    $errors = [];

    $p = new Products;
    $products = $p->all();

    if(isset($_POST['save_product_btn'])){
        $primaryImage = $_FILES['primary_image']['name'];
        echo $primaryImage;
        $name = $_POST['name'];
        $description = $_POST['description'];

        
        if(!empty($name) && !empty($description) && !empty($primaryImage)){

            move_uploaded_file($_FILES['primary_image']['tmp_name'], "./image/" .$_FILES['primary_image']['name']);
            
            if($p->create(['image'=>$primaryImage , 'name'=>$name, 'description'=>$description]))
                header("Location: adminpanel.php");
            else{
                $errors[] = "Product wasn't added.";
                print_r($errors);
            }
        }
        else{
            $errors[] = "All fields are required.";
            print_r($errors);
        }
    }

    if(isset($_GET['action']) && ($_GET['action']) == 'edit'){
        if(isset($_GET['product_id']) && (is_numeric($_GET['product_id']))){
            $_SESSION['product_id'] = $_GET['product_id'];
            header("Location: edit-product.php");
        }
        else{
            $errors[] = "Product doesn't exist";
        }
    }
    
    if(isset($_GET['action']) && ($_GET['action']) == 'delete'){
        if(isset($_GET['product_id']) && (is_numeric($_GET['product_id']))){
            if($p->delete($_GET['product_id'])){
                header("Location: adminpanel.php");
            }
            else{
                $errors[] = "Something went wrong with id:" .$_GET['product_id'];
                print_r($errors);
            }
        }
        else{
            $errors[] = "Product doesn't exist";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/adminpanel.css">
    <link rel="stylesheet" href="../assets/style/admin-panel.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="../assets/img/favicon.png">
    
    <title>Admin Panel | Menu</title>
</head>
<body>
    
        <div class="create">
            <div class="form">
                <!-- Create Product -->
                <h2>Add new Service</h2>
                <a href="aboutadminpanel.php">Add new About Content</a>
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="price">Image</label><br>
                        <input type="file" name="primary_image" id="primary_image">
                    </div>
                    <div class="form-group">
                        <label for="title">Name</label><br>
                        <input type="text" name="name" id="title">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label><br>
                        <textarea name="description" id="description" rows="5"></textarea>
                    </div>
                    <button type="submit" name="save_product_btn">Add</button>
                </form>
            </div>
        </div>

        <div class="products">
            <h2>Products</h2>
            <div class="row">
                <!-- Create Product -->
                <div class="col-md-8">
                    <?php if(count($products) > 0): ?>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th class="description">Description</th>
                                <th></th>
                            </tr>
                            <!-- for each -->
                            <?php foreach($products as $product): ?>
                                <tr>
                                    <td><?= $product['id'] ?></td>
                                    <td><?= $product['Image'] ?></td>
                                    <td><?= $product['Name'] ?></td>
                                    <td><?= $product['Description'] ?></td>
                                    <td>
                                        <a href="?action=edit&product_id=<?= $product['id'] ?>" class="edit btn btn-sm btn-primary">Edit</a>
                                        <a href="?action=delete&product_id=<?= $product['id'] ?>" class="delete btn btn-sm btn-danger" onclick="return confirm('Are you sure?')" >Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                    <?php else: ?>
                        0 products
                    <?php endif; ?>
                </div>
            </div>
        </div>
        
        <?php include('footer.php'); ?>

</body>
</html>