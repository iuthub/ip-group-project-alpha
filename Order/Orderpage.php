<?php   

session_start();
$con = mysqli_connect("localhost", "root", "","product");
mysqli_select_db($con, 'product');
if(isset($_POST["order now"]))
{
    if(isset($_SESSION["oreder"]))
    {

        $item_array_id = array_culmn ($_SESSION["order"], "item_id");
        if (!in_array($_GET["id"], $item_array_id))
        {

            $count = count($_SESSION["order"]);
            $item_array = array (
                    'item_id' => $_GET["id"],
                    'item_name' => $_GET["name"],
                    'item_price' => $_GET["price"],
                    'item_quantity' => $_GET["quantity"]

            );
            $_SESSION["order"][$count] = $item_array;
        }
        else
        {
            echo '<script>alert("Item Already Added")</script>';
            echo '<script>window.locaton="index.php"</script>';
        }
    }
    else
    {
        $item_array = array(


        );
    }

}

?>

<?php 
    $query = "SELECT * FROM product ORDER BY id ASC";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result) > 0) {
        while ($row = msqli_fetch_array($result)){}
    }
?>

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Css-->
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
                    <li><a class="nav-link" href="">Home</a> </li>
                    <li><a class="nav-link" href="">Reservation</a> </li>
                    <li><a class="nav-link" href="">Shop</a> </li>
                    <li><a class="nav-link" href="">Order</a> </li>
                    <li><a class="nav-link" href="">Contact</a> </li>
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
                    <div class="order-info">
                        <div class="price">
                            <h3>Beef rare</h3>
                            <p>75000</p>
                        </div>
                        <button class="btn">order now</button>
                    </div>
                    <div class="order-info">
                        <div class="price">
                            <h3>Beef rare</h3>
                            <p>75000</p>
                        </div>
                        <button class="btn">order now</button>
                    </div>
                    <div class="order-info">
                        <div class="price">
                            <h3>Beef rare</h3>
                            <p>75000</p>
                        </div>
                        <button class="btn">order now</button>
                    </div>
                    <div class="order-info">
                        <div class="price">
                            <h3>Beef rare</h3>
                            <p>75000</p>
                        </div>
                        <button class="btn">order now</button>
                    </div>
                </div>
                <div class="order-row">
                    <div class="order-info">
                        <div class="price">
                            <h3>Beef rare</h3>
                            <p>75000</p>
                        </div>
                        <button class="btn">order now</button>
                    </div>
                    <div class="order-info">
                        <div class="price">
                            <h3>Beef rare</h3>
                            <p>75000</p>
                        </div>
                        <button class="btn">order now</button>
                    </div>
                    <div class="order-info">
                        <div class="price">
                            <h3>Beef rare</h3>
                            <p>75000</p>
                        </div>
                        <button class="btn">order now</button>
                    </div>
                    <div class="order-info">
                        <div class="price">
                            <h3>Beef rare</h3>
                            <p>75000</p>
                        </div>
                        <button class="btn">order now</button>
                    </div>

                </div>
            </div>
            
        </div>
        <div class="cart">
            <h1>Your order</h1>
            <img src="img/2331970 1.png" alt="">
            <p>Cart is empty. Add menu items</p>
            <button class="btn-cart">GO TO CHECKOUT</button>
        </div>
<h2>Order Details</h2>
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

</body>

</html>