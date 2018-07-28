<?php
require 'includes\common.php';
require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Products</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="products.css" type="text/css">
        <link rel="stylesheet" href="chat.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <?php
        include 'includes\header.php';
        ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Gadgets World.</h1>
                <p>We have the best cameras, watches and laptops for you. No need to hunt around, we have all in one place.</p>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <a class="thumbnail" href="#"><img src="camera1.jpg" alt="Camera"></a>
                    <div class="caption">
                        <h3>Camera C5</h3>
                        <p>Price &#x20B9; 30000</p>
                        <?php
                            $query1="SELECT id FROM `products` WHERE `name` = 'Camera C5'";
                            $query_submit1= mysqli_query($con, $query1) or die(mysqli_error($con));
                            $row1= mysqli_fetch_array($query_submit1);
                            $item_id1=$row1['id'];
                            if(!isset($_SESSION['email']))
                            {
                                echo '<a class="btn btn-primary btn-block" href="login.php">Add to Cart</a>';
                            }
                            else
                            {
                                if(check_if_added_to_cart($item_id1)==1)
                                {
                                     echo '<a href="#" class="btn btn-primary btn-success" disabled>Added to cart</a>';
                                }
                                else
                                {
                                    echo '<a class="btn btn-primary btn-block" href="cart_add.php?id='.$item_id1.'" name="add" href="login.php">Add to Cart</a>';
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a class="thumbnail" href="#"><img src="camera2.jpg" alt="Camera"></a>
                    <div class="caption">
                        <h3>Camera X6</h3>
                        <p>Price &#x20B9; 40000</p>
                        <?php
                            $query2="SELECT id FROM `products` WHERE `name` = 'Camera X6'";
                            $query_submit2= mysqli_query($con, $query2) or die(mysqli_error($con));
                            $row2= mysqli_fetch_array($query_submit2);
                            $item_id2=$row2['id'];
                            if(!isset($_SESSION['email']))
                            {
                                echo '<a class="btn btn-primary btn-block" href="login.php">Add to Cart</a>';
                            }
                            else
                            {
                                if(check_if_added_to_cart($item_id2)==1)
                                {
                                     echo '<a href="#" class="btn btn-primary btn-success" disabled>Added to cart</a>';
                                }
                                else
                                {
                                    echo '<a class="btn btn-primary btn-block" href="cart_add.php?id='.$item_id2.'" name="add" href="login.php">Add to Cart</a>';
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a class="thumbnail" href="#"><img src="camera3.jpg" alt="Camera"></a>
                    <div class="caption">
                        <h3>Camera E15</h3>
                        <p>Price &#x20B9; 50000</p>
                        <?php
                            $query3="SELECT id FROM `products` WHERE `name` = 'Camera E15'";
                            $query_submit3= mysqli_query($con, $query3) or die(mysqli_error($con));
                            $row3= mysqli_fetch_array($query_submit3);
                            $item_id3=$row3['id'];
                            if(!isset($_SESSION['email']))
                            {
                                echo '<a class="btn btn-primary btn-block" href="login.php">Add to Cart</a>';
                            }
                            else
                            {
                                if(check_if_added_to_cart($item_id3)==1)
                                {
                                     echo '<a href="#" class="btn btn-primary btn-success" disabled>Added to cart</a>';
                                }
                                else
                                {
                                    echo '<a class="btn btn-primary btn-block" href="cart_add.php?id='.$item_id3.'" name="add" href="login.php">Add to Cart</a>';
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a class="thumbnail" href="#"><img src="camera4.jpg" alt="Camera"></a>
                    <div class="caption">
                        <h3>Camera GH</h3>
                        <p>Price &#x20B9; 60000</p>
                        <?php
                            $query4="SELECT id FROM `products` WHERE `name` = 'Camera GH'";
                            $query_submit4= mysqli_query($con, $query4) or die(mysqli_error($con));
                            $row4= mysqli_fetch_array($query_submit4);
                            $item_id4=$row4['id'];
                            if(!isset($_SESSION['email']))
                            {
                                echo '<a class="btn btn-primary btn-block" href="login.php">Add to Cart</a>';
                            }
                            else
                            {
                                if(check_if_added_to_cart($item_id4)==1)
                                {
                                    echo '<a class="btn btn-primary btn-success" href="#" disabled>Added to cart</a>';
                                }
                                else
                                {
                                    echo '<a class="btn btn-primary btn-block" href="cart_add.php?id='.$item_id4.'" name="add" href="login.php">Add to Cart</a>';
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
            <br>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <a class="thumbnail" href="#"><img src="watch1.jpg" alt="watches"></a>
                    <div class="caption">
                        <h3>Watch 229</h3>
                        <p>Price &#x20B9; 3000</p>
                        <?php
                            $query5="SELECT id FROM `products` WHERE `name` = 'Watch 229'";
                            $query_submit5= mysqli_query($con, $query5) or die(mysqli_error($con));
                            $row5= mysqli_fetch_array($query_submit5);
                            $item_id5=$row5['id'];
                            if(!isset($_SESSION['email']))
                            {
                                echo '<a class="btn btn-primary btn-block" href="login.php">Add to Cart</a>';
                            }
                            else
                            {
                                if(check_if_added_to_cart($item_id5)==1)
                                {
                                     echo '<a href="#" class="btn btn-primary btn-success" disabled>Added to cart</a>';
                                }
                                else
                                {
                                    echo '<a class="btn btn-primary btn-block" href="cart_add.php?id='.$item_id5.'" name="add" href="login.php">Add to Cart</a>';
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a class="thumbnail" href="#"><img src="watch2.jpg" alt="watches"></a>
                    <div class="caption">
                        <h3>Watch R56</h3>
                        <p>Price &#x20B9; 4000</p>
                        <?php
                            $query6="SELECT id FROM `products` WHERE `name` = 'Watch R56'";
                            $query_submit6= mysqli_query($con, $query6) or die(mysqli_error($con));
                            $row6= mysqli_fetch_array($query_submit6);
                            $item_id6=$row6['id'];
                            if(!isset($_SESSION['email']))
                            {
                                echo '<a class="btn btn-primary btn-block" href="login.php">Add to Cart</a>';
                            }
                            else
                            {
                                if(check_if_added_to_cart($item_id6)==1)
                                {
                                     echo '<a href="#" class="btn btn-primary btn-success" disabled>Added to cart</a>';
                                }
                                else
                                {
                                    echo '<a class="btn btn-primary btn-block" href="cart_add.php?id='.$item_id6.'" name="add" href="login.php">Add to Cart</a>';
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a class="thumbnail" href="#"><img src="watch3.jpg" alt="watches"></a>
                    <div class="caption">
                        <h3>Watch E4l</h3>
                        <p>Price &#x20B9 5000</p>
                        <?php
                            $query7="SELECT id FROM `products` WHERE `name` = 'Watch E4l'";
                            $query_submit7= mysqli_query($con, $query7) or die(mysqli_error($con));
                            $row7= mysqli_fetch_array($query_submit7);
                            $item_id7=$row7['id'];
                            if(!isset($_SESSION['email']))
                            {
                                echo '<a class="btn btn-primary btn-block" href="login.php">Add to Cart</a>';
                            }
                            else
                            {
                                if(check_if_added_to_cart($item_id7)==1)
                                {
                                     echo '<a href="#" class="btn btn-primary btn-success" disabled>Added to cart</a>';
                                }
                                else
                                {
                                    echo '<a class="btn btn-primary btn-block" href="cart_add.php?id='.$item_id7.'" name="add" href="login.php">Add to Cart</a>';
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a class="thumbnail" href="#"><img src="watch4.jpg" alt="watches"></a>
                    <div class="caption">
                        <h3>Watch FG9</h3>
                        <p>Price &#x20B9; 6000</p>
                        <?php
                            $query8="SELECT id FROM `products` WHERE `name` = 'Watch FG9'";
                            $query_submit8= mysqli_query($con, $query8) or die(mysqli_error($con));
                            $row8= mysqli_fetch_array($query_submit8);
                            $item_id8=$row8['id'];
                            if(!isset($_SESSION['email']))
                            {
                                echo '<a class="btn btn-primary btn-block" href="login.php">Add to Cart</a>';
                            }
                            else
                            {
                                if(check_if_added_to_cart($item_id8)==1)
                                {
                                     echo '<a href="#" class="btn btn-primary btn-success" disabled>Added to cart</a>';
                                }
                                else
                                {
                                    echo '<a class="btn btn-primary btn-block" href="cart_add.php?id='.$item_id8.'" name="add" href="login.php">Add to Cart</a>';
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
            <br>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <a class="thumbnail" href="#"><img src="s.jpg" alt="shirts"></a>
                    <div class="caption">
                        <h3>Laptop 1</h3>
                        <p>Price &#x20B9; 91500</p>
                        <?php
                            $query9="SELECT id FROM `products` WHERE `name` = 'Laptop1'";
                            $query_submit9= mysqli_query($con, $query9) or die(mysqli_error($con));
                            $row9= mysqli_fetch_array($query_submit9);
                            $item_id9=$row9['id'];
                            if(!isset($_SESSION['email']))
                            {
                                echo '<a class="btn btn-primary btn-block" href="login.php">Add to Cart</a>';
                            }
                            else
                            {
                                if(check_if_added_to_cart($item_id9)==1)
                                {
                                     echo '<a href="#" class="btn btn-primary btn-success" disabled>Added to cart</a>';
                                }
                                else
                                {
                                    echo '<a class="btn btn-primary btn-block" href="cart_add.php?id='.$item_id9.'" name="add" href="login.php">Add to Cart</a>';
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a class="thumbnail" href="#"><img src="s2.jpg" alt="shirts"></a>
                    <div class="caption">
                        <h3>Laptop 2</h3>
                        <p>Price &#x20B9; 91000</p>
                        <?php
                            $query10="SELECT id FROM `products` WHERE `name` = 'Laptop2'";
                            $query_submit10= mysqli_query($con, $query10) or die(mysqli_error($con));
                            $row10= mysqli_fetch_array($query_submit10);
                            $item_id10=$row10['id'];
                            if(!isset($_SESSION['email']))
                            {
                                echo '<a class="btn btn-primary btn-block" href="login.php">Add to Cart</a>';
                            }
                            else
                            {
                                if(check_if_added_to_cart($item_id10)==1)
                                {
                                     echo '<a href="#" class="btn btn-primary btn-success" disabled>Added to cart</a>';
                                }
                                else
                                {
                                    echo '<a class="btn btn-primary btn-block" href="cart_add.php?id='.$item_id10.'" name="add" href="login.php">Add to Cart</a>';
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a class="thumbnail" href="#"><img src="s3.jpg" alt="shirts"></a>
                    <div class="caption">
                        <h3>Laptop 3</h3>
                        <p>Price &#x20B9; 85550</p>
                        <?php
                            $query11="SELECT id FROM `products` WHERE `name` = 'Laptop3'";
                            $query_submit11= mysqli_query($con, $query11) or die(mysqli_error($con));
                            $row11= mysqli_fetch_array($query_submit11);
                            $item_id11=$row11['id'];
                            if(!isset($_SESSION['email']))
                            {
                                echo '<a class="btn btn-primary btn-block" href="login.php">Add to Cart</a>';
                            }
                            else
                            {
                                if(check_if_added_to_cart($item_id11)==1)
                                {
                                     echo '<a href="#" class="btn btn-primary btn-success" disabled>Added to cart</a>';
                                }
                                else
                                {
                                    echo '<a class="btn btn-primary btn-block" href="cart_add.php?id='.$item_id11.'" name="add" href="login.php">Add to Cart</a>';
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a class="thumbnail" href="#"><img src="s4.jpg" alt="shirts"></a>
                    <div class="caption">
                        <h3>Laptop 4</h3>
                        <p>Price &#x20B9; 56600</p>
                        <?php
                            $query12="SELECT id FROM `products` WHERE `name` = 'Laptop4'";
                            $query_submit12= mysqli_query($con, $query12) or die(mysqli_error($con));
                            $row12= mysqli_fetch_array($query_submit12);
                            $item_id12=$row12['id'];
                            if(!isset($_SESSION['email']))
                            {
                                echo '<a class="btn btn-primary btn-block" href="login.php">Add to Cart</a>';
                            }
                            else
                            {
                                if(check_if_added_to_cart($item_id12)==1)
                                {
                                     echo '<a href="#" class="btn btn-primary btn-success" disabled>Added to cart</a>';
                                }
                                else
                                {
                                    echo '<a class="btn btn-primary btn-block" href="cart_add.php?id='.$item_id12.'" name="add" href="login.php">Add to Cart</a>';
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
            </div>
            <?php
            if(isset($_SESSION['email']))
            {
                include 'chat.php';
            }
        ?>
            <br>
            <br>
            <br><br><br><br><br><br><br><br><br><br>
        <?php
        include 'includes\footer.php';
        ?>
    </body>
</html>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        displayFromDatabase();
        setInterval(displayFromDatabase(), 1);
        $("#btn-chat").click(function(){
            var message=$("#btn-input").val();
            $.ajax({
              url: "ajax.php",
              type: "POST",
              async: false,
              data: {
                  "done" : 1,
                  "messages" : message
              },
              success: function(data){
                  displayFromDatabase();
                  $("#btn-input").val('');
              }
            });
        });
        setInterval(function(){
            $('display_area').load(displayFromDatabase()).fadeIn("slow");
        }, 1000);
    });
    function displayFromDatabase(){
        $.ajax({
            url: "ajax.php",
            type: "POST",
            async: false,
            data: {
                "display": 1
            },
            success: function(d){
                $("#display_area").html(d);
            }
        });
    }
    </script>