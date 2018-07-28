<?php
require 'includes\common.php';
if(!isset($_SESSION['email']))
{
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Confirmed</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="chat.css" type="text/css">
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="success.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes\header.php';
        $id=$_SESSION['id'];
        $gid=(filter_input(INPUT_GET, 'id'));
        $string = rtrim($gid, ',');
        $query="UPDATE `users_items` SET `status` = 'Confirmed' WHERE `users_items`.`uid` = '$id' AND `users_items`.`pid` IN ($string);";
        $query_result= mysqli_query($con, $query) or die(mysqli_error($con));
        ?>
        <div class="container container_style">
            <p>Thank You for ordering from Lifestyle Store. The order shall be delivered </p>
            <p class="text-center">to you shortly.</p>
            <hr>
            <p class="text-center">Order some more items <a href="index.php">here</a></p>
        </div>
        <?php
            if(isset($_SESSION['email']))
            {
                include 'chat.php';
            }
        ?>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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