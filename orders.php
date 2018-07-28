<?php
require 'includes\common.php';
if(!isset($_SESSION['email']))
{
    header('location: index.php');
}
$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Products</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="chat.css" type="text/css">
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="cart.css" type="text/css">
    </head>
    <body>
        <?php
            include 'includes\header.php';
        ?>
        <h1 style="text-align: center">Your Orders</h1>
        <br><br>
        <div class="container container_style">       
            <table class="table">
                <thead>
                    <tr>
                        <th>Item ID</th>
                        <th>Item Name</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <?php
                $query="select users_items.pid, products.name, products.price FROM users_items INNER JOIN products on users_items.pid=products.id where users_items.uid='$id' and status='Confirmed'";
                $query_result= mysqli_query($con, $query) or die(mysqli_error($con));
                $numrows= mysqli_num_rows($query_result);
                if($numrows==0)
                {
                    echo "";
                }
                else
                {
                    $sum=0;
                    $tid="";
                    while ($row= mysqli_fetch_array($query_result))
                    {?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['pid']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['price']; ?></td>
                            </tr>
                        <?php
                            $tid=$tid."'".$row['pid']."'".",";
                            $sum=$sum+$row['price'];                        
                        }?>
                        <tr>
                            <td></td>
                                <td>Total </td>
                                <td>&#x20B9; <?php echo $sum ?></td>
                            </tr>
                        </tbody>
                <?php  } ?>
            </table>
        </div>
        <?php
            if(isset($_SESSION['email']))
            {
                include 'chat.php';
            }
        ?>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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