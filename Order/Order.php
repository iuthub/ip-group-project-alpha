<?php 
session_start();
$product_ids = array();
session_destroy();

if(filter_input(INPUT_POST, 'add')){
   if (isset($_SESSION['Order'])){

        $count = count($_SESSION['Order']);
        $product_ids = array_column($_SESSION['Order'], 'id');
        if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)){
        $_SESSION['Order'][$count] = array(
            'id' => filter_input(INPUT_GET, 'id'),
            'name' => filter_input(INPUT_POST, 'name'),
            'price' => filter_input(INPUT_POST, 'price'),
            'quantity' => filter_input(INPUT_POST, 'quantity')
        );

        }
        else{
            for ($i = 0; $i < count($product_ids); $i++){
                if ($product_ids[$i] == filter_input(INPUT_GET, 'id')){
                    $_SESSION['Order'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                }
            }
        }
    } 
    else{
        $_SESSION['Order'][0] = array(
            'id' => filter_input(INPUT_GET, 'id'),
            'name' => filter_input(INPUT_POST, 'name'),
            'price' => filter_input(INPUT_POST, 'price'),
            'quantity' => filter_input(INPUT_POST, 'quantity')
        );
    }
}

if(filter_input(INPUT_GET, 'action') == 'delete'){
    foreach ($_SESSION['Order'] as $key => $product) {
        if ($product['id'] == filter_input(INPUT_GET, 'id')){
            unset($_SESSION['Order'][$key]);
        }
    }
    $_SESSION['Order'] = array_values($_SESSION['Order']);
}

//pre_r($_SESSION);

function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>



       


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <!--Css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="main.css">
    <!--Google fonts-->
    <!--Ribeye Marrow-->
    <link href="https://fonts.googleapis.com/css2?family=Ribeye+Marrow&display=swap" rel="stylesheet">
    <!--Pinyon Script-->
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
    <!--Piedra-->
    <link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
</head>

<body>
    <div id="page-wrapper">
        <header id="header">
            <div class="logo">
                <img src="img/ALPHA.COM.png" alt="">
            </div>
            <nav id="navbar">
                <ul>
                    <li><a class="nav-link" href="/IP_project/Sign_in/home_page/home.php">Home</a> </li>
                    <li><a class="nav-link" href="">Reservation</a> </li>
                    <li><a class="nav-link" href="">Menu</a> </li>
                    <li><a class="nav-link" href="">Shop</a> </li>
                    <li><a class="nav-link" href="">Order</a> </li>
                    <li><a class="nav-link" href="/IP_project/contact/index.php">Contact</a> </li>
                </ul>
            </nav>
            <div class="social">
                <a href=""> <img class="fb" src="img/facebook.svg" alt=""></a>
            </div>
        </header>
        <div class="center-text">
            <h1>Discover</h1>
            <p>online ordering</p>
        </div>
    </div>

    <div id="container">
        <div class="grid">
            <h1>Steaks</h1>
            <div class="order">
                <div class="order-row">
                    <?php 
        $connect = mysqli_connect("localhost", "root", "","product");
        $query = 'SELECT * FROM product ORDER by id ASC';
        $result = mysqli_query($connect, $query);

        if ($result):
            if(mysqli_num_rows($result)>0):
                while($product = mysqli_fetch_assoc($result)):
                    //print_r($product);
                    ?>
                    <div class="col-sm-4 col-md-3">
                        <form method = "pst" action="Order.php?action=add&id = <?php echo $product['id']; ?> ">
                        <div class="product">
                            <img src="<?php echo $product['image']; ?>" class="img-responsive" />
                            <h3 class = "text-info"><?php echo $product['name']; ?></h3>
                            <h3>$ <?php echo $product['price']; ?></h3>
                            <input class="form_control" name = "quantity" type="text" value="1"/>
                            <input name = "name" type="hidden" value="<?php echo $product['name']; ?>"/>
                            <input name = "price" type="hidden" value="<?php echo $product['price']; ?>"/>
                            <input class="btn-info" name = "add" type="submit" value="Order Now"/>
                            <!--p>75000</p-->
                        </div>
                        </form>
                    </div>
                    <?php 
                    endwhile;
                endif;
            endif;

        ?>
        <div dtyle="clear:both"></div>
            <br />
            <div class="table">
                <table class="table">
                    <tr></tr colspan="5"><h3>Order Details</h3>
                    <tr>
                        <th width="40%">Food name</th>
                        <th width="10%">Quantity</th>
                        <th width="20%">Price</th>
                        <th width="15%">Total</th>
                        <th width="5%">Action</th>
                    </tr>
                    <?php 
                        if(!empty($_SESSION["Order"])):
                            $total = 0;
                            foreach ($_SESSION["Order"] as $key => $value):
                    ?>
                            <tr>
                                <td><?php echo $product['name']; ?></td> 
                                <td><?php echo $product['quantity']; ?></td> 
                                <td>$ <?php echo $product['price']; ?></td> 
                                <td>$ <?php echo number_format ($product['quantity'] * $product['price'], 2); ?></td> 
                                <td>
                                    <a herf="Order.php?action=delete&id=<?php echo $product['id']; ?>">
                                        <div class='btn-danger'>Remove</div> 
                                    </a>
                                </td>
                            </tr>
                            <?php 
                                    $total = $total + ($product['quantity'] * $product['price']);
                                endforeach;
                            ?>
                            <tr>
                                <td colspan="3" aligin="right">Total</td>
                                <td align="right">$ <?php echo number_format($total, 2); ?></td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <?php 
                                        if (isset($_SESSION['Order'])):
                                        if (count($_SESSION['Order']) > 0):
                                    ?>
                                    <a href="#" class="button">Chekout</a>
                                <?php endif; endif; ?>
                                </td>
                            </tr>                            
                            <?php
                        endif;
                    ?>
                </table>

            </div>
                        
                </div>
            </div>

        <!--/div>
        <div class="cart">
            <h1>Your order</h1>
            <img src="img/2331970 1.png" alt="">
            <p>Cart is empty. Add menu items</p>
            <button class="btn-cart">GO TO CHECKOUT</button>
        </div-->

    </div>

</body>

</html>